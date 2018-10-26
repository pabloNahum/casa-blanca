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
			<form id="altas_user-form" action="{{route ('guardahorario') }}" method='POST' enctype='multipart/form-data'>
				<h2 id="form-title">Nuevo Horario</h2>
				{{csrf_field()}}
				
				@if($errors->first('ido'))
				<i> {{$errors->first('ido')}}</i>
				@endif
				<input type="text" name="idh" readonly  value="{{$idms}}" /><br></br>
				
				
				<label>Horarios</label>
				@if($errors->first('horario'))
				<i> {{$errors->first('horario')}}</i>
				@endif
				<input type="time" name="horario" /><br></br>
		
				<label>Seleccione Clasificación</label></br>
				<select name='ido'>
				@foreach($obras as $o)
				<option value= '{{$o->ido}}'>{{$o->nombre}}</option>
				@endforeach
				</select><br></br>
				
				<input type="submit" value="Aceptar" name="btn_aceptar"/>
			</form>
		</div>
	</body>
</html>