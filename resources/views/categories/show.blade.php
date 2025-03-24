@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $category->name }}</h1>
        <p>{{ $category->description }}</p>

        <h3>Rallys de esta categoría</h3>
        <div class="list-group">
            @forelse($rallies as $rally)
                <a href="{{ $rally->website }}" target="_blank" class="list-group-item list-group-item-action">
                    {{ $rally->name }} - {{ $rally->location }} ({{ $rally->start_date }} - {{ $rally->end_date }})
                </a>
            @empty
                <p>No hay rallies programados para esta categoría.</p>
            @endforelse
        </div>
    </div>
@endsection
