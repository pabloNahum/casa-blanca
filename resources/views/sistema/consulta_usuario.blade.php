<html>
 <body>
      <h1> Reporte de Usuarios </h1>
<br>
<table border="1">
     <tr><td> Clave </td>
     <td> Nombre </td>
     <td> Apellido Paterno </td>
     <td> Apellido Materno </td>
     <td> Correo </td>
     <td> Usuario </td>
     <td> Contraseña </td>
     <td> Confirmar Contraseña </td>
     
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
