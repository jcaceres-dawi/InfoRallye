@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tramos</h2>
    <a href="{{ route('admin.stages.create') }}" class="btn btn-dark mb-3">Nuevo Tramo</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Rallye</th>
                    <th>Nombre</th>
                    <th>Longitud km</th>
                    <th>Superfície</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stages as $stage)
                <tr>
                    <td>{{ $stage->rally->name }}</td>
                    <td>{{ $stage->name }}</td>
                    <td>{{ $stage->length_km }}</td>
                    <td>{{ $stage->surface }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('admin.stages.edit', $stage) }}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{ route('admin.stages.destroy', $stage) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar tramo?')">Eliminar</button>
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