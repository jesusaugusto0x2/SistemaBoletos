@extends('template')

@section('head')
	<title>Boletos Registrados</title>

	<style type="text/css">
		h1{
			text-align: center;
			padding-top: 30px;
		}
		
		#div_most{
			position: relative;
			width: 50%;
			margin:0 auto;
			margin-top: 35px;
		}

		#div_botones{
			position: relative;
			text-align: center;
			margin-top: 20px;
		}

	</style>
@endsection

@section('body')
	<h1>Boletos registrados para {{$evento->nombre}}</h1>

	<div id="div_most">
		<table class="table table-hover">
			<thead>
				<th>ID</th>
				<th>Serial</th>
				<th>Dueño</th>
				<th>Apellido</th>
				<th>Cédula</th>
				<th>Ubicación</th>
			</thead>

			<tbody>
				@foreach($boletos as $bo)
					<tr>
						<td>{{$bo->id}}</td>
						<td>{{$bo->serial}}</td>
						<td>{{$bo->usuario->nombre}}</td>
						<td>{{$bo->usuario->apellido}}</td>
						<td>{{$bo->usuario->cedula}}</td>
						<td>{{$bo->ubicacion}}</td>

					</tr>
				@endforeach
			</tbody>
		</table>	
	</div>

	<div id="div_botones">		
		<a class="btn btn-success" href="{{route('usuario.acceder')}}">Regresar</a>		
	</div>

@endsection