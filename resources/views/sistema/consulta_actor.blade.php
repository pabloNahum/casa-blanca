@extends('sistema.master')
<!DOCTYPE html>
<html>
<head>
    <title>Consulta Actor | Casa Blanca</title>
</head>
<body>
@section('tablas')
<!-- Search Bar start -->
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list single-page-breadcome">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    <form role="search" class="sr-input-func">
                                        <input type="text" placeholder="Buscar..." class="search-int form-control">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Inicio</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Consultar Actores</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>
<!-- Search bar end -->
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
                                                <th>ID</th>
                                                <th>Foto</th>
                                                <th>Nombre</th>
                                                <th>Apellido Paterno</th>
                                                <th>Apellido Materno</th>
                                                <th>Obra</th>
                                                <th>Acciones</th>
                                            </tr>
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
    </div>
</div>
<!-- Static table end -->
@stop
</body>
</html>