<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class FootballApiService
{
    protected string $baseUrl;
    protected array $headers;

    public function __construct()
    {
        $this->baseUrl = env('API_SPORTS_BASE');

        $this->headers = [
            'x-apisports-key' => env('API_SPORTS_KEY'),
        ];
    }

    public function get(string $endpoint, array $params = [])
    {
        return Http::withHeaders($this->headers)
            ->get($this->baseUrl . $endpoint, $params)
            ->json();
    }
}
