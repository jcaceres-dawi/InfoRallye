@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Copilotos</h2>
    <a href="{{ route('admin.codrivers.create') }}" class="btn btn-dark mb-3">Nuevo Copiloto</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Equipo de Carreras</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($codrivers as $codriver)
                <tr>
                    <td>{{ $codriver->first_name }}</td>
                    <td>{{ $codriver->last_name }}</td>
                    <td>{{ $codriver->racingTeam->name ?? 'Sin equipo' }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('admin.codrivers.edit', $codriver) }}" class="btn btn-sm btn-primary me-2">Editar</a>
                            <form action="{{ route('admin.codrivers.destroy', $codriver) }}" method="POST" onsubmit="return confirm('¿Eliminar piloto?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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
</style>
@endsection