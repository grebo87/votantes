<!DOCTYPE html>
<html>
<head>
	<title>Mujeres con Andreina</title>
	<link rel="stylesheet" type="text/css" href="css/datatable/jquery.dataTables.css">
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/forms.css">
    <link rel="stylesheet" type="text/css" href="css/buttons.css">
</head>
<body>
<div>
@if($errors)
	@foreach($errors->all() as $error)
			{{$error}} <br>
	@endforeach
@endif
{{Session::get('mensaje')}}
</div>
<section id="seccion">
<h3>Mujeres Con  Andreina</h3><br>
<div>
	<h4>Editar Registro</h4>
	<form action="actualizarmujer" method="post" class="pure-form pure-form-aligned"> <br>
		<label for="apellido">Apellido h</label><input type="text" id="apellido" name="apellido" placeholder="Apellido" value="{{$votante->apellido}}" required> <br>
		<label for="nombre">Nombre </label><input type="text" id="nombre" name="nombre" placeholder="Nombre" value="{{$votante->nombre}}" required> <br>
		<label for="cedula">Cedula </label><input type="text" id="cedula" name="cedula" placeholder="Cedula" value="{{$votante->cedula}}" required> <br>
		<label for="telefono">Telefono </label><input type="text" name="telefono"  id="telefono" value="{{$votante->telefono}}" placeholder="Telefono"> <br>
		<label for="parroquia">Parroquia </label>{{ Form::select('parroquia', ['' => 'Seleccione', 'El Morro' => 'El Morro', 'Puerto Santo' => 'Puerto Santo', 'Rio Caribe' => 'Rio Caribe', 'San Juan' => 'San Juan', 'Unare' => 'Unare' ], $votante->parroquia, ['required'])}} <br>
		<input type="hidden" name="id" id="id" value="{{$votante->id}}">
		<input type="submit" name="" value="Editar" class="pure-button"> <input type="reset" name="" value="Restaurar" class="pure-button"> <a href="{{URL('/')}}" class="pure-button">Regresar</a>
	</form>
</div>
</section>
</body>
<script src="js/query.js" type="text/javascript"></script>
<script src="js/datatable/jquery.dataTables.js" type="text/javascript"></script>
</html>