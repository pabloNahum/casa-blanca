<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/main.css" />
    <script src="main.js"></script>
</head>
<body>
@yield('menu')
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

</body>
</html>