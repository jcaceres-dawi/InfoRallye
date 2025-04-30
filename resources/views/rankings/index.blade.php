@extends('layouts.app')

@section('title', 'Clasificaciones')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Clasificaciones de Rallys Finalizados</h1>

    <ul class="list-group">
        @forelse($rallies as $rally)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $rally->name }}
                <a href="{{ route('rankings.show', $rally) }}" class="btn btn-primary btn-sm">Ver clasificación</a>
            </li>
        @empty
            <li class="list-group-item">No hay rallys finalizados aún.</li>
        @endforelse
    </ul>
</div>
@endsection
