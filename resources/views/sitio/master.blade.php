<!DOCTYPE HTML>
<html>
	<head>
		<title>Casa Blanca | Teatro</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{ asset('assets/pagina/css/main.css') }}" />
		<meta name="description" content="La manera de vivir el Teatro de una manera diferente siendo tú parte de la historia."/>
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/sistema/img/favicon.png') }}"/>
	</head>
	<body>
	@yield('content')
		<!-- Header -->
		<header id="header" class="alt">
				<div class="logo"><a href="{{ url('/cuenta')}}" class="icon fa-user"><span class="label"></span> Accede a tu cuenta</a></div>
				<a href="#menu">Menu</a>
			</header>
		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="{{ url('/') }}">Inicio</a></li>
					<li><a href="{{ url('/cartelera') }}">Cartelera</a></li>
					<li><a href="{{ url('/boletos') }}">Boletos</a></li>
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                    <li><a href="{{ url('/contacto') }}">Contacto</a></li>
				</ul>
			</nav>
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/casablancateatro/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="mailto:" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Casa Blanca Teatro | Derechos Revervados.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="{{ asset('assets/pagina/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/pagina/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('assets/pagina/js/skel.min.js') }}"></script>
			<script src="{{ asset('assets/pagina/js/util.js') }}"></script>
			<script src="{{ asset('assets/pagina/js/main.js') }}"></script>

	</body>
</html>