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

    public $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    public function handle(): void
    {
        $client = Clients::find($this->client);

        if (! $client) {
            Log::error("Client পাওয়া যায়নি। ID: {$this->client}");
            return;
        }

        $brandName = $client->brand_name;
        $email     = $client->email;
        $slug      = Str::slug($brandName);

        Log::info("Job চলছে: {$brandName} ({$email})");
    }
}
