<h1> Detalle del registro</h1>  
    <p><strong>ID Pasajero: </strong>{{ $detalles['PassengerId'] }}</p>
    <p><strong>ID: </strong>{{ $detalles['Name'] }}</p>
    <p><strong>Titulo: </strong>{{ $detalles['Sex'] }}</p>
    <p><strong>Body: </strong>{{ $detalles['Age'] }}</p>
    <p><strong>Body: </strong>{{ $detalles['Ticket'] }}</p>

    <a href="{{ url('/datosjc') }}">
        <button>Volver</button>
    </a>