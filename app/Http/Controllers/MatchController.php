<?php

namespace App\Http\Controllers;

use App\Models\Fixture;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    /**
     * Mostrar todos los partidos
     */
    public function index()
    {
        // Obtenemos todos los partidos ordenados por fecha
        $matches = Fixture::orderBy('match_date', 'asc')->get();

        // Se los pasamos a la vista
        return view('matches.index', compact('matches'));
    }

    /**
     * Mostrar un partido concreto
     */
    public function show($id)
    {
        // Buscar partido por id o lanzar 404 si no existe
        $match = Fixture::findOrFail($id);

        // Pasar el partido a la vista
        return view('matches.show', compact('match'));
    }
}
