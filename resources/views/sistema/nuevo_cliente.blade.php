<html>
<body>
<h1>Alta Clientes</h1>
<form action="{{route('guardacliente')}}" method="POST">
	{{csrf_field()}}
	@if($errors->first('idc'))
	<i>{{$errors->first('idc')}}</i>
	@endif<br>
	 Clave: <input type="text" name="idc" value="{{$idms}}" readonly>	
	<br>
	@if($errors->first('nom_cte'))
	<i>{{$errors->first('nom_cte')}}</i>
	@endif<br>
	Nombre: <input type="text" name="nom_cte" value="{{old('nom_cte')}}">
	<br>
	@if($errors->first('ap_cte'))
	<i>{{$errors->first('ap_cte')}}</i>
	@endif<br>
	Apelldo Paterno: <input type="text" name="ap_cte" value="{{old('ap_cte')}}">
	<br>
	@if($errors->first('am_cte'))
	<i>{{$errors->first('am_cte')}}</i>
	@endif<br>
	Apelldo Materno: <input type="text" name="am_cte" value="{{old('am_cte')}}">
	<br>
	@if($errors->first('telefono'))
	<i>{{$errors->first('telefono')}}</i>
	@endif<br>
	Telefono: <input type="text" name="telefono" value="{{old('telefono')}}">
	<br>
	<input type="submit" value="guadar">
</form>
</body>
</html>