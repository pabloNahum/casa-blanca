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
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Tabla <span class="table-project-n">De</span> Actores</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Exportación Básica</option>
											<option value="all">Exportar Todo</option>
											<option value="selected">Exportar Selección</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar"><thead>
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
        <!-- Static Table End -->
    </body>
</html>
