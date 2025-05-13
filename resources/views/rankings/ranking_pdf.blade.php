<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Clasificación final - {{ $rally->name }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            color: #333;
        }

        .logo {
            width: 150px;
            margin: 0 auto 20px auto;
            display: block;
        }

        h1 {
            text-align: center;
            color: black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }

        th {
            background-color: black;
            color: #fff;
        }

        .gold {
            background-color: #DAA520;
            color: white;
        }

        .silver {
            background-color: #C0C0C0;
            color: white;
        }

        .bronze {
            background-color: #CD7F32;
            color: white;
        }
    </style>
</head>

<body>
    <div style="text-align: center;">
        <img src="{{ public_path('images/logo_sin_fondo.png') }}" class="logo" alt="Logo">
    </div>

    <h1>Clasificación final - {{ $rally->name }}</h1>

    <table>
        <thead>
            <tr>
                <th>Posición</th>
                <th>Equipo</th>
                <th>Tiempo total</th>
                <th>Diferencia</th>
            </tr>
        </thead>
        <tbody>
            @php
            $leaderSeconds = $rankings['completed']->first()['total_seconds'];
            @endphp

            @foreach($rankings['completed'] as $index => $entry)
            @php
            $diffSeconds = $entry['total_seconds'] - $leaderSeconds;
            $diffFormatted = $diffSeconds > 0 ? gmdate('H:i:s', $diffSeconds) : '-';

            $medalClass = match($index) {
            0 => 'gold',
            1 => 'silver',
            2 => 'bronze',
            default => ''
            };
            @endphp
            <tr class="{{ $medalClass }}">
                <td>{{ $index + 1 }}</td>
                <td>{{ $entry['team']->racingTeam->name ?? 'Sin equipo' }}</td>
                <td>{{ $entry['formatted_time'] }}</td>
                <td>{{ $diffFormatted }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if($rankings['incomplete']->isNotEmpty())
    <h2 style="margin-top: 40px; text-align:center;">Equipos no clasificados</h2>

    <table>
        <thead>
            <tr>
                <th>Equipo</th>
                <th>Observación</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rankings['incomplete'] as $team)
            <tr>
                <td>{{ $team->racingTeam->name ?? 'Sin equipo' }}</td>
                <td>No completó todos los tramos</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

</body>

</html>