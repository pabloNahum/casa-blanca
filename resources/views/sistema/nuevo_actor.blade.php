@extends('sistema.master')
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Alta Actores</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('assets/forms/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/forms/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/forms/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/forms/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/forms/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/forms/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/forms/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/forms/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
@section ('tablas')
	<div class="bg-contact2" style="background-image: url('../../assets/forms/images/teatro.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form  action ="{{route ('guardaactor')}}" method = 'POST' enctype='multipart/form-data' class="contact2-form validate-form">
					<span class="contact2-form-title">
						Alta Actores
					</span>

					<div class="wrap-input2 validate-input">
						 {{csrf_field()}}
							@if($errors->first('ida'))
							<i> {{$errors->first('ida')}}</i>
							@endif
						<input class="input2" type="text" name="ida" value="{{$idms}}" readonly >
						<span class="focus-input2" data-placeholder="Clave"></span>
					</div>

					<div class="wrap-input2 validate-input">
						@if($errors->first('nombre'))
						<i> {{$errors->first('nombre')}}</i>
						@endif
						<input class="input2" type="text" name="nombre" value="{{old('nombre')}}">
						<span class="focus-input2" data-placeholder="Nombre"></span>
					</div>

					<div class="wrap-input2 validate-input">
							@if($errors->first('ap'))
							<i> {{$errors->first('ap')}}</i>
							@endif
						<input class="input2" type="text" name="ap" value="{{old('ap')}}">
						<span class="focus-input2" data-placeholder="Apellido Paterno"></span>
					</div>

					<div class="wrap-input2 validate-input">
					        @if($errors->first('am'))
							<i> {{$errors->first('am')}}</i>
							@endif
						<input class="input2" type="text" name="am" value="{{old('am')}}">
						<span class="focus-input2" data-placeholder="Apellido Materno"></span>
					</div>

					<div class="wrap-input2 validate-input">
					 <label>Selecciona una Foto: </label>
					 @if($errors->first('archivo'))
					<i> {{$errors->first('archivo')}}</i>
				@endif						
						<input class="input2" type="file" name="archivo">
						<span class="focus-input2"></span>
					</div>

					<div class="wrap-input2 validate-input">
						<label>Selecciona una obra:  </label>
						   <select class="input2" name ="id_obra">
                       @foreach($obras as $ob)
        <option value= '{{$ob->ido}}'>{{$ob->nombre}}</option>
        @endforeach
                </select>
						<span class="focus-input2"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
								<input type="submit" id="btn_save" value="Guardar" >		
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop
<!--===============================================================================================-->
	<script src="{{asset('assets/forms/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/forms/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('assets/forms/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/forms/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/forms/js/main.js')}}"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>
