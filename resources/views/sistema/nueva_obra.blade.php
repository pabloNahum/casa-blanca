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
			<form id="altas_user-form" action="{{route ('guardaobra') }}" method = 'POST' enctype='multipart/form-data'>
				<h2 id="form-title">Nueva Obra</h2>
				{{csrf_field()}}
				
				@if($errors->first('ido'))
				<i> {{$errors->first('ido')}}</i>
				@endif
				<input type="text" placeholder="ID de Obra" name="ido" disabled  value="{{$idof}}" /><br></br>
				
				@if($errors->first('nombre'))
				<i> {{$errors->first('nombre')}}</i>
				@endif
				<input type="text" placeholder="Nombre" name="nombre" /><br></br>
				
				@if($errors->first('duracion'))
				<i> {{$errors->first('duracion')}}</i>
				@endif
				<input type="text" placeholder="Duaración" name="duracion" /><br></br>
				
				@if($errors->first('cupo'))
				<i> {{$errors->first('cupo')}}</i>
				@endif
				<input type="text" placeholder="Cupo" name="cupo" /><br></br>
				
				@if($errors->first('clasificacion'))
				<i> {{$errors->first('clasificacion')}}</i>
				@endif
				<input type="text" placeholder="Clasificación" name="casificacion" /><br></br>
				
				@if($errors->first('fecha'))
				<i> {{$errors->first('fecha')}}</i>
				@endif
				<input type="date" placeholder="Fecha" name="fecha" /><br></br>
				
				@if($errors->first('descripcion'))
				<i> {{$errors->first('descripcion')}}</i>
				@endif
				<input type="text" placeholder="Descripción" name="descripcion" /><br></br>
				<label for="id_act">Seleccione Actor</label></br>
				<select name='id_act'>
				@foreach($actores as $act)
				<option value= '{{$act->ida}}'>{{$act->nombre}}</option>
				@endforeach
				</select><br></br>
				<label for="id_act">Seleccione Horario</label></br>
				<select name='id_act'>
				@foreach($horarios as $hr)
				<option value= '{{$act->idh}}'>{{$hr->horario}}</option>
				@endforeach
				</select><br></br>
				
				<input type="submit" value="Aceptar" name="btn_aceptar"/>
			</form>
		</div>
	</body>
</html>