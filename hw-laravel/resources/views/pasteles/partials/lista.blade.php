<h1>Lista de pasteles</h1>

@if( count($pasteles) > 3 )
    <h3>¡ Hay muchos Pasteles !</h3>
@endif

<ul>
@foreach($pasteles as $pastelito)
    <li>{{ $pastelito }}</li>
@endforeach
</ul>