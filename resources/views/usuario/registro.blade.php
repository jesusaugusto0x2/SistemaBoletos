@extends('template')

@section('head')
	<title>Nuevo Usuario - Registro</title>

	<style type="text/css">	
		h1{
			padding-top: 20px;
			text-align: center;
		}

		.div_data{
			position: relative;
			float: left;
			margin-left: 30px;
			width: 45%;
			border: 1px solid black;
			border-radius: 4px;
			padding: 15px;
		}

		#div_form{
			position: relative;
			width: 60%;
			height: 500px;
			margin:0 auto;
			margin-top: 15px;
		}

		#div_botones{
			position: relative;
			top: 25px;
			width: 220px;
			margin:0 auto;
		}
	</style>
@endsection

@section('body')
	<h1>Ingresa tus datos</h1>

	<div id="div_form">
		{!! Form::open(['route' => 'usuario.agregar', 'method' => 'POST']) !!}
			<div class="div_data">
				<div class="form-group" for="nombre">
					<label>Nombre:</label>
					<input class="form-control" type="text" name="nombre" placeholder="Ingresa tu nombre" required>
				</div>

				<div class="form-group">
					<label>Apellido:</label>
					<input class="form-control" type="text" name="apellido" placeholder="Ingresa tu apellido" required>
				</div>

				<div class="form-group">
					<label>Cedula:</label>
					<input class="form-control" type="number" name="cedula" placeholder="Ingresa tu cedula" required>
				</div>

				<div class="form-group">
					<label>Direccion:</label>
					<input class="form-control" type="text" name="direccion" placeholder="Ingresa tu direccion" required>
				</div>

				<div class="form-group">
					<label>Sexo:</label>
					<select class="form-control" id="sel_sex" name="sexo">
						<option value="-"> --- </option>
						<option value="M"> Masculino </option>
						<option value="F"> Femenino </option>
					</select>
				</div>
			</div>

			<div class="div_data">
				<div class="form-group">
					<label>Teléfono:</label>
					<input class="form-control" type="number" name="telefono" placeholder="Ingresa tu telefono" required>
				</div>

				<div class="form-group">
					<label>Email:</label>
					<input class="form-control" type="email" name="correo" placeholder="Ingresa tu correo electrónico" required>
				</div>

				<div class="form-group">
					<label>Usuario:</label>
					<input class="form-control" type="text" name="user" placeholder="Escribe tu usuario" required>
				</div>

				<div class="form-group">
					<label>Contraseña:</label>
					<input class="form-control" type="password" name="password" placeholder="Escribe tu contraseña" required>	
				</div>

				<div class="form-group">
					<label>Repite Contraseña:</label>
					<input class="form-control" type="password" name="password_rep" placeholder="Repite tu contraseña" required>
				</div>
			</div>

			<div id="div_botones"> 
				<input class="btn btn-success" type="submit" value="Registrarse">
				<a href="{{route('usuario.index')}}" class="btn btn-success">Regresar</a>
			</div>
		{!! Form::close() !!}

	</div>
@endsection