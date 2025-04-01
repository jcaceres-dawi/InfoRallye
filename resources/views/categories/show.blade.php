@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $category->name }}</h1>
    <p>{{ $category->description }}</p>

    <h3>Rallys de esta categoría</h3>
    <div class="list-group">
        @forelse($rallies as $rally)
        <a href="{{ $rally->website }}" target="_blank" class="list-group-item list-group-item-action">
            {{ $rally->name }} - {{ $rally->location }} ({{ \Carbon\Carbon::parse($rally->start_date)->format('d/m/Y') }} - {{ \Carbon\Carbon::parse($rally->end_date)->format('d/m/Y') }})
        </a>
        @empty
        <p>No hay rallies programados para esta categoría.</p>
        @endforelse
    </div>
</div>
@endsection