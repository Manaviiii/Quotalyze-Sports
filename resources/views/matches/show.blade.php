<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Partido</title>
</head>
<body>

    <h1>{{ $match->home_team }} vs {{ $match->away_team }}</h1>
    <p><strong>Fecha:</strong> {{ $match->match_date }}</p>
    <p><strong>Competición:</strong> {{ $match->league }}</p>

    <a href="/partidos">← Volver a la lista</a>

</body>
</html>
