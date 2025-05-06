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