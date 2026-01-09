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
        info("inside the job");
    }

    public function handle(): void
    {
        info("inside the job handle");
        $client = Clients::find($this->client);

        if (! $client) {
            info("Client পাওয়া যায়নি। ID: {$this->client}");
            return;
        }

        $brandName = $client->brand_name;
        $email     = $client->email;
        $slug      = Str::slug($brandName);

        info("Job চলছে: {$brandName} ({$email})");
    }
}
