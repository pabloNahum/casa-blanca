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
        <!-- Static Table End -->
	</body>
</html>