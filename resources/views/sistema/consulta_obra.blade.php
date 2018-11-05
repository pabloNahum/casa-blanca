<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulta Obra | Casa Blanca</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://code.jquery.com/jquery-latest.min.js"type="text/javascript"></script>
    <link rel="stylesheet" href="{{ asset('assets/tabla/demo_table.css') }}" />
	 <script type="text/javascript" language="javascript" src="{{ asset('assets/tabla/jquery.dataTables.js')}}"></script>
	<script type="text/javascript" language="javascript" src="{{ asset('assets/tabla/jslistadopaises.js')}}"></script>
</head>
<body>
<h1 align="center"> Consulta de Obras</h1>
<article id="contenido">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista_paises">
<thead>
	     <tr>
		      <th>Clave</th>
			  <th>cartel</th>
			  <th>nombre</th>
			  <th>duracion</th>
			  <th>fecha</th>
			  <th>descripcion</th>
			  <th>foro</th>
       		  <th>clasificacion</th>
		 </tr>
</thead>
<tfoot>
         <tr>
             <th></th>
             <th></th>                                        
         </tr>
</tfoot>
<tbody>
   @foreach($obra as $act)
   <tr>
      <td>{{$act->ido}}</td>
      <td><img src="{{asset('cartelera/' .$act->cartel)}}" height=50 width=50></td>
      <td>{{$act->nombre}}</td>
      <td>{{$act->duracion}}</td>
	  <td>{{$act->fecha}}</td>
      <td>{{$act->descripcion}}</td>
	  <td>{{$act->id_foro}}</td>
	  <td>{{$act->id_clas}}</td>
        </tr>
    @endforeach
</tbody>
</table>
</article>
</body>
</htm>