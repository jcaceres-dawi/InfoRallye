<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultados {{ $stage->name }}</title>
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

        /* Colores de medalla */
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

    <h1>Resultados - {{ $stage->name }}</h1>

    <table>
        <thead>
            <tr>
                <th>Posición</th>
                <th>Equipo</th>
                <th>Tiempo</th>
                <th>Diferencia</th>
            </tr>
        </thead>
        <tbody>
            @php
            $leaderTime = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $results->first()->time);
            @endphp

            @foreach($results as $index => $result)
            @php
            $current = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $result->time);
            $diff = $leaderTime->diff($current)->format('%H:%I:%S');

            // Definir los colores de medalla
            $medalClass = match($index) {
            0 => 'gold', // Oro
            1 => 'silver', // Plata
            2 => 'bronze', // Bronce
            default => ''
            };
            @endphp
            <tr class="{{ $medalClass }}">
                <td>{{ $index + 1 }}</td>
                <td>{{ $result->team->racingTeam->name ?? 'Sin equipo' }}</td>
                <td>{{ $current->format('H:i:s') }}</td>
                <td>{{ $index === 0 ? '-' : $diff }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>