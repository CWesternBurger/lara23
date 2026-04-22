<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    <div>
        <h1>CRUD Categorias</h1>
        <a href="{{ route('Categorias.create') }}">Nueva categoria</a>
    </div>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="{{ route('Categorias.edit', $category) }}">Editar</a>
                    <button type="button" onclick="openModal('delete-modal-{{ $category->id }}')">Eliminar</button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No hay categorias registradas.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    @foreach ($categories as $category)
        <dialog id="delete-modal-{{ $category->id }}">
            <h2>Eliminar categoria</h2>
            <p>Estas seguro de eliminar <strong>{{ $category->name }}</strong>?</p>

            <form method="POST" action="{{ route('Categorias.destroy', $category) }}">
                @csrf
                @method('DELETE')

                <button type="button" onclick="closeModal('delete-modal-{{ $category->id }}')">Cancelar</button>
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
