@extends('layouts.app')

@section('title', 'Pilotos y Copilotos')

@section('content')
<div class="container">
    <h1 class="mb-4">Pilotos y Copilotos</h1>

    <form method="GET" action="{{ route('competitors.index') }}" class="mb-4">
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="category_id" class="form-label">Categoría</label>
                <select name="category_id" id="category_id" class="form-select">
                    <option value="">Todas las categorías</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label for="role" class="form-label">Tipo</label>
                <select name="role" id="role" class="form-select">
                    <option value="">Todos</option>
                    <option value="driver" {{ request('role') == 'driver' ? 'selected' : '' }}>Pilotos</option>
                    <option value="co_driver" {{ request('role') == 'co_driver' ? 'selected' : '' }}>Copilotos</option>
                </select>
            </div>

            <div class="col-md-4 mb-3 d-flex align-items-end">
                <button type="submit" class="btn btn-primary" title="Buscar">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
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
    <div>
        {{ $competitors->appends(request()->query())->links('pagination::bootstrap-5') }}
    </div>
</div>

@endsection

@section('styles')
<style>
    .form-label {
        font-weight: bold;
    }

    .form-select {
        border-radius: 0.375rem;
        font-size: 1rem;
    }

    .btn-primary {
        background-color: var(--rojo-rallye);
        border-color: var(--rojo-rallye);
    }

    .btn-primary:hover {
        background-color: #c00500;
        border-color: #c00500;
    }

    .table th,
    .table td {
        vertical-align: middle;
    }

    .table-bordered {
        border: 1px solid #dee2e6;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9;
    }

    .table-responsive {
        margin-top: 1rem;
    }

    .mb-4 {
        margin-bottom: 1.5rem !important;
    }

    .page-item .page-link {
        color: var(--rojo-rallye);
        border-color: var(--rojo-rallye);
        background-color: var(--gris-claro);
    }

    .page-item.active .page-link {
        background-color: var(--rojo-rallye);
        border-color: var(--rojo-rallye);
        color: white;
    }
</style>
@endsection