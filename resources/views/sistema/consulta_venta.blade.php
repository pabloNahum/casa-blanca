<html>
<body>
	<h1>Reporte de Maestros</h1>
	<br>
	<table border="1">
		<tr>
			<td>Clave</td>
			<td>Cantidad Unitaria</td>
			<td>Fecha Vente</td>
			<td>Cantidad Boletos</td>
			<td>Importe</td>
			<td>Descuento</td>
			<td>Clave Cliete</td>
			<td>Clave Obra</td>
		</tr>
			@foreach($ventas as $vnta)
		<tr>
			<td align="center">{{$vnta->idv}}</td>
			<td>{{$vnta->c_unit}}</td>
			<td>{{$vnta->fecha_vnta}}</td>
			<td>{{$vnta->cant_bol}}</td>
			<td>{{$vnta->importe}}</td>
			<td>{{$vnta->descuento}}</td>
			<td>{{$vnta->idc}}</td>
			<td>{{$vnta->ido}}</td>
		</tr>
			@endforeach
	</table>
	</body>
	</html>