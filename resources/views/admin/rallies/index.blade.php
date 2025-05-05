@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Rallyes</h2>
    <a href="{{ route('admin.rallies.create') }}" class="btn btn-dark mb-3">Nuevo Rally</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rallies as $rally)
            <tr>
                <td>{{ $rally->name }}</td>
                <td>{{ $rally->start_date }}</td>
                <td>{{ $rally->end_date }}</td>
                <td>
                    <a href="{{ route('admin.rallies.edit', $rally) }}" class="btn btn-sm btn-primary">Editar</a>
                    <form action="{{ route('admin.rallies.destroy', $rally) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar rally?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
