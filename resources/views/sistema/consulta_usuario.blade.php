<html>
 <body>
      <h1> Reporte de Usuarios </h1>
<br>
<table border="1">
     <tr><td> Clave </td>
     <tr><td> Nombre </td>
     <tr><td> Apellido Paterno </td>
     <tr><td> Apellido Materno </td>
     <tr><td> Correo </td>
     <tr><td> Usuario </td>
     <tr><td> Contraseña </td>
     <tr><td> Confirmar Contraseña </td>
     
    </tr>
    @foreach($usuarios as $us)
    <tr>
         <td>{{$us->idu}}</td>
         <td>{{$us->nom_usr}}</td>
         <td>{{$us->ap_usr}}</td>
         <td>{{$us->am_usr}}</td>
         <td>{{$us->correo}}</td>
         <td>{{$us->usuario}}</td>
         <td>{{$us->pass}}</td>
         <td>{{$us->pass2}}</td>
    </tr>
    @endforeach
</table>
 </body>
</html>
