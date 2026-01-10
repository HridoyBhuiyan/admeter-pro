<?php

namespace App\Services;

class ClientSiteService
{
    public function setupSite(string $path, int $clientId): void
    {
        info("Setting up site at {$path} for client {$clientId}");
    }
    public function __construct()
    {
        //
    }
}
