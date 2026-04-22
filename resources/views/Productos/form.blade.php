@csrf
@if($product ?? false)
    @method('PUT')
@endif

<p>
    <label for="name">Nombre</label>
    <input type="text" id="name" name="name" value="{{ old('name', $product->name ?? '') }}" required>
</p>

<p>
    <label for="description">Descripcion</label>
    <textarea id="description" name="description" rows="3">{{ old('description', $product->description ?? '') }}</textarea>
</p>

<p>
    <label for="description_long">Descripcion larga</label>
    <textarea id="description_long" name="description_long" rows="4">{{ old('description_long', $product->description_long ?? '') }}</textarea>
</p>

<p>
    <label for="price">Precio</label>
    <input type="number" id="price" name="price" step="0.01" min="0" value="{{ old('price', $product->price ?? '') }}" required>
</p>

<p>
    <label for="idcategory">Categoria</label>
    <select id="idcategory" name="idcategory">
        <option value="">Sin categoria</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" @selected(old('idcategory', $product->idcategory ?? null) == $category->id)>{{ $category->name }}</option>
        @endforeach
    </select>
</p>

<a href="{{ route('Productos.index') }}">Volver</a>
<button type="submit">{{ $product ?? false ? 'Guardar cambios' : 'Guardar' }}</button>
