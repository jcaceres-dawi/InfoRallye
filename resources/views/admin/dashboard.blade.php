@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-4">
        <h2>Panel de Administración</h2>
        <p class="text-muted">Selecciona una sección para gestionar los datos</p>
    </div>

    <div class="row g-4">
        @php
            $sections = [
                'Rallyes' => 'rallies',
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
