<!DOCTYPE html>
<html>
<head>
    <title>Lista de Partidos</title>
    <meta charset="UTF-8">
</head>
<body>

<h1>Lista de Partidos</h1>

@if($matches->count() == 0)
    <p>No hay partidos aún.</p>
@else
    @foreach ($matches as $match)
        <div style="margin-bottom: 10px;">
            <a href="/partidos/{{ $match->id }}">
                {{ $match->home_team }} vs {{ $match->away_team }}
            </a>
            <br>
            Fecha: {{ $match->match_date }}
            <hr>
        </div>
    @endforeach
@endif

</body>
</html>
