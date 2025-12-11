@extends('layouts.app')

@section('title', 'Quotalyze Sports')

{{-- CSS exclusivo del home --}}
@vite(['resources/css/home.css'])

@section('content')

<div class="home-container">

    <h1 class="home-title">⚽ Quotalyze Sports</h1>

    <p class="home-subtitle">
        La plataforma que reúne estadísticas, cuotas y análisis de partidos en un solo lugar.
    </p>

    <div class="feature-grid">

        <div class="feature-card">
            <h3 class="feature-title">📊 Estadísticas</h3>
            <p class="feature-text">Consulta rendimiento, últimos partidos y comparación entre equipos.</p>
        </div>

        <div class="feature-card">
            <h3 class="feature-title">💸 Cuotas en un mismo sitio</h3>
            <p class="feature-text">Compara las cuotas principales de casas de apuestas con un clic.</p>
        </div>

        <div class="feature-card">
            <h3 class="feature-title">🔔 Alertas</h3>
            <p class="feature-text">En el futuro podrás recibir avisos cuando una cuota suba o baje.</p>
        </div>

        <div class="feature-card">
            <h3 class="feature-title">📝 Feedback y Reportes</h3>
            <p class="feature-text">Ayuda a mejorar la plataforma con tus sugerencias y reportes.</p>
        </div>

    </div>

    <div class="home-cta">
        <a href="/partidos" class="home-btn">Ver Partidos</a>
    </div>

</div>

@endsection
