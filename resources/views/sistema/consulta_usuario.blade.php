<html>
<head>
<meta charset="utf-8" />
<title>Consulta Clientes | Casa Blanca</title>
	<script src="http://code.jquery.com/jquery-latest.min.js"type="text/javascript"></script>
    <link rel="stylesheet" href="{{ asset('assets/tabla/demo_table.css') }}" />
	 <script type="text/javascript" language="javascript" src="{{ asset('assets/tabla/jquery.dataTables.js')}}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('assets/tabla/jslistadopaises.js')}}"></script>
</head>
 <body>
      <h1 align="center"> Reporte de Usuarios</h1>
<br>
<article id="contenido">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista_paises">
<thead>
     <tr>
	 <th> Clave </th>
     <th> Nombre </th>
     <th> Apellido Paterno </th>
     <th> Apellido Materno </th>
     <th> Correo </th>
     <th> Usuario </th>
     <th> Contraseña </th>
     <th> Confirmar Contraseña </th>     
    </tr>
</thead>	
<tfoot>
         <tr>
             <th></th>
             <th></th>                                        
         </tr>
</tfoot>
<tbody>
    @foreach($usuarios as $us)
    <tr>
         <td>{{$us->idu}}</td>
         <td>{{$us->nombre}}</td>
         <td>{{$us->ap}}</td>
         <td>{{$us->am}}</td>
         <td>{{$us->correo}}</td>
         <td>{{$us->usuario}}</td>
         <td>{{$us->pass}}</td>
         <td>{{$us->pass2}}</td>
    </tr>
    @endforeach
	</tbody>
</table>
</article>
 </body>
</html>