<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Cargar Tailwind y JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>@yield('title', 'Quotalyze')</title>
</head>

<body class="bg-gray-100 text-gray-900">

    <main class="max-w-4xl mx-auto py-6">
        @yield('content')
    </main>

</body>
</html>
