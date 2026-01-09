<?php

namespace App\Jobs;

use App\Models\Clients;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class SetupClientSiteJob implements ShouldQueue
{
    use Dispatchable, Queueable, SerializesModels;

    public int $clientId;

    public function __construct($clientId)
    {
        $this->clientId = $clientId;
    }

    public function handle(): void
    {
        $client = Clients::find($this->clientId);

        if (! $client) {
            Log::error("Client পাওয়া যায়নি। ID: {$this->clientId}");
            return;
        }

        $brandName = $client->brand_name;
        $email     = $client->email;
        $slug      = Str::slug($brandName);

        Log::info("Job চলছে: {$brandName} ({$email})");
    }
}
