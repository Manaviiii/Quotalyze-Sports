<!DOCTYPE html>
<html>
<head>
    <title>{{ $match->home_team }} vs {{ $match->away_team }}</title>
</head>
<body>

    <h1>{{ $match->home_team }} vs {{ $match->away_team }}</h1>
    <p><strong>Fecha:</strong> {{ $match->match_date }}</p>
    <p><strong>Estado:</strong> {{ $match->status }}</p>

    <hr>

   <h2>📊 Estadísticas del Partido</h2>

    @if($stats)
        <ul>
            <li>Posesión: {{ $stats['possession']['local'] }}% - {{ $stats['possession']['visitante'] }}%</li>
            <li>Tiros: {{ $stats['shots']['local'] }} - {{ $stats['shots']['visitante'] }}</li>
            <li>Faltas: {{ $stats['fouls']['local'] }} - {{ $stats['fouls']['visitante'] }}</li>
            <li>Corners: {{ $stats['corners']['local'] }} - {{ $stats['corners']['visitante'] }}</li>
        </ul>
    @else
        <p>(Aquí irán las estadísticas cuando conectemos la API)</p>
    @endif


    <hr>

    <h2>🤝 Historial H2H</h2>

    @if($h2h)
        <ul>
            <li>Último enfrentamiento: {{ $h2h['ultimo_enfrentamiento'] }}</li>
            <li>Victorias local: {{ $h2h['victorias_local'] }}</li>
            <li>Victorias visitante: {{ $h2h['victorias_visitante'] }}</li>
        </ul>
    @else
        <p>(Aquí se mostrará el historial entre ambos equipos)</p>
    @endif


    <hr>

   <h2>💰 Cuotas</h2>

    @if($odds)
        <ul>
            <li>Local: {{ $odds['local'] }}</li>
            <li>Empate: {{ $odds['empate'] }}</li>
            <li>Visitante: {{ $odds['visitante'] }}</li>
        </ul>
    @else
        <p>(Aquí irán las odds en tiempo real)</p>
    @endif


    <hr>

    <a href="/partidos">⬅ Volver a la lista de partidos</a>

</body>
</html>
