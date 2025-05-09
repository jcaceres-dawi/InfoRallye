@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registrar Resultado de Tramo</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="GET" action="{{ route('admin.stage_results.create') }}">
        <div class="mb-3">
            <label>Etapa</label>
            <select name="stage_id" class="form-control" onchange="this.form.submit()" required>
                <option value="">Selecciona una etapa</option>
                @foreach($stages as $stage)
                <option value="{{ $stage->id }}" {{ request('stage_id') == $stage->id ? 'selected' : '' }}>
                    {{ $stage->rally->name }} - {{ $stage->name }}
                </option>
                @endforeach
            </select>
        </div>
    </form>

    @if(request('stage_id') && $teams->isNotEmpty())

    <form method="POST" action="{{ route('admin.stage_results.store') }}">
        @csrf
        <input type="hidden" name="stage_id" value="{{ request('stage_id') }}">

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
            <label>Tiempo</label>
            <div class="d-flex">
                <select name="hours" class="form-control" required>
                    <option value="">Horas</option>
                    @for($i = 0; $i < 24; $i++)
                        <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                        {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                        </option>
                        @endfor
                </select>

                <select name="minutes" class="form-control" required>
                    <option value="">Minutos</option>
                    @for($i = 0; $i < 60; $i++)
                        <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                        {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                        </option>
                        @endfor
                </select>

                <select name="seconds" class="form-control" required>
                    <option value="">Segundos</option>
                    @for($i = 0; $i < 60; $i++)
                        <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                        {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                        </option>
                        @endfor
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-dark">Guardar</button>
    </form>
    @elseif(request('stage_id'))
    <div class="alert alert-warning">
        No hay equipos asociados al rally de esta etapa.
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