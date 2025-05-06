@csrf

<div class="mb-3">
    <label>Nombre del Equipo</label>
    <input type="text" name="name" value="{{ old('name', $racingTeam->name ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Categoría</label>
    <select name="category_id" class="form-control" required>
        <option value="">Selecciona una categoría</option>
        @foreach($categories as $category)
        <option value="{{ $category->id }}" {{ old('category_id', $racingTeam->category_id ?? '') == $category->id ? 'selected' : '' }}>
            {{ $category->name }}
        </option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Guardar</button>