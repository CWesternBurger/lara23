<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <main>
        <h1>Vista sitio Productos</h1>
    </main>

    <select id="categorias" name="Category">
        <option value="mx">Mexico</option>
        <option value="es">España</option>
        <option value="ar">Argentina</option>
        <option value="co">Colombia</option>
    </select>

    <table>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Precio</th>
            <th>Descripción</th>
            <th>Acciones</th>
        <tr>
        @foreach ($pro as $producto)
        <tr>
            <td>{{ $producto['id'] }}</td>
            <td>{{ $producto['name'] }}</td>
            <td>{{ $producto['price'] }}</td>
            <td>{{ $producto['description'] }}</td>
            <td>
                <button>Editar</button>
                <button>Eliminar</button>
            </td>
        </tr>
        @endforeach
    <table>    

</html>