@extends('layouts.app')

@section('title', 'Clasificación ' . $rally->name)

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Clasificación - {{ $rally->name }}</h1>

    <a href="{{ route('rankings.pdf', $rally) }}" class="btn btn-danger mb-3">Descargar PDF</a>

    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>Posición</th>
                <th>Equipo</th>
                <th>Tiempo Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rankings as $index => $ranking)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $ranking['team']->racingTeam->name}}</td>
                    <td>{{ $ranking['formatted_time'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
