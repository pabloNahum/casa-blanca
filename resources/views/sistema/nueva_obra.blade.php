<!DOCTYPE html>
<html>
	<head>
		<title>Alta Obras | Casa Blanca</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../CSS/forms.css" />
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" />
	</head>
	<body>
		<div id="altas_user-div">
			<form id="altas_user-form" action="{{route ('/sistema/obras/guarda_obra') }}" method = 'POST' enctype='multipart/form-data'>
				<h2 id="form-title">Nueva Obra</h2>
				<input type="text" placeholder="ID de Obra" name="ido" disabled /><br></br>
				<input type="text" placeholder="Nombre" name="nombre" /><br></br>
				<input type="text" placeholder="Duaración" name="duracion" /><br></br>
				<input type="text" placeholder="Cupo" name="cupo" /><br></br>
				<input type="text" placeholder="Clasificación" name="casificacion" /><br></br>
				<input type="date" placeholder="Fecha" name="fecha" /><br></br>
				<input type="text" placeholder="Descripción" name="descripcion" /><br></br>
				<label for="id_act">Seleccione Actor</label></br>
				<select name='id_act'>
				@foreach($actores as $act)
				<option value= '{{$act->id_act}}'>{{$act->nom_act}}</option>
				@endforeach
				</select><br></br>
				<input type="submit" value="Aceptar" name="btn_aceptar"/>
			</form>
		</div>
	</body>
</html>