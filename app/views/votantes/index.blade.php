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
{{Session::get('mensaje')}}
</div>
<h3>Mujeres Con Andreina</h3><br>
<div>
<a href="agregarmujer" title="Agregar" class="pure-button"  >A</a>
</div>
@if(isset($votantes))

<br>

		<table id="data">
			<thead>
				<tr>
					<th>#</th>
					<th>Apellido</th>
					<th>Nombre</th>
					<th>Cedula</th>
					<th>Telefono</th>
					<th>Parroquia</th>
					<th>voto</th>
					<th>Opción</th>
				</tr>
			</thead>
			<tbody>
			@foreach($votantes as $votante)
				<tr>
					<td>{{$cont++}}</td>
					<td>{{$votante->apellido}}</td>
					<td>{{$votante->nombre}}</td>
					<td>{{$votante->cedula}}</td>
					<td>{{$votante->telefono}}</td>
					<td>{{$votante->parroquia}}</td>
					<td>{{$votante->voto}}</td>
					<td><a href="editarmujer{{$votante->id}}" class="button-xsmall pure-button" >Mofidicar</a></td>
				</tr>
			@endforeach
			</tbody>
		</table>
@else
<div>
	no hay registros guardados
</div>
@endif
</section>
</body>
<script src="js/query.js" type="text/javascript"></script>
<script src="js/datatable/jquery.dataTables.js" type="text/javascript"></script>
<script  type="text/javascript" charset="utf-8" async defer>
	
	$(document).ready(function(){

		$('#data').dataTable();


	});

</script>

</html>



