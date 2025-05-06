@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Equipos de Carreras</h2>
    <a href="{{ route('admin.racing_teams.create') }}" class="btn btn-dark mb-3">Nuevo Equipo</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre del Equipo</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($racingTeams as $racingTeam)
                <tr>
                    <td>{{ $racingTeam->name }}</td>
                    <td>{{ $racingTeam->category->name ?? 'Sin categoría' }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('admin.racing_teams.edit', $racingTeam) }}" class="btn btn-sm btn-primary me-2">Editar</a>
                            <form action="{{ route('admin.racing_teams.destroy', $racingTeam) }}" method="POST" onsubmit="return confirm('¿Eliminar equipo?')">
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