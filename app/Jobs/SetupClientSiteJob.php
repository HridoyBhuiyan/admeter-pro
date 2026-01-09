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
        info($this->client->base_url);;

    }
}
