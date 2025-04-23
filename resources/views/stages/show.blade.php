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
</div>

@php
    $route = json_decode($stage->route, true);
@endphp

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"/>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const map = L.map('map').setView([{{ $stage->start_point_lat }}, {{ $stage->start_point_lng }}], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Marcadores
        const startMarker = L.marker([{{ $stage->start_point_lat }}, {{ $stage->start_point_lng }}], {
            icon: L.icon({ iconUrl: 'https://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png' })
        }).addTo(map).bindPopup('Inicio');

        const endMarker = L.marker([{{ $stage->end_point_lat }}, {{ $stage->end_point_lng }}], {
            icon: L.icon({ iconUrl: 'https://maps.gstatic.com/mapfiles/ms2/micons/red-dot.png' })
        }).addTo(map).bindPopup('Fin');

        const checkpoints = @json($route);
        checkpoints.forEach((p, i) => {
            L.marker([p.lat, p.lng], {
                icon: L.icon({ iconUrl: 'https://maps.gstatic.com/mapfiles/ms2/micons/yellow-dot.png' })
            }).addTo(map).bindPopup('Checkpoint ' + (i + 1));
        });

        // Línea del recorrido
        const fullRoute = [
            [{{ $stage->start_point_lat }}, {{ $stage->start_point_lng }}],
            ...checkpoints.map(p => [p.lat, p.lng]),
            [{{ $stage->end_point_lat }}, {{ $stage->end_point_lng }}],
        ];

        L.polyline(fullRoute, {
            color: 'blue',
            weight: 4,
            opacity: 0.8
        }).addTo(map);

        map.fitBounds(fullRoute);
    });
</script>
@endsection
