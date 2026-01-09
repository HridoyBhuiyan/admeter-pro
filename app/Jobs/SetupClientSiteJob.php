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

    public string $sitePath;
    public int $clientId;

    public function __construct(string $sitePath, int $clientId)
    {
        $this->sitePath = $sitePath;
        $this->clientId = $clientId;
    }

    public function handle(): void
    {
        info($this->sitePath);;

    }
}
