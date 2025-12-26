<?php

namespace App\Jobs;

use App\Models\Clients;
use App\Services\CpanelService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SetupClientSiteJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $clientId;

    public function __construct($clientId)
    {
        $this->clientId = $clientId;
    }

    public function handle(CpanelService $cpanel)
    {
        $client = Clients::findOrFail($this->clientId);
        $client->status = 'processing';
        $client->save();

        try {
            $folder = env('BRANDS_PATH') . '/' . $client->brand_slug;

            $cpanel->createDirectory($folder);
            $cpanel->deployGitRepo($folder);
            $cpanel->uploadHtaccess($folder);

            $client->status = 'completed';
            $client->site_url = 'https://' . $client->brand_slug . '.admeterpro.com'; // আপনার ডোমেইন অনুযায়ী চেঞ্জ করুন
            $client->save();

            Log::info("Site deployed successfully: {$client->site_url}");
        } catch (\Exception $e) {
            $client->status = 'failed';
            $client->save();
            Log::error("Deployment failed for client {$client->id}: " . $e->getMessage());
        }
    }
}
