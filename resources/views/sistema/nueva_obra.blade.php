<!DOCTYPE html>
<html>
	<head>
		<title>Alta Obras | Casa Blanca</title>
		<meta charset="utf-8" />
		  <link rel="stylesheet" href="{{ asset('assets/css/forms.css') }}" />
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" />
	</head>
	<body>
		<div id="altas_user-div">
			<form id="altas_user-form" action="{{route ('guardaobra') }}" method='POST' enctype='multipart/form-data'>
				<h2 id="form-title">Nueva Obra</h2>
				{{csrf_field()}}
				
				@if($errors->first('ido'))
				<i> {{$errors->first('ido')}}</i>
				@endif
				<input type="text" placeholder="ID de Obra" name="ido" readonly  value="{{$idof}}" /><br></br>
				
				@if($errors->first('nombre'))
				<i> {{$errors->first('nombre')}}</i>
				@endif
				<input type="text" placeholder="Nombre" name="nombre" /><br></br>
				
				@if($errors->first('duracion'))
				<i> {{$errors->first('duracion')}}</i>
				@endif
				<input type="text" placeholder="Duaración" name="duracion" /><br></br>
				
				 @if($errors->first('archivo'))
				<i> {{$errors->first('archivo')}}</i>
				@endif
				<label for = "archivo">Cargar Poster </label>
				<input type="file" name="archivo"/><br><br>
				
				@if($errors->first('fecha'))
				<i> {{$errors->first('fecha')}}</i>
				@endif
				<input type="date" placeholder="Fecha" name="fecha" /><br></br>
				
				@if($errors->first('descripcion'))
				<i> {{$errors->first('descripcion')}}</i>
				@endif
				<input type="text" placeholder="Descripción" name="descripcion" /><br></br>
				<label for="id_act">Seleccione Foro</label></br>
				<select name='idf'>
				@foreach($foros as $f)
				<option value= '{{$f->idf}}'>{{$f->foro}}</option>
				@endforeach
				</select><br></br>
				<label for="id_act">Seleccione Clasificación</label></br>
				<select name='id_clas'>
				@foreach($clasificaciones as $class)
				<option value= '{{$class->id_clas}}'>{{$class->clasificacion}}</option>
				@endforeach
				</select><br></br>
				
				<input type="submit" value="Aceptar" name="btn_aceptar"/>
			</form>
		</div>
	</body>
</html>