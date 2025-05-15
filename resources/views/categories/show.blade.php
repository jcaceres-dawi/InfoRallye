@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-5">
        <h1 class="mb-3">{{ $category->name }}</h1>
        <p class="lead text-muted">{{ $category->description }}</p>
    </div>

</div>

<div class="row justify-content-center">
    @foreach ($rallies as $rally)
    <div class="col-md-8 mb-3">
        <a href="{{ route('rallys.index', $rally->id) }}" class="rally-link">
            <div class="rally-card">
                @php
                $isEnded = \Carbon\Carbon::parse($rally->end_date)->isPast();
                @endphp
                <span class="badge bg-{{ $isEnded ? 'danger' : 'success' }} position-absolute top-0 end-0 m-3">
                    {{ $isEnded ? 'Finalizado' : 'Próximamente' }}
                </span>

                <div class="rally-card-body">
                    <h5 class="card-title mb-1">{{ $rally->name }}</h5>
                    <p class="card-text mb-1 text-muted"><strong>Ubicación:</strong> {{ $rally->location }}</p>
                    <p class="card-text text-muted">
                        <strong>Fecha:</strong>
                        {{ \Carbon\Carbon::parse($rally->start_date)->format('d/m/Y') }} -
                        {{ \Carbon\Carbon::parse($rally->end_date)->format('d/m/Y') }}
                    </p>
                </div>
            </div>
        </a>
    </div>

    @endforeach
</div>
@endsection

@section('styles')
<style>
    .rally-link {
        text-decoration: none;
    }

    .rally-card {
        background-color: #fff;
        border-radius: 16px;
        overflow: hidden;
        position: relative;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        padding: 1.5rem;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        color: black;
    }

    .rally-card:hover {
        transform: scale(1.05) translateY(-8px);
        box-shadow: 0 16px 30px rgba(0, 0, 0, 0.3);
        z-index: 10;
    }

    .rally-card-body {
        position: relative;
        z-index: 2;
    }

    .badge {
        font-size: 0.85rem;
        padding: 0.4em 0.75em;
        border-radius: 0.5rem;
    }
</style>

@endsection