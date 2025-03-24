@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Pilotos y Copilotos</h1>

    <form method="GET" action="{{ route('competitors.index') }}" class="mb-4">
        <div class="row">
            <div class="col-md-4">
                <select name="category_id" class="form-control">
                    <option value="">Todas las categorías</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <select name="role" class="form-control">
                    <option value="">Todos</option>
                    <option value="driver" {{ request('role') == 'driver' ? 'selected' : '' }}>Pilotos</option>
                    <option value="co_driver" {{ request('role') == 'co_driver' ? 'selected' : '' }}>Copilotos</option>
                </select>
            </div>

            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </div>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Equipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($competitors as $competitor)
            <tr>
                <td>{{ $competitor->first_name }} {{ $competitor->last_name }}</td>
                <td>{{ $competitor->racingTeam->name ?? 'Sin equipo' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection