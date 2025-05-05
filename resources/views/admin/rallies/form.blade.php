@csrf

<div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="name" value="{{ old('name', $rally->name ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Localización</label>
    <input type="text" name="location" value="{{ old('location', $rally->location ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Página web</label>
    <input type="text" name="website" value="{{ old('website', $rally->website ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Fecha de inicio</label>
    <input type="date" name="start_date" value="{{ old('start_date', optional($rally->start_date ?? null)->format('Y-m-d')) }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Fecha de fin</label>
    <input type="date" name="end_date" value="{{ old('end_date', optional($rally->end_date ?? null)->format('Y-m-d')) }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>Categoría</label>
    <select name="category_id" class="form-control" required>
        <option value="">Selecciona una categoría</option>
        @foreach($categories as $category)
        <option value="{{ $category->id }}" {{ old('category_id', $rally->category_id ?? '') == $category->id ? 'selected' : '' }}>
            {{ $category->name }}
        </option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Guardar</button>