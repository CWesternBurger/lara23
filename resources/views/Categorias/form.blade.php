@csrf
@if($category ?? false)
    @method('PUT')
@endif

<p>
    <label for="name">Nombre</label>
    <input type="text" id="name" name="name" value="{{ old('name', $category->name ?? '') }}" required>
</p>

<p>
    <label for="description">Descripcion</label>
    <textarea id="description" name="description" rows="4">{{ old('description', $category->description ?? '') }}</textarea>
</p>

<a href="{{ route('Categorias.index') }}">Volver</a>
<button type="submit">{{ $category ?? false ? 'Guardar cambios' : 'Guardar' }}</button>
