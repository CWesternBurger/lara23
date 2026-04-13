<h1> Lista de datos del api </h1>

@foreach ($traductorJson as $enlace)
    <p> {{ $enlace['id'] }} </p>
    <p> {{ $enlace['title'] }} </p>
    <p> {{ $enlace['body'] }} </p>

    <hr>
@endforeach