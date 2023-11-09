<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class PurgeCloudflareCache extends Command
{
    protected $signature = 'cloudflare:purge';
    protected $description = 'Purge Cloudflare cache tags';

    public function handle()
    {
        $zoneId = config('cloudflare.zone_id');
        $apiToken = config('cloudflare.api_token');

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $apiToken,
        ])->post("https://api.cloudflare.com/client/v4/zones/{$zoneId}/purge_cache", [
            'purge_everything' => true,
        ]);

        $responseData = $response->json();

        if ($response->successful() && $responseData['success']) {
            $this->info('Cloudflare cache purged successfully.');
        } else {
            $this->error('Failed to purge Cloudflare cache.');
            // Optionally, you can log the error message from Cloudflare
            $this->error('Error: ' . $response->body());
        }
    }
}