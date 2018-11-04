@extends('sistema.master')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta hrtp-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulta Horarios | Casa Blanca</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
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
                                    <h1>Lista de Horarios</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td>Clave</td>
                                                <td>horario</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($horario as $hr)
                                            <tr>
                                                <td>{{$hr->idh}}</td>
                                                <td>{{$hr->horario}}</td>
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
    @stop()
<!-- Static table end -->
	</body>
</html>