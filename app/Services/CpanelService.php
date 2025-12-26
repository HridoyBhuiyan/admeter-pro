<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CpanelService
{
    private $baseUrl;
    private $username;
    private $token;

    public function __construct()
    {
        $this->baseUrl = 'https://' . env('CPANEL_HOST') . ':' . env('CPANEL_PORT') . '/execute/';
        $this->username = env('CPANEL_USERNAME');
        $this->token = env('CPANEL_API_TOKEN');
    }

    private function apiCall($module, $func, $params = [])
    {
        $url = $this->baseUrl . $module . '/' . $func;

        $response = Http::withHeaders([
            'Authorization' => 'cpanel ' . $this->username . ':' . $this->token,
        ])->asForm()->post($url, $params);

        if (!$response->successful()) {
            Log::error('cPanel API Error', ['response' => $response->body()]);
            throw new \Exception('cPanel API request failed');
        }

        $json = $response->json();
        if ($json['status'] !== 1) {
            throw new \Exception('cPanel Error: ' . json_encode($json['errors'] ?? 'Unknown'));
        }

        return $json['data'] ?? [];
    }

    public function createDirectory($path)
    {
        $this->apiCall('Fileman', 'mkdir', [
            'dir' => dirname($path),
            'name' => basename($path),
            'permissions' => '0755'
        ]);
    }

    public function uploadHtaccess($path)
    {
        $content = '<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^((?!public/).*)$ public/$1 [L,NC]
    RewriteCond %{THE_REQUEST} /public/([^\s?]*) [NC]
    RewriteRule ^ %1 [L,NE,R=301]
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>

<IfModule mod_headers.c>
    Header always set X-Content-Type-Options nosniff
    Header always set X-Frame-Options DENY
    Header always set X-XSS-Protection "1; mode=block"
</IfModule>

<IfModule mod_expires.c>
    ExpiresActive on
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
</IfModule>';

        $this->apiCall('Fileman', 'savefile', [
            'dir' => $path,
            'filename' => '.htaccess',
            'content' => base64_encode($content) // cPanel expects base64 for some versions
        ]);
    }

    public function deployGitRepo($path)
    {
        $gitUrl = str_replace(
            'https://',
            'https://' . env('GITHUB_USERNAME') . ':' . env('GITHUB_TOKEN') . '@',
            env('GIT_REPO')
        );

        $this->apiCall('VersionControl', 'create', [
            'repository_root' => $path,
            'name' => basename($path),
            'source_repository' => json_encode([
                'remote_name' => 'origin',
                'url' => $gitUrl
            ])
        ]);

        // Deployment (pull)
        $this->apiCall('VersionControl', 'deployment', [
            'repository_root' => $path,
            'name' => basename($path)
        ]);
    }
}
