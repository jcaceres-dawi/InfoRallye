@csrf

<div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="first_name" value="{{ old('first_name', $codriver->first_name ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Apellido</label>
    <input type="text" name="last_name" value="{{ old('last_name', $codriver->last_name ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Equipo de carreras</label>
    <select name="racing_team_id" class="form-control">
        <option value="">Selecciona un equipo</option>
        @foreach($racingTeams as $team)
        <option value="{{ $team->id }}" {{ old('racing_team_id', $codriver->racing_team_id ?? '') == $team->id ? 'selected' : '' }}>
            {{ $team->name }}
        </option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-dark">Guardar</button>

@section('styles')
<style>
    .btn-dark {
        background-color: #1C1C1C;
        border-color: #1C1C1C;
    }

    .btn-dark:hover {
        background-color: #E10600; 
        border-color: #E10600;
    }

    h2 {
        color: #E10600;
    }
</style>
@endsection

