<?php

namespace App\Http\Controllers;

use App\Models\Fixture;
use App\Services\FootballApiService;

class MatchController extends Controller
{
    protected $api;

    public function __construct(FootballApiService $api)
    {
        $this->api = $api;
    }

    /**
     * Mostrar todos los partidos
     */
    public function index()
    {
        $matches = Fixture::orderBy('match_date', 'asc')->get();
        return view('matches.index', compact('matches'));
    }

    /**
     * Mostrar un partido concreto
     */
    public function show($id)
    {
        $match = Fixture::findOrFail($id);

        // Todavía vacío (no gasta API)
        $stats = $this->api->getMatchStats($match->id);
        $h2h   = $this->api->getH2H($match->home_team, $match->away_team);
        $odds  = $this->api->getOdds($match->id);

        return view('matches.show', compact('match', 'stats', 'h2h', 'odds'));
    }
}
