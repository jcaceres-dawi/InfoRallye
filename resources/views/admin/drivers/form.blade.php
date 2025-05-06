@csrf

<div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="first_name" value="{{ old('first_name', $driver->first_name ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Apellido</label>
    <input type="text" name="last_name" value="{{ old('last_name', $driver->last_name ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Equipo de carreras</label>
    <select name="racing_team_id" class="form-control">
        <option value="">Selecciona un equipo</option>
        @foreach($racingTeams as $team)
        <option value="{{ $team->id }}" {{ old('racing_team_id', $driver->racing_team_id ?? '') == $team->id ? 'selected' : '' }}>
            {{ $team->name }}
        </option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Guardar</button>
