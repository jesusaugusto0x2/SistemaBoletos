@extends('template')

@section('head')
	<title>Editar Evento</title>
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
	<h1>Edición de Evento [{{$evento->id}}]</h1>

	<div id="div_form">
		{!! Form::open(['route' => 'evento.guardarEdit', 'method' => 'POST']) !!}
			
			<div class="form-group">
				<label for="nombre">Nombre:</label>
				<input class="form-control" id="nombre" type="text" name="nombre" placeholder="{{$evento->nombre}}" required>
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
							<input class="form-control" id="VIP" type="number" name="VIP" placeholder="{{$evento->VIP}}" required>
						</div>

						<div class="form-group">
							<label for="platino">Platino:</label>
							<input class="form-control" id="platino" type="number" name="platino" placeholder="{{$evento->platino}}" required>
						</div>
					</div>

					<div class="div_boletos">
						<div class="form-group">
							<label for="altos">Altos:</label>
							<input class="form-control" id="altos" type="number" name="altos" placeholder="{{$evento->altos}}" required>
						</div>

						<div class="form-group">
							<label for="medios">Medios:</label>
							<input class="form-control" id="medios" type="number" name="medios" placeholder="{{$evento->medios}}" required>
						</div>
					</div>
			</fieldset>
			
			<input type="hidden" name="id_evento" value="{{$evento->id}}">

			<div id="div_botones">
				<input class="btn btn-success" type="submit" value="Editar">
				<a class="btn btn-success" href="{{ route('usuario.acceder') }}" >Regresar</a>
			</div>
		{!! Form::close() !!}
	</div>
}
@endsection