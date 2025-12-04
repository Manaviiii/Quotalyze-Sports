<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Guarda un reporte enviado por el usuario.
     */
   public function store(Request $request)
    {
        $validated = $request->validate([
            'usuario' => 'required|string|max:255',
            'tipo' => 'required|string',
            'mensaje' => 'required|string',
            'match_id' => 'nullable|integer|exists:matches,id',
        ]);

        $reporte = \App\Models\Report::create([
            'user_id' => null,
            'usuario' => $validated['usuario'],
            'tipo' => $validated['tipo'],
            'mensaje' => $validated['mensaje'],
            'match_id' => $validated['match_id'] ?? null,
            'esta_arreglada' => false,
        ]);

        return response()->json([
            'status' => 'ok',
            'message' => 'Reporte enviado correctamente',
            'data' => $reporte
        ]);
    }



    public function index()
    {
        $reportes = Report::orderBy('created_at', 'desc')->get();

        return response()->json($reportes);
    }

    public function marcarArreglado($id)
    {
        $reporte = Report::findOrFail($id);

        $reporte->esta_arreglada = true;
        $reporte->save();

        return response()->json([
            'status' => 'ok',
            'message' => 'Reporte marcado como solucionado.',
        ]);
    }
}
