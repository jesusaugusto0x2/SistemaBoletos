@extends('template')

@section('head')
	<title>Registro Evento</title>
	<style type="text/css">	
		h1{
			text-align: center;
			padding-top: 25px;
		}

		legend{
			text-align: center;
		}
			
		.field{
			padding-left: 5px;
			padding-right: 5px;
			border: 1px solid black;
		}

		#div_form{
			position: relative;
			width: 30%;	
			margin:0 auto;		
			margin-top: 30px;	
			
		}
		
		.div_boletos{
			position: relative;
			float: left;
			width: 45%;
			margin-left: 17px;
		}

		#div_botones{
			width: 200px;
			position: relative;
			margin:0 auto;
			margin-top: 45px;
		}
	</style>
@endsection

@section('body')
	<h1>Registrar un nuevo evento</h1>

	<div id="div_form">
		{!! Form::open(['route' => 'evento.agregar', 'method' => 'POST']) !!}
			
			<div class="form-group">
				<label for="nombre">Nombre:</label>
				<input class="form-control" id="nombre" type="text" name="nombre" placeholder="Nombre Evento" required>
			</div>

			<div class="form-group">
				<label for="fecha">Fecha:</label>
				<input class="form-control" id="fecha" type="date" name="fecha" required>
			</div>

			<fieldset class="field">
				<legend>Cantidades de boletos</legend>
					<div class="div_boletos">
						<div class="form-group">
							<label for="VIP">VIP:</label>
							<input class="form-control" id="VIP" type="number" name="VIP" placeholder="Boletos VIP" required>
						</div>

						<div class="form-group">
							<label for="platino">Platino:</label>
							<input class="form-control" id="platino" type="number" name="platino" placeholder="Boletos Platino" required>
						</div>
					</div>

					<div class="div_boletos">
						<div class="form-group">
							<label for="altos">Altos:</label>
							<input class="form-control" id="altos" type="number" name="altos" placeholder="Boletos Altos" required>
						</div>

						<div class="form-group">
							<label for="medios">Medios:</label>
							<input class="form-control" id="medios" type="number" name="medios" placeholder="Boletos Medios" required>
						</div>
					</div>
			</fieldset>

			<div id="div_botones">
				<input class="btn btn-success" type="submit" value="Registrar">
				<a class="btn btn-success" href="{{ route('usuario.admin') }}" >Regresar</a>
			</div>
		{!! Form::close() !!}
	</div>
}
@endsection