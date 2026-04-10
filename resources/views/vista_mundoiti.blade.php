<h1> Lista de datos Mundo ITI </h1>

@foreach ($traductorJson as $enlace)
    <p> {{ $enlace['userId'] }} </p>
    <p> {{ $enlace['title'] }} </p>
    <hr>
@endforeach