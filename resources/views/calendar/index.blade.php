@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Calendario de Rallyes</h1>

    <form method="GET" action="{{ route('calendar.index') }}" class="mb-4">
        <div class="row">
            <div class="col-md-4">
                <select name="category_id" class="form-select">
                    <option value="">Todas las categorías</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </div>
    </form>

    <div class="d-flex mb-4">
        <button class="btn btn-success me-2" id="btn-upcoming">Próximos Rallyes</button>
        <button class="btn btn-danger" id="btn-past">Rallyes Finalizados</button>
    </div>

    <div id="upcoming-section">
        <h2 class="mb-3 text-success">Próximos Rallyes</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th>Fecha</th>
                    <th>Categoría</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($upcomingRallies as $rally)
                <tr onclick="location.href='{{ route('rallys.index', $rally->id) }}'" style="cursor: pointer;">
                    <td>{{ $rally->name }}</td>
                    <td>{{ $rally->location }}</td>
                    <td>{{ \Carbon\Carbon::parse($rally->start_date)->format('d/m/Y') }}</td>
                    <td>{{ $rally->category->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div id="past-section" style="display: none;">
        <h2 class="mb-3 text-danger">Rallyes Finalizados</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th>Fecha</th>
                    <th>Categoría</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pastRallies as $rally)
                <tr onclick="location.href='{{ route('rallys.index', $rally->id) }}'" style="cursor: pointer;">
                    <td>{{ $rally->name }}</td>
                    <td>{{ $rally->location }}</td>
                    <td>{{ \Carbon\Carbon::parse($rally->start_date)->format('d/m/Y') }}</td>
                    <td>{{ $rally->category->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    document.getElementById('btn-upcoming').addEventListener('click', function() {
        document.getElementById('upcoming-section').style.display = 'block';
        document.getElementById('past-section').style.display = 'none';
    });

    document.getElementById('btn-past').addEventListener('click', function() {
        document.getElementById('upcoming-section').style.display = 'none';
        document.getElementById('past-section').style.display = 'block';
    });
</script>

@endsection