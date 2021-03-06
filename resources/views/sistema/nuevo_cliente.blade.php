@extends('sistema.master')
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Alta Horario</title>
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
				<form action="{{route('guardacliente')}}" method="POST" class="contact2-form validate-form" >
					<span class="contact2-form-title">
						Alta Clientes
					</span>

						<div class="wrap-input2 validate-input">
						 {{csrf_field()}}
							@if($errors->first('idc'))
							<i> {{$errors->first('idc')}}</i>
							@endif
						<input class="input2" type="text"name="idc" readonly  value="{{$idms}}">
						<span class="focus-input2" data-placeholder="Clave"></span>
					</div>

					<div class="wrap-input2 validate-input">
					@if($errors->first('nom_cte'))
						<i> {{$errors->first('nom_cte')}}</i>
						@endif
						<input class="input2" type="text" name="nom_cte" value="{{old('nom_cte')}}">
						<span class="focus-input2" data-placeholder="Nombre"></span>
					</div>

					<div class="wrap-input2 validate-input">
					@if($errors->first('ap_cte'))
						<i> {{$errors->first('ap_cte')}}</i>
						@endif
						<input class="input2" type="text" name="ap_cte" value="{{old('ap_cte')}}">
						<span class="focus-input2" data-placeholder="Apellido Paterno"></span>
					</div>

					<div class="wrap-input2 validate-input">
					@if($errors->first('am_cte'))
						<i> {{$errors->first('am_cte')}}</i>
						@endif
						<input class="input2" type="text" name="am_cte" value="{{old('am_cte')}}">
						<span class="focus-input2" data-placeholder="Apellido Materno"></span>
					</div>

					<div class="wrap-input2 validate-input">
					@if($errors->first('telefono'))
						<i> {{$errors->first('telefono')}}</i>
						@endif
						<input class="input2" type="text" name="telefono" value="{{old('telefono')}}">
						<span class="focus-input2" data-placeholder="Telefono"></span>
					</div>


					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
								<input type="submit" id="btn_save" value="Guardar"/>		
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
