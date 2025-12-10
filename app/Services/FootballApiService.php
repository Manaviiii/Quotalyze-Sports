<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class FootballApiService
{
    protected string $baseUrl;
    protected string $apiKey;

    public function __construct()
    {
        $this->baseUrl = 'https://v3.football.api-sports.io';
        $this->apiKey = env('FOOTBALL_API_KEY');
    }

    /**
     * Obtener estadísticas de un partido
     */
    public function getMatchStats($fixtureId)
{
    return [
        'possession' => ['local' => 58, 'visitante' => 42],
        'shots' => ['local' => 14, 'visitante' => 9],
        'fouls' => ['local' => 11, 'visitante' => 15],
        'corners' => ['local' => 6, 'visitante' => 3],
    ];
}

public function getH2H($teamA, $teamB)
{
    return [
        'ultimo_enfrentamiento' => '2-1',
        'victorias_local' => 3,
        'victorias_visitante' => 2,
    ];
}

public function getOdds($fixtureId)
{
    return [
        'local' => 1.85,
        'empate' => 3.40,
        'visitante' => 4.10,
    ];
}

}
