@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Resultado de Tramo</h2>
    <form method="POST" action="{{ route('admin.stage_results.update', $stageResult) }}">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label>Etapa</label>
            <input type="text" value="{{ $stageResult->stage->rally->name }} - {{ $stageResult->stage->name }}" class="form-control" readonly>
        </div>

        <div class="mb-3">
            <label>Equipo</label>
            <input type="text" value="{{ $stageResult->team->racingTeam->name }}" class="form-control" readonly>
        </div>

        <div class="mb-3">
            <label>Tiempo</label>
            <div class="d-flex gap-2">
                <input type="number" name="hours" value="{{ \Carbon\Carbon::parse($stageResult->time)->format('H') }}" min="0" max="23" class="form-control" required>
                <span>:</span>
                <input type="number" name="minutes" value="{{ \Carbon\Carbon::parse($stageResult->time)->format('i') }}" min="0" max="59" class="form-control" required>
                <span>:</span>
                <input type="number" name="seconds" value="{{ \Carbon\Carbon::parse($stageResult->time)->format('s') }}" min="0" max="59" class="form-control" required>
            </div>
        </div>


        <button type="submit" class="btn btn-dark">Actualizar</button>
    </form>
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