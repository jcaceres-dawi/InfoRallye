@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Resultados de Etapas</h2>
    <a href="{{ route('admin.stage_results.create') }}" class="btn btn-dark mb-3">Nuevo Resultado</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Etapa</th>
                    <th>Equipo</th>
                    <th>Tiempo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stageResults as $stageResult)
                <tr>
                    <td>{{ $stageResult->stage->name }}</td>
                    <td>{{ $stageResult->team->racingTeam->name }}</td>
                    <td>{{ \Carbon\Carbon::parse($stageResult->time)->format('H:i:s') }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('admin.stage_results.edit', $stageResult) }}" class="btn btn-sm btn-primary me-2">Editar</a>
                            <form action="{{ route('admin.stage_results.destroy', $stageResult) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar resultado?')">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        {{ $stageResults->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection

@section('styles')
<style>
    h2 {
        color: var(--rojo-rallye);
    }

    .btn-dark {
        background-color: var(--negro-carbon);
        border-color: var(--negro-carbon);
    }

    .btn-dark:hover {
        background-color: var(--rojo-rallye);
        border-color: var(--rojo-rallye);
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #c82333;
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