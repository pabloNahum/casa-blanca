@extends ('sistema.master')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulta Obras | Casa Blanca</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                                    <h1>Lista de Obras</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
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