<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\H2H;

class H2HController extends Controller
{
    /**
     * Devuelve el historial de enfrentamientos entre dos equipos (máx 3 para versión Free)
     */
    public function buscar(Request $request)
    {
        // Validar que los equipos se envían
        $request->validate([
            'equipo_a' => 'required|string',
            'equipo_b' => 'required|string'
        ]);

        $teamA = $request->equipo_a;
        $teamB = $request->equipo_b;

        // Buscar enfrentamientos donde A jugó contra B o B contra A
        $resultados = H2H::where(function ($q) use ($teamA, $teamB) {
                $q->where('team_a', $teamA)
                  ->where('team_b', $teamB);
            })
            ->orWhere(function ($q) use ($teamA, $teamB) {
                $q->where('team_a', $teamB)
                  ->where('team_b', $teamA);
            })
            ->orderBy('date', 'desc')
            ->limit(3)
            ->get();

        // Si no hay partidos registrados
        if ($resultados->isEmpty()) {
            return response()->json([
                'status' => 'ok',
                'message' => 'Es la primera vez que se enfrentan.',
                'data' => []
            ]);
        }

        return response()->json([
            'status' => 'ok',
            'data' => $resultados
        ]);
    }
}
