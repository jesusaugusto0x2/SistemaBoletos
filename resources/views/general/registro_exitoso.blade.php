@extends('template')

@section('head')
	<title>Registro Exitoso</title>

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
			width: 95px;
			margin:0 auto;
			margin-top: 100px;
		}
	</style>
@endsection

@section('body')
	<h1>Registro Exitoso</h1>
	
	<h3>{{$mensaje}}</h3>

	<div>
		<a class="btn btn-success" href="{{route($ruta)}}">Regresar</a>
	</div>
@endsection