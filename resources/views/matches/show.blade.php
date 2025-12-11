@extends('layouts.app')

@section('title', $match->home_team . ' vs ' . $match->away_team)

@section('content')

<div class="max-w-3xl mx-auto">

    {{-- TÍTULO DEL PARTIDO --}}
    <h1 class="text-3xl font-bold text-gray-900 mb-4">
        {{ $match->home_team }} vs {{ $match->away_team }}
    </h1>

    {{-- FECHA Y ESTADO --}}
    <p class="text-gray-700">
        <span class="font-semibold">Fecha:</span> {{ $match->match_date }}
    </p>

    <p class="text-gray-700 mb-6">
        <span class="font-semibold">Estado:</span> {{ $match->status ?? 'Desconocido' }}
    </p>


    {{-- ESTADÍSTICAS DEL PARTIDO --}}
    <div class="p-5 mb-8 bg-white border border-gray-200 rounded shadow">
        <h2 class="text-xl font-semibold mb-3 flex items-center gap-2">
            📊 Estadísticas del Partido
        </h2>

        <p class="text-gray-600 mb-2">(Aquí irán las estadísticas cuando conectemos la API)</p>

        <ul class="list-disc ml-6 text-gray-700">
            <li>Posesión</li>
            <li>Tiros</li>
            <li>Faltas</li>
            <li>Corners</li>
        </ul>
    </div>


    {{-- HISTORIAL H2H --}}
    <div class="p-5 mb-8 bg-white border border-gray-200 rounded shadow">
        <h2 class="text-xl font-semibold mb-3 flex items-center gap-2">
            🤝 Historial H2H
        </h2>

        <p class="text-gray-600 mb-2">(Aquí se mostrará el historial entre ambos equipos)</p>

        <ul class="list-disc ml-6 text-gray-700">
            <li>Último enfrentamiento: --</li>
            <li>Victorias local: --</li>
            <li>Victorias visitante: --</li>
        </ul>
    </div>


    {{-- CUOTAS --}}
    <div class="p-5 mb-8 bg-white border border-gray-200 rounded shadow">
        <h2 class="text-xl font-semibold mb-3 flex items-center gap-2">
            💰 Cuotas
        </h2>

        <p class="text-gray-600 mb-2">(Aquí irán las odds en tiempo real)</p>

        <ul class="list-disc ml-6 text-gray-700">
            <li>Local: --</li>
            <li>Empate: --</li>
            <li>Visitante: --</li>
        </ul>
    </div>


    {{-- BOTÓN VOLVER --}}
    <a href="/partidos" 
       class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
        ← Volver a la lista
    </a>

</div>

@endsection
