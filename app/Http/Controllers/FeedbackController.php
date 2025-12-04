<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Guarda una sugerencia enviada por un usuario.
     */
    public function store(Request $request)
    {
        // Validación simple
        $validated = $request->validate([
            'usuario' => 'nullable|string|max:255',
            'mensaje' => 'required|string',
            'categoria' => 'nullable|string|max:255',
        ]);

        // Crear feedback
        $feedback = Feedback::create([
            'user_id'  => auth()->id(),
            'usuario'  => $validated['usuario'] ?? 'Invitado',
            'mensaje'  => $validated['mensaje'],
            'categoria'=> $validated['categoria'] ?? 'general',
        ]);

        return response()->json([
            'status' => 'ok',
            'message' => 'Gracias por tu sugerencia',
            'data' => $feedback
        ]);
    }



    /**
     * Lista todos los feedbacks (solo para administración).
     */
    public function index()
    {
        $feedbacks = Feedback::orderBy('created_at', 'desc')->get();

        return response()->json($feedbacks);
    }

    /**
     * Marca un feedback como revisado.
     */
    public function marcarRevisado($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->revisado = true;
        $feedback->save();

        return response()->json([
            'status' => 'ok',
            'message' => 'Feedback marcado como revisado.',
        ]);
    }
}
