<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Quotalyze Sports')</title>

    @vite(['resources/css/app.css'])
</head>

<body>

    {{-- LOGO FIJO ARRIBA IZQUIERDA --}}
    <div class="floating-logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('img/quotalyze_logo.png') }}" alt="Quotalyze Logo">
        </a>
    </div>

    {{-- CONTENIDO CENTRADO --}}
    <main class="page-content">
        @yield('content')
    </main>

</body>
</html>
