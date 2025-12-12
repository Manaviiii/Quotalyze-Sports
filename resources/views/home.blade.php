@extends('layouts.app')

@section('title', 'Quotalyze Sports')

@vite(['resources/css/home.css'])

@section('content')

{{-- LOGO FIJO EN ESQUINA IZQUIERDA DEL BODY --}}
<div class="floating-logo">
    <img src="{{ asset('img/quotalyze_logo.png') }}" alt="Quotalyze Logo">
</div>

<header class="home-header">
    <nav class="home-nav">
        <h1 class="nav-title">Quotalyze Sports</h1>

        <ul class="nav-links">
            <li><a href="/">Inicio</a></li>
            <li><a href="/partidos">Partidos</a></li>
            <li><a href="/probar-feedback">Feedback</a></li>
            <li><a href="/probar-reportes">Reportes</a></li>
        </ul>
    </nav>

    <hr class="header-line">
</header>

<main class="home-main">

    <section class="hero-section">

        {{-- SOLO EL TEXTO, YA NO EL LOGO --}}
        <div class="hero-text">
            <p class="hero-subtitle">
                La plataforma donde estadísticas, cuotas y análisis se unen para crear una nueva forma de entender el deporte.
            </p>
        </div>

    </section>

    <section class="features">
        <article class="feature-card">
            <h3>📊 Estadísticas detalladas</h3>
            <p>Últimos partidos, H2H, rendimiento y más.</p>
        </article>

        <article class="feature-card">
            <h3>💸 Comparación de cuotas</h3>
            <p>Consulta y compara cuotas de casas populares.</p>
        </article>

        <article class="feature-card">
            <h3>🔔 Alertas inteligentes</h3>
            <p>Recibe avisos cuando las cuotas cambian.</p>
        </article>

        <article class="feature-card">
            <h3>📝 Feedback y reportes</h3>
            <p>Ayúdanos a mejorar con tus sugerencias.</p>
        </article>
    </section>

    <section class="home-cta">
        <a class="cta-button" href="/partidos">Ver Partidos</a>
    </section>

</main>

<footer class="home-footer">
    <p>Quotalyze Sports © {{ date('Y') }}</p>
    <small>"Analiza el juego. Quotalyze las probabilidades."</small>
</footer>

@endsection
