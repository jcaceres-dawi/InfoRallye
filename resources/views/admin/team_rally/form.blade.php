@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Nueva Relación</h2>

    <form method="POST" action="{{ route('admin.team_rally.store') }}">
        @csrf

        <div class="mb-3">
            <label>Equipo</label>
            <select name="team_id" class="form-control" required>
                <option value="">Selecciona un equipo</option>
                @foreach($teams as $team)
                <option value="{{ $team->id }}">
                    {{ $team->racingTeam->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Rally</label>
            <select name="rally_id" class="form-control" required>
                <option value="">Selecciona un rally</option>
                @foreach($rallies as $rally)
                <option value="{{ $rally->id }}">
                    {{ $rally->name }}
                </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection