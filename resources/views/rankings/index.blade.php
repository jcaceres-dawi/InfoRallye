@extends('layouts.app')

@section('title', 'Clasificaciones')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Clasificaciones de Rallyes Finalizados {{ $selectedYear }}</h1>

    <form method="GET" action="{{ route('rankings.index') }}" class="mb-4 text-center">
        <label for="year" class="form-label me-2">Filtrar por año:</label>
        <select name="year" id="year" class="form-select d-inline-block w-auto" onchange="this.form.submit()">
            @foreach($availableYears as $year)
            <option value="{{ $year }}" {{ $year == $selectedYear ? 'selected' : '' }}>{{ $year }}</option>
            @endforeach
        </select>
    </form>

    <ul class="list-group">
        @forelse($rallies as $rally)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $rally->name }} ({{ \Carbon\Carbon::parse($rally->end_date)->format('Y') }})
            <a href="{{ route('rankings.show', $rally) }}" class="btn btn-outline-warning btn-sm" title="Ver clasificación">
                <i class="fas fa-trophy"></i>
            </a>
        </li>
        @empty
        <li class="list-group-item">No hay rallys finalizados para el año seleccionado.</li>
        @endforelse
    </ul>
</div>
@endsection