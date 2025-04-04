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
        <a href="{{ route('rallys.index', $rally->id) }}" class="text-decoration-none">
            <div class="card shadow-sm border-0 position-relative hover-shadow">
                @php
                $isEnded = \Carbon\Carbon::parse($rally->end_date)->isPast();
                @endphp
                <span class="badge bg-{{ $isEnded ? 'danger' : 'success' }} position-absolute top-0 end-0 m-3">
                    {{ $isEnded ? 'Finalizado' : 'Próximamente' }}
                </span>

                <div class="card-body">
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

</div>
@endsection