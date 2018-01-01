@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
	@parent

	<p>This is appended to the Master sidebar</p>
@endsection

@section('content')
	<p>This is My body content</p>
@endsection

<div>
    <h3>Datos compartidos entre Vistas (View) desde AppServiceProvider</h3>
	{{ $myGlobalData }}
</div>