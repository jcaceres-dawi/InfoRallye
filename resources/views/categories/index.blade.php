@extends('layouts.app')

@section('title', 'Categorías')

@section('content')
<div class="container">
    <h1 class="mb-4">Categorías</h1>

    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-6 mb-4">
            <a href="{{ route('categories.show', $category->id) }}" class="category-link">
                <div class="category-card" style="background-image: url('{{ asset('images/' . ($categoryImages[$category->name] ?? 'default.jpg')) }}');">
                    <div class="overlay"></div>
                    <h3>{{ $category->name }}</h3>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

<style>
    .category-card {
        background-size: cover;
        background-position: center;
        height: 300px;
        color: var(--blanco-puro);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        position: relative;
        text-align: center;
        padding: 1rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        font-weight: bold;
    }

    .category-card:hover {
        transform: scale(1.03);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    .overlay {
        position: absolute;
        inset: 0;
        background-color: rgba(28, 28, 28, 0.6);
        border-radius: 12px;
        transition: background-color 0.3s ease;
    }

    .category-card:hover .overlay {
        background-color: rgba(28, 28, 28, 0.4);
    }

    .category-card h3 {
        z-index: 1;
        margin: 0;
        font-size: 1.5rem;
        color: var(--blanco-puro);
    }

    .category-link {
        text-decoration: none;
    }
</style>
@endsection