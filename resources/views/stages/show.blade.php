@extends('layouts.app')

@section('title', $stage->name)

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">{{ $stage->name }}</h1>

    <div class="mb-4 text-center">
        <p><strong>Longitud:</strong> {{ $stage->length_km }} km</p>
        <p><strong>Superficie:</strong> {{ $stage->surface }}</p>
    </div>

    <div id="map" style="height: 500px;" class="rounded shadow-sm mb-4"></div>

    @if(\Carbon\Carbon::parse($stage->rally->end_date)->isPast())
    <div class="text-end mb-3">
        <a href="{{ route('stage.results.pdf', $stage->id) }}" class="btn btn-danger">
            <i class="fas fa-file-pdf"></i> Descargar resultados en PDF
        </a>
    </div>

    @if($stage->results->count() > 0)
    @php
    $results = $stage->results->sortBy('time')->values();
    $leaderTime = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $results->first()->time);
    @endphp
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Posición</th>
                    <th>Equipo</th>
                    <th>Tiempo</th>
                    <th>Diferencia</th>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $index => $result)
                @php
                $currentTime = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $result->time);
                $diff = $leaderTime->diff($currentTime)->format('%H:%I:%S');
                @endphp
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $result->team->racingTeam->name ?? 'Sin equipo' }}</td>
                    <td>{{ $currentTime->format('H:i:s') }}</td>
                    <td>{{ $index === 0 ? '-' : $diff }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <p class="text-muted text-center">No hay resultados disponibles para este tramo.</p>
    @endif

    @else
    <div class="mt-4 text-center">
        <p>El tramo aún no ha finalizado. Los resultados estarán disponibles cuando se complete.</p>
    </div>
    @endif
</div>

@php
$checkpoints = json_decode($stage->route, true) ?? [];
$start = $checkpoints[0];
$end = $checkpoints[count($checkpoints) - 1];
@endphp

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const map = L.map('map').setView([{{ $start['lat'] }}, {{ $start['lng'] }}], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        const startLatLng = [{{ $start['lat'] }}, {{ $start['lng'] }}];
        const endLatLng = [{{ $end['lat'] }}, {{ $end['lng'] }}];

        L.marker(startLatLng, {
            icon: L.icon({ iconUrl: 'https://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png' })
        }).addTo(map).bindPopup('Inicio');

        L.marker(endLatLng, {
            icon: L.icon({ iconUrl: 'https://maps.gstatic.com/mapfiles/ms2/micons/red-dot.png' })
        }).addTo(map).bindPopup('Fin');

        const route = [startLatLng];
        const checkpoints = @json($checkpoints);
        checkpoints.slice(1, -1).forEach((p, i) => {
            const latlng = [p.lat, p.lng];
            L.marker(latlng, {
                icon: L.icon({ iconUrl: 'https://maps.gstatic.com/mapfiles/ms2/micons/yellow-dot.png' })
            }).addTo(map).bindPopup('Checkpoint ' + (i + 1));
            route.push(latlng);
        });

        route.push(endLatLng);

        L.polyline(route, {
            color: 'blue',
            weight: 4,
            opacity: 0.8
        }).addTo(map);

        map.fitBounds(route);
    });
</script>

@endsection