<h1> Vista sitio JC </h1>

@foreach ($traductorJson as $enlace)
    <p> {{$enlace['PassengerId'] }} </p>
    <p> {{$enlace['Name'] }} </p>
    <p> {{$enlace['Age'] }} </p>
    
    <button type="button"> Ver más </button>

    <hr>
@endforeach