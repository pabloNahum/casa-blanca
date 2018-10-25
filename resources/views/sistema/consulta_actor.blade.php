<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulta Actor | Casa Blanca</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<table border="1">
    <tr><td>Clave</td>
         <td>Foto</td>
         <td>Nombre</td>
         <td>Apellido Paterno</td>
         <td>Apellido Materno</td>
         <td>Obra</td>
    </tr>
   @foreach($actores as $act)
   <tr>
      <td>{{$act->ida}}</td>
      <td><img src="{{asset('archivos/' .$act->archivo)}}" height=50 width=50></td>
      <td>{{$act->nombre}}</td>
      <td>{{$act->ap}}</td>
      <td>{{$act->am}}</td>
      <td>{{$act->id_obra}}</td>
        </tr>
    @endforeach

</table>
</body>
</html>