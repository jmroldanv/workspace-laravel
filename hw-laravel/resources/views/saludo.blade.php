<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vista ejemplo</title>
</head>
<body>
    {{-- login check --}}    
    @unless (Auth::check())
    	You are not signed in.
	@endunless

    <h1>Hola mundo desde Laravel</h1>
    <h2>{{ $pastel }}</h2>

	 @include('pasteles.partials.lista')

	<h1>Datos</h1>
	{{ $datos->numero }}, {{ $datos->cadena }}

    <div>
        <h3>Datos compartidos entre Vistas (View) desde AppServiceProvider</h3>
        {{ $myGlobalData }}
    </div>
</body>
</html>