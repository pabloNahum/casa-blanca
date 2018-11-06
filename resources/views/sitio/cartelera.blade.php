@extends('sitio.master')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cartelera | Casa Blanca</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />    
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/sistema/img/favicon.png') }}">
</head>
<body>
    @section('header')
    <!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/slide01.jpg" alt="" />
					<div class="inner">
						<header>
							<p>A free responsive web site template by <a href="https://templated.co">TEMPLATED</a></p>
							<h2>Hielo</h2>
						</header>
					</div>
				</article>
            </section>
			<div>
							<div class="box">
								<div class="image fit">
									<img src="images/obras/kenia.jpg" height="500px" />
								</div>
								<div class="content">
									<header class="align-center">
										<p> José Antonio Flores presenta:</p>
										<h2>Kenia, mi cielo</h2>
									</header>
									<p>Él, quería convertirse en el mejor escritor del mundo, pero quizás pedir que lo encerraran, solo, durante un año sin poder salir... No haya sido la mejor idea.</p>
									<footer class="align-center">
										<a href="#" class="button alt">Comprar Boletos</a>
									</footer>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/obras/miedo.jpg" height="500px" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>Arturo Sosa presenta:</p>
										<h2>LA OTRA CARA DEL MIEDO</h2>
									</header>
									<p> También los entes malévolos tienen sentimientos y al parecer sufren mas que nosotros ¿quieres conocer sus verdaderas historias? Acompáñanos en este recorrido por el inframundo...</p>
									<footer class="align-center">
										<a href="#" class="button alt">Comprar Boletos</a>
									</footer>
								</div>
							</div>
						</div>
						<div class="box">
								<div class="image fit">
									<img src="images/obras/llegara.jpg" height="500px" />
								</div>
								<div class="content">
									<header class="align-center">
										<p> Owen Padua presenta:</p>
										<h2>PRONTO LLEGARÁ</h2>
									</header>
									<p>Regresa a Casa Blanca Teatro la hermosa historia de dos desconocidos que se encuentran en una Prada de autobús. Ellos esperan a sus respectivas parejas pero ¿Llegarán?</p>
									<footer class="align-center">
										<a href="#" class="button alt">Comprar Boletos</a>
									</footer>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
    @section('footer')
</body>
</html>