<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
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


use App\Http\Controllers\ReportController;

// Enviar reporte
Route::post('/reportar', [ReportController::class, 'store']);

// Ver lista de reportes (admin)
Route::get('/admin/reportes', [ReportController::class, 'index']);

// Marcar reporte como arreglado
Route::post('/admin/reportes/{id}/arreglado', [ReportController::class, 'marcarArreglado']);

Route::get('/probar-reportes', function () {
    return view('test_report');
});

use App\Http\Controllers\H2HController;

Route::get('/h2h', [H2HController::class, 'buscar']);

use App\Http\Controllers\MatchController;

Route::get('/partidos', [MatchController::class, 'index']);

Route::get('/partidos/{id}', [MatchController::class, 'show']);

Route::get('/feedback', function () {
    return view('feedback.form');
});
