<h1> Lista de datos Mundo ITI </h1>

    @foreach ($traductorJson as $enlace)
        <p> {{ $enlace['userId'] ?? 'N/A' }} </p>
        <p> {{ $enlace['title'] ?? 'Sin titulo' }} </p>
        <hr>
    @endforeach