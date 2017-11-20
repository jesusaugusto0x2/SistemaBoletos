@extends('template')

@section('head')
	<title>Resultado Boleto</title>

	<style type="text/css">
		h1, h3{
			text-align: center;
			padding-top: 20px;
		}

		strong{
			float: left;
		}

		span{
			float: right;
		}

		#div_info{
			position: relative;
			width: 40%;			
			margin:0 auto;
			margin-top: 30px;	
			padding: 30px;
			font-size: 30px;	
			border:2px solid black;
		}

		#div_botones{
			text-align: center;
			margin-top: 30px;
		}
	</style>
@endsection

@section('body')

	<h1>¡Boleto registrado exitosamente!</h1>
	<h3>Información referente</h3>
	
	<div id="div_info">
		<strong>Serial: </strong> <span>{{$boleto->serial}}</span><br>		
		<strong>Ubicación: </strong> <span>{{$boleto->ubicacion}}</span><br>
		<strong>Fecha: </strong> <span>{{$boleto->evento->fecha}}</span><br>
		<strong>Evento: </strong> <span>{{$boleto->evento->nombre}}</span><br>
	</div>

	<div id="div_botones">
		<a href="{{ route('usuario.acceder') }}" class="btn btn-success">Regresar</a>
	</div>
@endsection