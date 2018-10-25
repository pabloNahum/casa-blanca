<html>
<body>
	<h1>Consulta Clientes</h1>
	<br>
	<table border="1">
		<tr>
			<td>Clave</td>
			<td>Nombre</td>
			<td>Apellido Paterno</td>
			<td>Apellido Materno</td>
			<td>Telefono</td>
		</tr>
			@foreach($clientes as $cte)
		<tr>
			<td align="center">{{$cte->idc}}</td>
			<td>{{$cte->nom_cte}}</td>
			<td>{{$cte->ap_cte}}</td>
			<td>{{$cte->am_cte}}</td>
			<td>{{$cte->telefono}}</td>
		</tr>
			@endforeach
	</table>
	</body>
	</html>