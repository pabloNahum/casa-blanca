<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog | Casa Blanca</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
    <?php $__env->startSection('header'); ?>
            <section class="banner full">
            <article>
					<img src="images/slide01.jpg" alt="" />
					<div class="inner">
						<header>
							<p>A free responsive web site template by <a href="https://templated.co">TEMPLATED</a></p>
							<h2>Hielo</h2>
						</header>
            </section>
            <section id="three" class="wrapper style2">
				<div class="inner">
					<header class="align-center">
						<p class="special">Escucha las experiencias de quienes ya nos visitaron</p>
						<h2>Blog</h2>
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
        <section>
        
        </section>
</body>
</html>
<?php echo $__env->make('sitio.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>