@extends('layouts.app')

@section('title', 'Equipos')

@section('content')
<div class="container">
    <h1 class="mb-4">Equipos</h1>

    <form method="GET" action="{{ route('teams.index') }}" class="mb-4">
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="category_id" class="form-label">Categoría</label>
                <select name="category_id" id="category_id" class="form-select">
                    <option value="">Todas las categorías</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4 mb-3 d-flex align-items-end">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Categoría</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                <tr>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->category->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection