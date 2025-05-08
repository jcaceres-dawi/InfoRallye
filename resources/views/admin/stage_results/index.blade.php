@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Resultados de Etapas</h2>
    <a href="{{ route('admin.stage_results.create') }}" class="btn btn-dark mb-3">Nuevo Resultado</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Etapa</th>
                    <th>Equipo</th>
                    <th>Tiempo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stageResults as $stageResult)
                <tr>
                    <td>{{ $stageResult->stage->name }}</td>
                    <td>{{ $stageResult->team->racingTeam->name }}</td>
                    <td>{{ \Carbon\Carbon::parse($stageResult->time)->format('H:i:s') }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('admin.stage_results.edit', $stageResult) }}" class="btn btn-sm btn-primary me-2">Editar</a>
                            <form action="{{ route('admin.stage_results.destroy', $stageResult) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar resultado?')">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        {{ $stageResults->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection