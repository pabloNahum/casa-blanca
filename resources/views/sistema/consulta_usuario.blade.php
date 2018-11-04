@extends ('sistema.master')
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
 @section('tablas')
<!-- Static Table Start -->
<div class="static-table-area" align="center">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Lista de Actores</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table End -->
@stop
    </body>
</html>
