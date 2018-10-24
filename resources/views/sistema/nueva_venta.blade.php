@extends('sistema.principal')

@section('contenido')
<form action="{{route('guardaventa')}}" method="POST" enctype='multipart/form-data'>
	{{csrf_field()}}
	@if($errors->first('idv'))
	<i>{{$errors->first('idv')}}</i>
	@endif<br>
	 Clave: <input type="text" name="idv" value="{{$idms}}" readonly>	
	<br>
	@if($errors->first('c_unit'))
	<i>{{$errors->first('c_unit')}}</i>
	@endif<br>
	Cantidad Unitara: <input type="text" name="c_unit" value="{{old('c_unit')}}">
	<br>
	@if($errors->first('fecha_vnta'))
	<i>{{$errors->first('fecha_vnta')}}</i>
	@endif<br>
	Fecha Venta: <input type="date" name="fecha_vnta" value="{{old('fecha_vnta')}}">
	<br>
	@if($errors->first('cant_bol'))
	<i>{{$errors->first('cant_bol')}}</i>
	@endif<br>
	Cantidad de Boletos: <input type="text" name="cant_bol" value="{{old('cant_bol')}}">
	<br>
	@if($errors->first('importe'))
	<i>{{$errors->first('importe')}}</i>
	@endif<br>
	Importe: <input type="text" name="importe" value="{{old('importe')}}">
	<br>
	@if($errors->first('descuento'))
	<i>{{$errors->first('descuento')}}</i>
	@endif<br>
	Descuento: <input type="text" name="descuento" value="{{old('descuento')}}">
	<br>
	Seleccione cliente: <select name='idc'>
						@foreach($clientes as $cte)
						<option value='{{$cte->idc}}'>{{$cte->nom_cte}}</option>
						@endforeach
						</select>
	<br>
	Seleccione cliente: <select name='ido'>
						@foreach($obras as $ob)
						<option value='{{$ob->ido}}'>{{$ob->nombre}}</option>
						@endforeach
						</select>
	<br>
	@if($errors->first('archivo'))
	<i>{{$errors->first('archivo')}}</i>
	@endif<br>
	seleccione foto <input type='file' name='archivo'>
	<br>
	<input type="submit" value="guadar">
</form>
@stop