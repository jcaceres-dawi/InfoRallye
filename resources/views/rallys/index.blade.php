@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">{{ $rally->name }}</h1>

    <div class="text-center mb-5">
        <p class="mb-1"><strong>Ubicación:</strong> {{ $rally->location }}</p>
        <p class="mb-1">
            <strong>Sitio web:</strong>
            <a href="{{ $rally->website }}" target="_blank" class="text-decoration-none">
                {{ $rally->website }}
            </a>
        </p>
        <p><strong>Fecha:</strong> {{ \Carbon\Carbon::parse($rally->start_date)->format('d/m/Y') }} - {{ \Carbon\Carbon::parse($rally->end_date)->format('d/m/Y') }}</p>
    </div>

    <h3 class="mb-4 text-center">Tramos del Rally</h3>

    <div class="row justify-content-center">
        @foreach ($rally->stages as $stage)
        <div class="col-md-8 mb-4">
            <a href="{{ route('stages.show', $stage->id) }}" class="text-decoration-none text-dark">
                <div class="card shadow-sm border-0 hover-shadow">
                    <div class="card-body text-center">
                        <h4 class="card-title">{{ $stage->name }}</h4>
                        <p class="card-text mb-2"><strong>Longitud:</strong> {{ $stage->length_km }} km</p>
                        <p class="card-text"><strong>Superficie:</strong> {{ $stage->surface }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

    </div>
</div>
@endsection