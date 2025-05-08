@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Relaciones Equipo-Rally</h2>
    <a href="{{ route('admin.team_rally.create') }}" class="btn btn-dark mb-3">Nueva Relación</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Equipo</th>
                    <th>Rally</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teamRallies as $team)
                @foreach($team->rallies as $rally)
                <tr>
                    <td>{{ $team->racingTeam->name }}</td>
                    <td>{{ $rally->name }}</td>
                    <td>
                        <div class="d-flex">
                            <form action="{{ route('admin.team_rally.destroy', ['teamId' => $team->id, 'rallyId' => $rally->id]) }}" method="POST" onsubmit="return confirm('¿Eliminar relación?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
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