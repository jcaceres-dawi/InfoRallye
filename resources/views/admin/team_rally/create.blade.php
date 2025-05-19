@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Nueva Relación</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="GET" action="{{ route('admin.team_rally.create') }}">
        <div class="mb-3">
            <label>Rallye</label>
            <select name="rally_id" class="form-control" onchange="this.form.submit()" required>
                <option value="">Selecciona un rally</option>
                @foreach($rallies as $rally)
                <option value="{{ $rally->id }}" {{ request('rally_id') == $rally->id ? 'selected' : '' }}>
                    {{ $rally->name }}
                </option>
                @endforeach
            </select>
        </div>
    </form>

    @if(request('rally_id') && $teams->isNotEmpty())
    <form method="POST" action="{{ route('admin.team_rally.store') }}">
        @csrf

        <input type="hidden" name="rally_id" value="{{ request('rally_id') }}">

        <div class="mb-3">
            <label>Equipo</label>
            <select name="team_id" class="form-control" required>
                <option value="">Selecciona un equipo</option>
                @foreach($teams as $team)
                <option value="{{ $team->id }}">{{ $team->racingTeam->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-dark">Guardar</button>
    </form>
    @elseif(request('rally_id'))
    <div class="alert alert-warning">
        No hay equipos en la categoría de este rally.
    </div>
    @endif
</div>
@endsection

@section('styles')
<style>
    .btn-dark {
        background-color: #1C1C1C;
        border-color: #1C1C1C;
    }

    .btn-dark:hover {
        background-color: #E10600;
        border-color: #E10600;
    }

    h2 {
        color: #E10600;
    }
</style>
@endsection