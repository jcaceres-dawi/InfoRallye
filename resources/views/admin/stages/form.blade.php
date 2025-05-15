@csrf

<div class="mb-3">
    <label>Rallye</label>
    <select name="rally_id" class="form-control" required>
        <option value="">Selecciona un rallye</option>
        @foreach($rallyes as $rally)
        <option value="{{ $rally->id }}"
            {{ old('rally_id', $stage->rally_id ?? '') == $rally->id ? 'selected' : '' }}>
            {{ $rally->name }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="name" value="{{ old('name', $stage->name ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Superficie</label>
    <select name="surface" class="form-control" required>
        @foreach(['Asfalto', 'Grava', 'Mixto'] as $surface)
        <option value="{{ $surface }}"
            {{ old('surface', $stage->surface ?? '') == $surface ? 'selected' : '' }}>
            {{ $surface }}
        </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Longitud (km)</label>
    <input type="number" step="0.01" name="length_km" value="{{ old('length_km', $stage->length_km ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Ruta completa (clic en el mapa: inicio → intermedios → fin)</label>
    <div id="map" style="height: 400px;"></div>
    <input type="hidden" name="full_route" id="route-input" value='{{ old('full_route', json_encode($stage->full_route ?? [])) }}'>
    <small class="text-muted">Haz clic en el mapa para definir los puntos. El primero es el inicio, el último es el fin. Puedes reiniciar recargando la página.</small>
</div>

<button type="submit" class="btn btn-dark">Guardar</button>

@php
$routeData = old('full_route') ? json_decode(old('full_route'), true) : json_decode($stage->route ?? '[]', true);
$startLat = $routeData[0]['lat'] ?? 37.78;
$startLng = $routeData[0]['lng'] ?? -1.76;
@endphp

@push('scripts')
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"/>

<script>
    const initialRoute = @json($routeData);
    const map = L.map('map').setView([{{ $startLat }}, {{ $startLng }}], 13);
    let routePoints = [];
    const polyline = L.polyline([], { color: 'blue' }).addTo(map);
    const markers = [];

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    function addMarker(lat, lng, type, index = null) {
        let iconUrl;
        let popupText;

        switch (type) {
            case 'start':
                iconUrl = 'https://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png';
                popupText = 'Inicio';
                break;
            case 'end':
                iconUrl = 'https://maps.gstatic.com/mapfiles/ms2/micons/red-dot.png';
                popupText = 'Fin';
                break;
            default:
                iconUrl = 'https://maps.gstatic.com/mapfiles/ms2/micons/yellow-dot.png';
                popupText = `Checkpoint ${index}`;
        }

        const icon = L.icon({
            iconUrl,
            iconSize: [32, 32],
            iconAnchor: [16, 32],
            popupAnchor: [0, -32]
        });

        const marker = L.marker([lat, lng], { icon }).addTo(map).bindPopup(popupText);

        markers.push(marker);
    }

    function renderRoute() {
        polyline.setLatLngs([]);
        markers.forEach(m => map.removeLayer(m));
        markers.length = 0;

        routePoints.forEach((point, index) => {
            const type = index === 0
                ? 'start'
                : index === routePoints.length - 1
                    ? 'end'
                    : 'checkpoint';

            addMarker(point.lat, point.lng, type, index - 1);
            polyline.addLatLng([point.lat, point.lng]);
        });

        if (routePoints.length > 0) {
            map.fitBounds(polyline.getBounds());
        }

        document.getElementById('route-input').value = JSON.stringify(routePoints);
    }

    if (Array.isArray(initialRoute) && initialRoute.length) {
        routePoints = initialRoute;
        renderRoute();
    }

    map.on('click', function (e) {
        const { lat, lng } = e.latlng;
        routePoints.push({ lat, lng });
        renderRoute();
    });
</script>

@endpush

@section('styles')
<style>
    .btn-dark {
        background-color: #1C1C1C;
        border-color: #1C1C1C;
    }

    .btn-dark:hover {
        background-color: #E10600; 
        border-color: #E10600;
    }

    h2 {
        color: #E10600;
    }
</style>
@endsection