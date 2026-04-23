<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="{{ asset('css/crud-lite.css') }}">
</head>
<body>
    <div>
        <h1>CRUD Productos</h1>
        <a href="{{ route('Productos.create') }}">Nuevo producto</a>
    </div>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form method="GET" action="{{ route('Productos.index') }}">
        <label for="search-product-id">Buscar por ID:</label>
        <input type="number" id="search-product-id" name="id" min="1" value="{{ request('id') }}">
        <button type="submit">Buscar</button>
        <a href="{{ route('Productos.index') }}">Limpiar</a>
    </form>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Descripcion larga</th>
                <th>Precio</th>
                <th>Categoria</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->description_long }}</td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>{{ optional($product->category)->name ?? 'Sin categoria' }}</td>
                <td>
                    <a href="{{ route('Productos.edit', $product) }}">Editar</a>
                    <button type="button" onclick="openModal('delete-modal-{{ $product->id }}')">Eliminar</button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7">No hay productos registrados.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    @foreach ($products as $product)
        <dialog id="delete-modal-{{ $product->id }}">
            <h2>Eliminar producto</h2>
            <p>Estas seguro de eliminar <strong>{{ $product->name }}</strong>?</p>

            <form method="POST" action="{{ route('Productos.destroy', $product) }}">
                @csrf
                @method('DELETE')

                <button type="button" onclick="closeModal('delete-modal-{{ $product->id }}')">Cancelar</button>
                <button type="submit">Si, eliminar</button>
            </form>
        </dialog>
    @endforeach

    <script>
        function openModal(id) {
            const modal = document.getElementById(id);
            if (modal && typeof modal.showModal === 'function') {
                modal.showModal();
            }
        }

        function closeModal(id) {
            const modal = document.getElementById(id);
            if (modal && typeof modal.close === 'function') {
                modal.close();
            }
        }
    </script>
</body>
</html>