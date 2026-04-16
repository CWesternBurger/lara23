<h1>Vista sitio JC</h1>

@foreach ($traductorJson as $enlace)
    <p><strong>Id del pasajero: </strong>{{ $enlace['PassengerId'] }}</p>
    <p><strong>Nombre: </strong>{{ $enlace['Name'] }}</p>


    <a href="{{ route('datos.detalle', ['id' => $enlace['PassengerId']]) }}">
        <button>Ver detalles</button>
    </a>
    <hr>
@endforeach
