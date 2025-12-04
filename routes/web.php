<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\FeedbackController;

// Guardar feedback
Route::post('/feedback', [FeedbackController::class, 'store']);

// Ver lista de feedback (solo admin)
Route::get('/admin/feedback', [FeedbackController::class, 'index']);

// Marcar feedback como revisado
Route::post('/admin/feedback/{id}/revisado', [FeedbackController::class, 'marcarRevisado']);

Route::get('/probar-feedback', function () {
    return view('test_feedback');
});
