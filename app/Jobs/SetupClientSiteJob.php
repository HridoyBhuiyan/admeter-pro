<?php

namespace App\Jobs;

use App\Models\Clients;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class SetupClientSiteJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $timeout = 600;
    public $tries = 3;

    protected Clients $client;

    /**
     * Absolute git path (IMPORTANT for queue workers)
     */
    private string $gitBinary = '/usr/bin/git';

    public function __construct(Clients $client)
    {
        $this->client = $client;
    }

    public function handle(): void
    {
        $brandSlug = Str::slug($this->client->brand_name);

        $parentPath = DB::table('configs')
            ->where('key', 'parent_path')
            ->value('value');

        if (!$parentPath) {
            Log::error('[SetupClientSiteJob] parent_path not found in configs table');
            return;
        }

        $clientFolderPath = rtrim($parentPath, '/') . '/' . $brandSlug;

        Log::info("[SetupClientSiteJob] Started for {$this->client->brand_name}");
        Log::info("[SetupClientSiteJob] Target path: {$clientFolderPath}");

        // Folder existence check
        if (!is_dir($clientFolderPath)) {
            Log::error("[SetupClientSiteJob] Folder does not exist: {$clientFolderPath}");
            return;
        }

        // Writable check
        if (!is_writable($clientFolderPath)) {
            Log::error("[SetupClientSiteJob] Folder is not writable: {$clientFolderPath}");
            return;
        }

        try {
            // Verify git exists
            $this->runCommand(['/usr/bin/which', 'git'], $clientFolderPath);

            // Initialize git only if not already initialized
            if (!is_dir($clientFolderPath . '/.git')) {
                $this->runCommand([$this->gitBinary, 'init'], $clientFolderPath);
            } else {
                Log::info('[SetupClientSiteJob] Git already initialized');
            }

            $gitUrl = DB::table('configs')
                ->where('key', 'git_url')
                ->value('value');

            if (!$gitUrl) {
                Log::error('[SetupClientSiteJob] git_url not found in configs table');
                return;
            }

            // Make job retry-safe
            $this->runCommand([$this->gitBinary, 'remote', 'remove', 'origin'], $clientFolderPath, false);
            $this->runCommand([$this->gitBinary, 'remote', 'add', 'origin', $gitUrl], $clientFolderPath);

            // Pull code
            $this->runCommand([
                $this->gitBinary,
                'pull',
                'origin',
                'main',
                '--depth=1'
            ], $clientFolderPath);

            Log::info("[SetupClientSiteJob] Repository pulled successfully");

        } catch (\Throwable $e) {
            Log::error('[SetupClientSiteJob] FAILED');
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());

            throw $e; // important for retries
        }
    }

    /**
     * Run shell command safely with logs
     */
    private function runCommand(array $command, string $workingDir, bool $throwOnFail = true): void
    {
        $process = new Process($command, $workingDir);
        $process->setTimeout(300);
        $process->run();

        Log::info('[CMD] ' . implode(' ', $command));
        Log::info('[STDOUT] ' . trim($process->getOutput()));
        Log::error('[STDERR] ' . trim($process->getErrorOutput()));

        if ($throwOnFail && !$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
    }
}

