<!DOCTYPE html>
<html>
<head>
    <title>Consulta Actor | Casa Blanca</title>
	<script src="http://code.jquery.com/jquery-latest.min.js"type="text/javascript"></script>
    <link rel="stylesheet" href="{{ asset('assets/tabla/demo_table.css') }}" />
	 <script type="text/javascript" language="javascript" src="{{ asset('assets/tabla/jquery.dataTables.js')}}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('assets/tabla/jslistadopaises.js')}}"></script>
</head>
<body>
<h1 align="center">Consulta Actores</h1>
<article id="contenido">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista_paises">
<thead>
         <tr> 
		     <th>Clave</th>
             <th>Foto</th>
             <th>Nombre</th>
             <th>Apellido Paterno</th>
             <th>Apellido Materno</th>
             <th>Obra</th>
         </tr>
</thead>	
<tfoot>
         <tr>
             <th></th>
             <th></th>                                        
         </tr>
</tfoot>
<tbody>
   @foreach($actores as $act)
   <tr>
      <td>{{$act->ida}}</td>
      <td><img src="{{asset('archivo/' .$act->archivo)}}" height=50 width=50></td>
      <td>{{$act->nombre}}</td>
      <td>{{$act->ap}}</td>
      <td>{{$act->am}}</td>
      <td>{{$act->id_obra}}</td>
   </tr>
    @endforeach
</tbody>	
</table>
<article>
</body>
</html>