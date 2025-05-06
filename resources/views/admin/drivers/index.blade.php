@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Pilotos</h2>
    <a href="{{ route('admin.drivers.create') }}" class="btn btn-dark mb-3">Nuevo Piloto</a>

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
                @foreach($drivers as $driver)
                <tr>
                    <td>{{ $driver->first_name }}</td>
                    <td>{{ $driver->last_name }}</td>
                    <td>{{ $driver->racingTeam->name ?? 'Sin equipo' }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('admin.drivers.edit', $driver) }}" class="btn btn-sm btn-primary me-2">Editar</a>
                            <form action="{{ route('admin.drivers.destroy', $driver) }}" method="POST" onsubmit="return confirm('¿Eliminar piloto?')">
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