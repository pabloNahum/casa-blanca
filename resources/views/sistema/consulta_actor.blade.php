@extends('sistema.master')
<!DOCTYPE html>
<html>
<head>
    <title>Consulta Actor | Casa Blanca</title>
</head>
@section('master')
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
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <th>Foto</th>
                                            <th>Nombre</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Obra</th>
                                        </thead>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
</body>
@stop
</html>