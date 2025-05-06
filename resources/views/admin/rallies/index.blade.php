@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Rallyes</h2>
    <a href="{{ route('admin.rallies.create') }}" class="btn btn-dark mb-3">Nuevo Rally</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Localización</th>
                    <th>Página web</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rallies as $rally)
                <tr>
                    <td>{{ $rally->name }}</td>
                    <td>{{ $rally->location }}</td>
                    <td><a href="{{ $rally->website }}" target="_blank">{{ $rally->website }}</a></td>
                    <td>{{ $rally->start_date }}</td>
                    <td>{{ $rally->end_date }}</td>
                    <td>{{ $rally->category->name ?? 'Sin categoría'}}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('admin.rallies.edit', $rally) }}" class="btn btn-sm btn-primary me-2">Editar</a>
                            <form action="{{ route('admin.rallies.destroy', $rally) }}" method="POST" onsubmit="return confirm('¿Eliminar rally?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection