@extends('template')

@section('head')
	<title>Registrar Boleto</title>

	<style type="text/css">
		h1, h4{
			text-align: center;
		}

		h1{
			padding-top: 20px;
		}

		h4{
			margin-top: 10px;
		}

		#div_form{
			position: relative;
			width: 20%;
			margin:0 auto;
			margin-top: 60px;
		}

		#div_botones{
			position: relative;
			margin-top: 40px;
			text-align: center;
		}
	</style>
@endsection

@section('body')
	<h1>Agregar Boleto</h1>
	<h4>Registra los datos a continuación</h4>

	<div id="div_form">
		@if(session('alert'))
			<div class="alert alert-warning">
			  <strong>¡Cuidado!</strong> {{session('alert')}}
			</div>
		@endif

		{!! Form::open(['route' => 'boleto.agregar', 'method' => 'POST']) !!}
			<div class="form-group">
				<label for="serial">Serial:</label>
				<input class="form-control" type="number" id="serial" name="serial" required>								
			</div>
			
			<div class="form-group">
				<label for="ubicacion">Ubicacion:</label>
				<select class="form-control" id="ubicacion" name="ubicacion">
					<option value="-">---</option>
					<option value="VIP">VIP</option>
					<option value="platino">Platino</option>
					<option value="altos">Altos</option>
					<option value="medios">Medios</option>
				</select>			
			</div>

			<input type="hidden" name="id_ev" value='{{$id_ev}}'>

			<div id="div_botones">
				<input class="btn btn-success" type="submit" value="Registrar Boleto">
				<a class="btn btn-success" href="{{route('usuario.acceder')}}">Regresar</a>				
			</div>

		{!! Form::close() !!}
	</div>

@endsection