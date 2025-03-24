@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Categorías</h1>

    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-6 mb-4">
            <a href="{{ route('categories.show', $category->id) }}" style="text-decoration: none;">
                <div class="category-card" style="background-image: url('{{ asset('images/' . ($categoryImages[$category->name] ?? 'default.jpg')) }}'); background-size: cover; background-position: center; height: 300px; color: white; display: flex; align-items: center; justify-content: center; border-radius: 8px; position: relative;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5); border-radius: 8px;"></div>
                    <h3 style="z-index: 1;">{{ $category->name }}</h3>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection