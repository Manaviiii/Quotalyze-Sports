@extends('layouts.app')

@section('title', 'Lista de Partidos')

@section('content')
<h1 class="text-5xl font-extrabold text-red-600 mb-5">PRUEBA TAILWIND 🔥</h1>


<div class="max-w-3xl mx-auto">

    <h1 class="text-3xl font-bold mb-6 text-gray-800">Lista de Partidos</h1>

    @if($matches->count() == 0)

        <p class="text-gray-600 text-lg">No hay partidos aún.</p>

    @else

        <div class="space-y-4">
            @foreach ($matches as $match)
                <div class="p-4 bg-white shadow rounded border border-gray-200 hover:shadow-md transition">

                    <a href="/partidos/{{ $match->id }}" 
                       class="text-blue-600 text-xl font-semibold hover:underline">
                        {{ $match->home_team }} vs {{ $match->away_team }}
                    </a>

                    <p class="text-gray-700 mt-1">
                        <span class="font-medium">Fecha:</span> {{ $match->match_date }}
                    </p>

                </div>
            @endforeach
        </div>

    @endif

</div>

@endsection
