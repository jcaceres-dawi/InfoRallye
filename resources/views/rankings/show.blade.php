@extends('layouts.app')

@section('title', 'Clasificación ' . $rally->name)

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Clasificación - {{ $rally->name }}</h1>

    <a href="{{ route('rankings.pdf', $rally) }}" class="btn btn-danger mb-3">
        <i class="fas fa-file-pdf"></i> Descargar PDF
    </a>

    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Posición</th>
                    <th>Equipo</th>
                    <th>Tiempo Total</th>
                    <th>Diferencia</th>
                </tr>
            </thead>
            <tbody>
                @php
                $leaderSeconds = $rankings['completed']->first()['total_seconds'];
                @endphp

                @foreach($rankings['completed'] as $index => $ranking)
                @php
                $diffSeconds = $ranking['total_seconds'] - $leaderSeconds;
                $diffFormatted = $diffSeconds > 0 ? gmdate('H:i:s', $diffSeconds) : '-';
                @endphp
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $ranking['team']->racingTeam->name }}</td>
                    <td>{{ $ranking['formatted_time'] }}</td>
                    <td>{{ $diffFormatted }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if($rankings['incomplete']->isNotEmpty())
    <h3 class="mt-5 text-center">Equipos no clasificados</h3>
    <table class="table table-bordered text-center">
        <thead class="table-dark">
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

</div>
@endsection