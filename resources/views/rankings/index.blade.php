@extends('layouts.app')

@section('title', 'Clasificaciones')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Clasificaciones de Rallyes Finalizados {{ \Carbon\Carbon::parse($rallies[0]->end_date)->format('Y') }}</h1>

    <ul class="list-group">
        @forelse($rallies as $rally)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $rally->name }} ({{ \Carbon\Carbon::parse($rally->end_date)->format('Y') }})
            <a href="{{ route('rankings.show', $rally) }}" class="btn btn-outline-warning btn-sm" title="Ver clasificación">
                <i class="fas fa-trophy"></i>
            </a>
        </li>
        @empty
        <li class="list-group-item">No hay rallys finalizados aún.</li>
        @endforelse
    </ul>
</div>
@endsection