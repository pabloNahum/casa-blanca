<html>
<head>
<meta charset="utf-8" />
<title>Consulta clientes| Casa Blanca</title>
	<script src="http://code.jquery.com/jquery-latest.min.js"type="text/javascript"></script>
    <link rel="stylesheet" href="{{ asset('assets/tabla/demo_table.css') }}" />
	 <script type="text/javascript" language="javascript" src="{{ asset('assets/tabla/jquery.dataTables.js')}}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('assets/tabla/jslistadopaises.js')}}"></script>
</head>
<body>
	<h1 align="center">Consulta Clientes</h1>
<article id="contenido">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista_paises">
<thead>
		<tr>
			<th>Clave</th>
			<th>Nombre</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			<th>Telefono</th>
		</tr>
</thead>
<tfoot>
         <tr>
             <th></th>
             <th></th>                                        
         </tr>
</tfoot>
<tbody>		
			@foreach($clientes as $cte)
		<tr>
			<td align="center">{{$cte->idc}}</td>
			<td>{{$cte->nom_cte}}</td>
			<td>{{$cte->ap_cte}}</td>
			<td>{{$cte->am_cte}}</td>
			<td>{{$cte->telefono}}</td>
		</tr>
			@endforeach
</tbody>
	</table>
	</article>
	</body>
	</html>