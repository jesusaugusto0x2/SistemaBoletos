@extends('template')

@section('head')
	@if(session('tipo_usuario') != 0)
		<title>Admin</title>
	@else
		<title>Usuario</title>
	@endif

	<style type="text/css">
		h1, h4{
			text-align: center;			
		}

		h1{
			padding-top: 30px;
		}

		h3{
			margin-top: 15px;
		}

		#div_eventos{
			width: 70%;
			position: relative;
			margin: 0 auto;
			margin-top: 30px;
			height: 400px;	
		}

		#advice{
			position: relative;
			top: 150px;
		}
		
		#div_botones{
			position: relative;
			text-align: center;
			margin-top: 30px;
		}
	</style>
@endsection

@section('body')
	<h1>Bienvenido</h1>

	@if(session('tipo_usuario') != 0)
		<h4>{{ session('nom_usuario') .' '. session('ape_usuario') .' ('. session('usr_usuario') .') - Eres administrador.'}}</h4>
	@else
		<h4>{{ session('nom_usuario') .' '. session('ape_usuario') .' ('. session('usr_usuario') .')'}}</h4>
	@endif

	<div id="div_eventos">
		@if($eventos->count() == 0)
			<h4 id="advice">No hay eventos para mostrar</h4>
		@else
			<h4>Lista de eventos:</h4>

			<table class="table table-hover">				
				<thead>
					<th>Nombre</th>
					<th>Fecha</th>
					<th>VIP</th>
					<th>Platino</th>
					<th>Altos</th>
					<th>Medios</th>
				</thead>

				<tbody>					
					@foreach($eventos as $ev)
						<tr>
							<td>{{ $ev->nombre }}</td>
							<td>{{ $ev->fecha }}</td>
							<td>{{ $ev->VIP }}</td>
							<td>{{ $ev->platino }}</td>
							<td>{{ $ev->altos }}</td>
							<td>{{ $ev->medios }}</td>

							@if(session('tipo_usuario') != 0)
								<td><a href="{{ route('evento.verboletos', $ev) }}" class="btn btn-primary">Ver Boletos</a></td>
								<td><a href="{{ route('evento.editar', $ev->id) }}" class="btn btn-primary">Editar</a></td>
								<td><a href="{{route('evento.eliminar', $ev->id)}}" class="btn btn-primary">Eliminar</a></td>
							@else
								<td><a href="{{ route('boleto.crear', $ev->id) }}" class="btn btn-primary">Registrar Boleto</a></td>
							@endif
						</tr>
					@endforeach					
				</tbody>
			</table>
		@endif
	</div>

	<div id="div_botones">		
		@if(session('tipo_usuario') != 0)
		<a href="{{ route('evento.crear') }}" class="btn btn-success">Registrar Evento</a>
		@endif
		<a href="{{ route('usuario.index') }}" class="btn btn-success">Regresar</a>
	</div>
@endsection