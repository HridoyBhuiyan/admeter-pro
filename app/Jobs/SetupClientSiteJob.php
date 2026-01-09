<?php

namespace App\Jobs;

use App\Models\Clients;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class SetupClientSiteJob implements ShouldQueue
{

    public $client;
    public function __construct($client)
    {
        $this->client = $client;
    }


    public function handle(): void
    {
        $brandName = $this->client->brand_name;
        $email     = $this->client->email;
        $slug      = \Str::slug($brandName);

        \Log::info("Job running for client: {$brandName} ({$email})");


    }
}
