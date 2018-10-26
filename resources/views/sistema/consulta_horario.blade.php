<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta hrtp-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulta Horario | Casa Blanca</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1> Consulta de Horarios </h1>
<table border="1">
    <tr><td>Clave</td>
         <td>horario</td>
    </tr>
   @foreach($horario as $hr)
   <tr>
      <td>{{$hr->idh}}</td>
      <td>{{$hr->horario}}</td>
    </tr>
    @endforeach

</table>
</body>
</html>