<html>
<head>
		<title>Alta Usuario | Casa Blanca</title>
		<meta charset="utf-8" />
		  <link rel="stylesheet" href="{{ asset('assets/css/forms.css') }}" />
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" />
	</head>
<body>
<div id="altas_user-div">
<form  id="altas_user-form" action ="{{route ('guardausuario')}}" method = 'POST'>
<h1 id="form-title"> Alta Usuarios</h1>
{{csrf_field()}}

@if($errors->first('idu'))
<i> {{$errors->first('idu')}}</i>
@endif<br>

<br>

Clave: <input type='text' name = 'idu' value="{{$idms}}" readonly='readonly'>
@if($errors->first('nom_usr'))
<i> {{$errors->first('nom_usr')}}</i>
@endif<br>
<br>
Nombre: <input type='text' name = 'nom_usr' value="{{old('nom_usr')}}">
<br>


@if($errors->first('ap_usr'))
<i> {{$errors->first('ap_usr')}}</i>
@endif<br>
Apellido Paterno: <input type ='text' name = 'ap_usr' value="{{old('ap_usr')}}">
<br>


@if($errors->first('am_usr'))
<i> {{$errors->first('am_usr')}}</i>
@endif<br>
Apellido Materno: <input type ='text' name = 'am_usr' value="{{old('am_usr')}}">
<br>


@if($errors->first('correo'))
<i> {{$errors->first('correo')}}</i>
@endif<br>
Correo Electrónico: <input type ='text' name = 'correo' value="{{old('correo')}}">
<br>


@if($errors->first('usuario'))
<i> {{$errors->first('usuario')}}</i>
@endif<br>
Usuario: <input type ='text' name = 'usuario' value="{{old('usuario')}}">
<br>

@if($errors->first('pass'))
<i> {{$errors->first('pass')}}</i>
@endif<br>
Contraseña: <input type ='password' name = 'pass' value="{{old('pass')}}">
<br>


@if($errors->first('pass2'))
<i> {{$errors->first('pass2')}}</i>
@endif<br>
Confirmar Contraseña: <input type ='password' name = 'pass2' value="{{old('pass2')}}">
<br>

 
                  
<br>
<input type='submit' value='Guardar'>
<br>
</form>
</div>
</body>
</html>