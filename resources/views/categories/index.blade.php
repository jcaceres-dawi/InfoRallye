@extends('layouts.app')

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
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        position: relative;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .category-card:hover {
        transform: scale(1.05);
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 8px;
        transition: background-color 0.3s ease-in-out;
    }

    .category-card:hover .overlay {
        background-color: rgba(0, 0, 0, 0.3);
    }

    .category-link {
        text-decoration: none;
    }
</style>
@endsection
