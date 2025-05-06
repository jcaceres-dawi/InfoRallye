@extends('layouts.app')

@section('title', $stage->name)

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">{{ $stage->name }}</h1>

    <div class="mb-4 text-center">
        <p><strong>Longitud:</strong> {{ $stage->length_km }} km</p>
        <p><strong>Superficie:</strong> {{ $stage->surface }}</p>
    </div>

    <div id="map" style="height: 500px;" class="rounded shadow-sm"></div>

    @if(\Carbon\Carbon::parse($stage->rally->end_date)->isPast())
        <div class="mt-4 text-center">
            <a href="{{ route('stage.results.pdf', $stage->id) }}" class="btn btn-primary">
                Ver resultados en PDF
            </a>
        </div>
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

        // Marcadores
        L.marker(startLatLng, {
            icon: L.icon({ iconUrl: 'https://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png' })
        }).addTo(map).bindPopup('Inicio');

        L.marker(endLatLng, {
            icon: L.icon({ iconUrl: 'https://maps.gstatic.com/mapfiles/ms2/micons/red-dot.png' })
        }).addTo(map).bindPopup('Fin');

        const route = [startLatLng];
        const checkpoints = @json($checkpoints);

        // Excluimos inicio y fin como checkpoints (porque ya están marcados)
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
