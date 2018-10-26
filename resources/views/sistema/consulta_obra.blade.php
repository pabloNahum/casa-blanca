<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulta Obra | Casa Blanca</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1> Consulta de Obras </h1>
<table border="1">
    <tr><td>Clave</td>
         <td>cartel</td>
         <td>nombre</td>
         <td>duracion</td>
         <td>fecha</td>
         <td>descripcion</td>
		 <td>foro</td>
		 <td>clasificacion</td>
    </tr>
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

</table>
</body>
</html>