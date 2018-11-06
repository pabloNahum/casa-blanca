<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sistema | Casa Blanca</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/sistema/img/favicon.png') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/sistema/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/sistema/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sistema/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sistema/css/owl.transitions.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/sistema/css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/sistema/css/normalize.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/sistema/css/meanmenu.min.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/sistema/css/main.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/sistema/css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/sistema/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/sistema/css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sistema/css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/sistema/css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sistema/css/calendar/fullcalendar.print.min.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/sistema/css/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/sistema/css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('assets/sistema/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{ url('/sistema') }}"><img class="main-logo" src="{{ asset('assets/sistema/img/logo/logo.png') }}" alt="" /></a>
                <strong><a href="{{ url('/sistema') }}"><img src="{{ asset('assets/sistema/img/logo/logosn.png') }}" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a title="Reporte" href="#" aria-expanded="false"><span class="mini-click-non">Reporte </span><i class="fa fa-chart-line"></i></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="mini-click-non">Actores </span><i class="fa fa-child"></i></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Ver Actores" href="{{ url('sistema/actores/consulta_actor') }}"><span class="mini-sub-pro">Consutar Actores</span></a></li>
                                <li><a title="Agregar Actor" href="{{ url('/sistema/actores/nuevo_actor') }}"><span class="mini-sub-pro">Nuevo Actor</span></a></li>
                                <li><a title="Modificar Actor" href="{{ url('/sistema/actores/modifica_actor') }}"><span class="mini-sub-pro">Editar Actor</span></a></li>
                                <li><a title="Borrar Actor" href="{{ url('/sistema/actores/elimina_actor') }}"><span class="mini-sub-pro">Eliminar Actor</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="mini-click-non">Obras </span><i class="fa fa-theater-masks"></i></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Ver Obras" href="{{ url('/sistema/obras/consulta_obra') }}"><span class="mini-sub-pro">Consultar Obras</span></a></li>
                                <li><a title="Agregar Obra" href="{{ url('/sistema/obras/nueva_obra') }}"><span class="mini-sub-pro">Nueva Obra</span></a></li>
                                <li><a title="Modificar Obra" href="{{ url('/sistema/obras/modifica_obra') }}"><span class="mini-sub-pro">Editar Obra</span></a></li>
                                <li><a title="Borrar Obra" href="{{ url('/sistema/obras/elimina_obra') }}"><span class="mini-sub-pro">Eliminar Obra</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="mini-click-non">Horarios </span><i class="far fa-clock"></i></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Ver Horarios" href="{{ url('/sistema/horarios/consulta_horario') }}"><span class="mini-sub-pro">Consultar Horarios</span></a></li>
                                <li><a title="Agregar Horario" href="{{ url('/sistema/horarios/nuevo_horario') }}"><span class="mini-sub-pro">Nuevo Horario</span></a></li>
                                <li><a title="Modificar Horario" href="{{ url('/sistema/horarios/modifica_horario') }}"><span class="mini-sub-pro">Editar Horario</span></a></li>
                                <li><a title="Borrar Horario" href="{{ url('/sistema/horarios/elimina_horario') }}"><span class="mini-sub-pro">Eliminar Horario</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="mini-click-non">Clientes </span><i class="fa fa-dollar-sign"></i></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Ver Clientes" href="{{ url('/sistema/clientes/consulta_cliente') }}"><span class="mini-sub-pro">Consultar Clientes</span></a></li>
                                <li><a title="Agregar Cliente" href="{{ url('/sistema/clientes/nuevo_cliente') }}"><span class="mini-sub-pro">Nuevo Cliente</span></a></li>
                                <li><a title="Modificar Cliente" href="{{ url('/sistema/clientes/modifica_cliente') }}"><span class="mini-sub-pro">Editar Cliente</span></a></li>
                                <li><a title="Borrar Cliente" href="{{ url('/sistema/clientes/elimina_cliente') }}"><span class="mini-sub-pro">Eliminar Cliente</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="mini-click-non">Usuarios</span> <i class="fa fa-user"></i></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Ver Usuarios" href="{{ url('/sistema/usuarios/consulta_usuario') }}"><span class="mini-sub-pro">Consultar Usuarios</span></a></li>
                                <li><a title="Agregar Usuario" href="{{ url('/sistema/usuarios/nuevo_usuario') }}"><span class="mini-sub-pro">Nuevo Usuario</span></a></li>
                                <li><a title="Modificar Usuario" href="{{ url('/sistema/usuarios/modifica_usuario') }}"><span class="mini-sub-pro">Editar Usuario</span></a></li>
                                <li><a title="Borrar Usuario" href="{{ url('/sistema/usuarios/elimina_usuario') }}"><span class="mini-sub-pro">Eliminar Usuario</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
        <!-- Start Welcome area -->
        <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="{{ asset('assets/sistema/img/logo/logo.png') }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="fa fa-bars"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="{{ asset('assets/sistema/img/product/pro4.jpg') }}" alt="" />
															<span class="admin-name">Admin</span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>Mi Cuenta</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Configuración</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Cerrar Sesión</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Inicio <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="#">Perfil</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Reporte</a></li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Actores <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a title="Ver Actores" href="{{ url('sistema/actores/consulta_actor') }}"><span class="mini-sub-pro">Consutar Actores</span></a></li>
												<li><a title="Agregar Actor" href="{{ url('/sistema/actores/nuevo_actor') }}"><span class="mini-sub-pro">Nuevo Actor</span></a></li>
												<li><a title="Modificar Actor" href="{{ url('/sistema/actores/modifica_actor') }}"><span class="mini-sub-pro">Editar Actor</span></a></li>
												<li><a title="Borrar Actor" href="{{ url('/sistema/actores/elimina_actor') }}"><span class="mini-sub-pro">Eliminar Actor</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Obras <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a title="Ver Obras" href="{{ url('/sistema/obras/consulta_obra') }}"><span class="mini-sub-pro">Consultar Obras</span></a></li>
												<li><a title="Agregar Obra" href="{{ url('/sistema/obras/nueva_obra') }}"><span class="mini-sub-pro">Nueva Obra</span></a></li>
												<li><a title="Modificar Obra" href="{{ url('/sistema/obras/modifica_obra') }}"><span class="mini-sub-pro">Editar Obra</span></a></li>
												<li><a title="Borrar Obra" href="{{ url('/sistema/obras/elimina_obra') }}"><span class="mini-sub-pro">Eliminar Obra</span></a></li>
                                            </ul>
                                        </li>
										<li><a data-toggle="collapse" data-target="#democrou" href="#">Horarios <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a title="Ver Horarios" href="{{ url('/sistema/horarios/consulta_horario') }}"><span class="mini-sub-pro">Consultar Horarios</span></a></li>
												<li><a title="Agregar Horario" href="{{ url('/sistema/horarios/nuevo_horario') }}"><span class="mini-sub-pro">Nuevo Horario</span></a></li>
												<li><a title="Modificar Horario" href="{{ url('/sistema/horarios/modifica_horario') }}"><span class="mini-sub-pro">Editar Horario</span></a></li>
												<li><a title="Borrar Horario" href="{{ url('/sistema/horarios/elimina_horario') }}"><span class="mini-sub-pro">Eliminar Horario</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Clientes <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
												<li><a title="Ver Clientes" href="{{ url('/sistema/clientes/consulta_cliente') }}"><span class="mini-sub-pro">Consultar Clientes</span></a></li>
												<li><a title="Agregar Cliente" href="{{ url('/sistema/clientes/nuevo_cliente') }}"><span class="mini-sub-pro">Nuevo Cliente</span></a></li>
												<li><a title="Modificar Cliente" href="{{ url('/sistema/clientes/modifica_cliente') }}"><span class="mini-sub-pro">Editar Cliente</span></a></li>
												<li><a title="Borrar Cliente" href="{{ url('/sistema/clientes/elimina_cliente') }}"><span class="mini-sub-pro">Eliminar Cliente</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Usuarios <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a title="Ver Usuarios" href="{{ url('/sistema/usuarios/consulta_usuario') }}"><span class="mini-sub-pro">Consultar Usuarios</span></a></li>
												<li><a title="Agregar Usuario" href="{{ url('/sistema/usuarios/nuevo_usuario') }}"><span class="mini-sub-pro">Nuevo Usuario</span></a></li>
												<li><a title="Modificar Usuario" href="{{ url('/sistema/usuarios/modifica_usuario') }}"><span class="mini-sub-pro">Editar Usuario</span></a></li>
												<li><a title="Borrar Usuario" href="{{ url('/sistema/usuarios/elimina_usuario') }}"><span class="mini-sub-pro">Eliminar Usuario</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
        @yield('tablas')      
            <!-- Footer Starts -->
            <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>&copy; Derechos Reservados | Casa Blanca 2018.</p></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

     <!-- jquery
		============================================ -->
        <script src="{{ asset('assets/sistema/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('assets/sistema/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('assets/sistema/js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('assets/sistema/js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('assets/sistema/js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('assets/sistema/js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset('assets/sistema/js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('assets/sistema/js/jquery.scrollUp.min.js') }}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ asset('assets/sistema/js/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/sistema/js/counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/sistema/js/counterup/counterup-active.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('assets/sistema/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/sistema/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset('assets/sistema/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/sistema/js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('assets/sistema/js/morrisjs/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/sistema/js/morrisjs/morris.js') }}"></script>
    <script src="{{ asset('assets/sistema/js/morrisjs/morris-active.js') }}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('assets/sistema/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/sistema/js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <script src="{{ asset('assets/sistema/js/sparkline/sparkline-active.js') }}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{ asset('assets/sistema/js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('assets/sistema/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/sistema/js/calendar/fullcalendar-active.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('assets/sistema/js/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('assets/sistema/js/main.js') }}"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="{{ asset('assets/sistema/js/tawk-chat.js') }}"></script>
</body>