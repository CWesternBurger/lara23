<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Categoria</title>
    <link rel="stylesheet" href="{{ asset('css/crud-lite.css') }}">
</head>
<body>
    <div>
        <h1>Nueva Categoria</h1>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('Categorias.store') }}">
            @include('Categorias.form')
        </form>
    </div>
</body>
</html>
