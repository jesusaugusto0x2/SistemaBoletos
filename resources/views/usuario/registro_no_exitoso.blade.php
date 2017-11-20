@extends('template')

@section('head')
	<title>ERROR - Registro no exitoso</title>
		<style type="text/css">
		h1, h3{
			text-align: center;
		}

		h1{
			padding-top: 60px;
		}

		h3{
			padding-top: 20px;
		}

		div{
			position: relative;
			width: 325px;
			margin:0 auto;
			margin-top: 180px;
		}
	</style>
@endsection

@section('body')
	<h1>El registro no ha podido tener éxito.</h1>
	<h3>Algunos datos ya están registrados o las contraseñas no coinciden</h3>

	<div>
		<a class="btn btn-danger" href="{{route('usuario.index')}}">Página Principal</a>
		<a class="btn btn-danger" href="{{route('usuario.registrar')}}">Regresar al Registro</a>
	</div>
@endsection