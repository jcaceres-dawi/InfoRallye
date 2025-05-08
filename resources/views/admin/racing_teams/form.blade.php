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