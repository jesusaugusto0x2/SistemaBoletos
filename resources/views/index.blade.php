@extends('template')

@section('head')
	<title>Sistema Boletos - Inicio</title>

	<style type="text/css">
		h1{			
			text-align: center;			
			padding-top: 30px;		
		}
		
		a:hover{			
			color:green;
		}

		.div_cen{
			position: relative;
			margin:0 auto;
		}

		#div_form{
			width: 30%;
			margin-top: 100px;
		}

		#div_boton{
			width: 100px;
			margin-top: 30px;
		}

		#div_link{
			text-align: center;
			margin-top: 20px;
		}
	</style>
@endsection

@section('body')

	<h1>Sistema de Boletos MVP</h1>

	<div class="div_cen" id="div_form">
		
		@if (session('alert'))
		    <div class="alert alert-success">
		        {{ session('alert') }}
		    </div>
		@endif

		{!! Form::open(['route' => 'usuario.verificar', 'method' => 'POST']) !!}
			
			<div class="form-group">
				<label for="usuario">Usuario:</label>
				<input class="form-control" type="text" name="usuario" placeholder="Ingresa tu usuario" required>
			</div>

			<div class="form-group">
				<label for="password">Contraseña:</label>
				<input class="form-control" type="password" name="password" placeholder="Ingresa tu contraseña" required>
			</div>

			<div class="div_cen" id="div_boton">
				<input class="btn btn-success" type="submit" value="Ingresar">
			</div>

		{!! Form::close() !!}

		<div class="div_cen" id="div_link">
			¿No tienes una cuenta? <a href="{{route('usuario.registrar')}}">Registrate.</a>
		</div>	
	</div>
	
@endsection