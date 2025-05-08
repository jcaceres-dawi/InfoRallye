@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-4">
        <h2 class="text-red">Panel de Administración</h2>
        <p class="text-muted">Selecciona una sección para gestionar los datos</p>
    </div>

    <div class="row g-4">
        @php
        $sections = [
        'Rallyes' => 'rallies',
        'Tramos' => 'stages',
        'Pilotos' => 'drivers',
        'Copilotos' => 'codrivers',
        'Equipos' => 'racing_teams',
        'Participaciones' => 'team_rally',
        'Resultados Tramos' => 'stage_results',
        ];
        @endphp

        @foreach($sections as $label => $route)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">{{ $label }}</h5>
                    <a href="{{ route('admin.' . $route . '.index') }}" class="btn btn-dark mt-3">Gestionar</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('styles')
<style>
    .text-red {
        color: var(--rojo-rallye) !important;
    }

    .btn-dark {
        background-color: var(--negro-carbon);
        border-color: var(--negro-carbon);
    }

    .btn-dark:hover {
        background-color: var(--rojo-rallye);
        border-color: var(--rojo-rallye);
    }
</style>
@endsection