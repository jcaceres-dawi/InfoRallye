@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Rallyes</h2>
    <a href="{{ route('admin.rallies.create') }}" class="btn btn-dark mb-3">Nuevo Rallye</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Localización</th>
                    <th>Página web</th>
                    <th>Inicio</th>
                    <th>Fin</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rallies as $rally)
                <tr>
                    <td>{{ $rally->name }}</td>
                    <td>{{ $rally->location }}</td>
                    <td><a href="{{ $rally->website }}" target="_blank">{{ $rally->website }}</a></td>
                    <td>{{ \Carbon\Carbon::parse($rally->start_date)->format('d/m/Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($rally->end_date)->format('d/m/Y') }}</td>
                    <td>{{ $rally->category->name ?? 'Sin categoría'}}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('admin.rallies.edit', $rally) }}" class="btn btn-sm btn-primary me-2">Editar</a>
                            <form action="{{ route('admin.rallies.destroy', $rally) }}" method="POST" onsubmit="return confirm('¿Eliminar rally?')">
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