@extends('layouts.app')

@section('title', 'Lista de Partidos')

@section('content')

<h1 class="text-4xl font-extrabold text-primary mb-8">
    Lista de Partidos
</h1>

@if($matches->count() == 0)
    <p>No hay partidos aún.</p>
@else
    @foreach ($matches as $match)
        <a href="/partidos/{{ $match->id }}">
            <div class="card mb-4 cursor-pointer hover:scale-[1.02] transition">
                <h2 class="text-xl font-semibold mb-1 text-primary-light">
                    {{ $match->home_team }} vs {{ $match->away_team }}
                </h2>

                <p class="text-sm opacity-80">
                    <strong>Fecha:</strong> {{ $match->match_date }}
                </p>
            </div>
        </a>
    @endforeach
@endif

@endsection
