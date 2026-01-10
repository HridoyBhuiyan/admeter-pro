<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\SerializesModels;

class SetupClientSiteJob implements ShouldQueue
{


    use Dispatchable, Queueable, SerializesModels;

    public string $sitePath;
    public int $clientId;

    public function __construct($sitePath, $clientId)
    {
        info("this is from constructor");
        $this->sitePath = $sitePath;
        $this->clientId = $clientId;
    }

    public function handle(): void
    {
        info($this->sitePath);;
        info("hello");;

    }

}
