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
<section id="seccion">
<div>
@if($errors)
	@foreach($errors->all() as $error)
			{{$error}} <br>
	@endforeach
@endif

</div>

<div>
<h3>Registro de Mujeres Con Andreina</h3><br>

	<form action="guardarmujer" method="post" class="pure-form pure-form-aligned"><br>
		<label for="apellido">Apellido </label><input type="text" id="apellido" name="apellido" placeholder="Apellido" required><br>
		<label for="nombre">Nombre</label><input type="text" id="nombre" name="nombre" placeholder="Nombre" required><br>
		<label for="cedula">Cedula</label><input type="text" id="cedula" name="cedula" placeholder="Cedula" required><br>
		<label for="telefono">Telefono </label><input type="text" name="telefono"  id="telefono" value="" placeholder="Telefono"><br>
		<label for="parroquia">Parroquia</label>{{ Form::select('parroquia', ['' => 'Seleccione', 'El Morro' => 'El Morro', 'Puerto Santo' => 'Puerto Santo', 'Rio Caribe' => 'Rio Caribe', 'San Juan' => 'San Juan', 'Unare' => 'Unare' ], '', ['required'])}}<br>
		<input type="submit" name="" value="Guardar" class="pure-button"> <input type="reset" name="" value="Limpiar" class="pure-button"> <a href="{{URL('/')}}" class="pure-button">Regresar</a>
	</form>}
	>
</div>
</section>
</body>
<script src="js/query.js" type="text/javascript"></script>
<script src="js/datatable/jquery.dataTables.js" type="text/javascript"></script>
</html>