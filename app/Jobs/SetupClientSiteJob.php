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
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class SetupClientSiteJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $timeout = 600;
    public $tries = 2;

    protected $client;


    public function __construct(Clients $client)
    {
        $this->client = $client;
    }


    public function handle(): void
    {
        $brandSlug = \Str::slug($this->client->brand_name);
        $parentPath = DB::table('configs')->where('key', 'parent_path')->value('value');

        $clientFolderPath = rtrim($parentPath, '/') . '/' . $brandSlug;

        if (!is_dir($clientFolderPath)) {
            Log::error("Client folder not found: {$clientFolderPath}");
            return;
        }

        Log::info("Starting site setup for client: {$this->client->brand_name} ({$brandSlug})");

        try {
            chdir($clientFolderPath);
            $this->runCommand(['git', 'init']);
            Log::info("Git initialized in {$clientFolderPath}");

            $repoUrl = 'https://github.com/HridoyBhuiyan/adpulse-dev.git';

            $this->runCommand(['git', 'remote', 'add', 'origin', $repoUrl]);
            $this->runCommand(['git', 'pull', 'origin', 'main', '--depth=1']);

            Log::info("Successfully pulled code from adpulse-dev into {$clientFolderPath}");


        } catch (\Exception $e) {
            Log::error("SetupClientSiteJob failed for {$brandSlug}: " . $e->getMessage());
            throw $e;
        }
    }


    private function runCommand(array $command): void
    {
        $process = new Process($command);
        $process->setTimeout(300);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        Log::info('Command Output: ' . $process->getOutput());
    }
}
