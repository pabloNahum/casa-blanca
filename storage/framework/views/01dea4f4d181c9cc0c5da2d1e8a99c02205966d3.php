<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/pagina/css/main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php $__env->startSection('header'); ?>

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
				<article>
					<img src="images/slide02.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Lorem ipsum dolor sit amet nullam feugiat</p>
							<h2>Magna etiam</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide03.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Sed cursus aliuam veroeros lorem ipsum nullam</p>
							<h2>Tempus dolor</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide04.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Adipiscing lorem ipsum feugiat sed phasellus consequat</p>
							<h2>Etiam feugiat</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide05.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Ipsum dolor sed magna veroeros lorem ipsum</p>
							<h2>Lorem adipiscing</h2>
						</header>
					</div>
				</article>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">

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

					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>El teatro es la poseía que se levanta del libro y se hace humana. Y al hacerser humana, habla y grita, llora y se desespera.</p>
						<h2>Federíco García Lorca</h2>
					</header>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style2">
				<div class="inner">
					<header class="align-center">
						<p class="special">Venimos a conquistar Toluca</p>
						<h2>Próximamente</h2>
					</header>
					<div class="gallery">
						<div>
							<div class="image fit">
								<a href="#"><img src="images/pic01.jpg" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="images/pic02.jpg" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="images/pic03.jpg" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="images/pic04.jpg" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</section>
        <?php $__env->startSection('footer'); ?>
</body>
</html>
<?php echo $__env->make('sitio.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>