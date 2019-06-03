<?php include('functions/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagina Web</title>
	<link rel="stylesheet" href="css/bootstrap.3.4.css">
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<?php require_once('includes/header.php');?>
		</div>
		<div class="row">
			<?php include_once('includes/navbar.php');?>
			<div class="col-md-7">
				<div class="index">	
					<div class="row">
						<div class="col-md-3">
							<img class="img-circle" width="111" height="105" src="http://lorempixel.com/1000/400" class="img-responsive" alt="">
						</div>
						<div class="col-md-9">
							<a href="musica.php"><p>Música</p></a>
							<p class="date"><?php print fecha(); ?></p>
								<hr class="break-line">
							<h3>Cajares ‘el abogado de la<br> salsa’</h3>
							<p>Por: John Alexander Cena</p>		
						</div>
					</div>	
					<div class="row">
						<div class="col-md-12">
							<span>Publicado en: <a class="extern" href="https://blogs.eltiempo.com/salsa-letra-clave-y-bongo">Salsa, letra, clave y bongó</a></span>
							<div class="span"> </div>
							<h4>Con el sonido típico del pacifico, este colombiano hace patria en los Estados Unidos y pone a bailar a la gente de Nueva York al ritmo de congas, piano y trompeta</h4>
							<img src="img/musica.png" alt="">
							<div class="caption">
								<a href="http://blogs.eltiempo.com/salsa-letra-clave-y-bongo/2018/12/14/cajares-abogado-la-salsa/">
									Cajares, el abogado de la salsa
								</a>
							</div>	
							<button id="musica">CONTINUAR LEYENDO</button>	
								<hr>
						</div>						
					</div>					
				</div>
				<!-- Fin musica -->
				<div class="index">	
					<div class="row">
						<div class="col-md-3">
							<img class="img-circle" width="111" height="105" src="http://lorempixel.com/1000/400" class="img-responsive" alt="">
						</div>
						<div class="col-md-9">
							<a href="tecnologia.php"><p>Tecnologia</p></a>
							<p class="date"><?php print fecha(); ?></p>
								<hr class="break-line">
							<h3>Por qué debes usar<br>ManyChat en tu<br>estrategia de ventas<br>digital</h3>
							<p>Por: John Alexander Cena</p>		
						</div>
					</div>	
					<div class="row">
						<div class="col-md-12">
							<span>Publicado en: <a class="extern" href="hhttp://blogs.eltiempo.com/asquerosamente-rico"> Asquerosamente rico</a></span>
							<div class="span"> </div>
							<h4>En el amplio universo de las redes sociales, las estrategias digitales tienen aún mucho terreno por explorar. Hay que partir del hecho de que mantener una comunicación ágil y acertada con los clientes es un importante pilar a la hora de desplegar un plan de mercadeo digital.(...)</h4>
							<img src="img/tecnologia.png" alt="">
							<div class="caption">
								<a href="http://blogs.eltiempo.com/asquerosamente-rico/2019/02/27/debes-usar-manychat-estrategia-ventas-digital/">
									a-review-of-manychat
								</a>
							</div>	
							<button id="tecnologia">CONTINUAR LEYENDO</button>	
								<hr>
						</div>						
					</div>					
				</div>	
				<!-- Fin tecnologia -->	
				<div class="index">	
					<div class="row">
						<div class="col-md-3">
							<img class="img-circle" width="111" height="105" src="http://lorempixel.com/1000/400" class="img-responsive" alt="">
						</div>
						<div class="col-md-9">
							<a href="tecnologia.php"><p>Películas</p></a>
							<p class="date"><?php print fecha(); ?></p>
								<hr class="break-line">
							<h3>Review de Alita: Battle<br> Angel</h3>
							<p>Por: John Alexander Cena</p>		
						</div>
					</div>	
					<div class="row">
						<div class="col-md-12">
							<span>Publicado en: <a class="extern" href="http://blogs.eltiempo.com/trendgeek"> TrendGeek</a></span>
							<div class="span"> </div>
							<h4>Basada en el manga Gunnm de Yukito Kishiro, la historia se desarrolla 300 años después de “la caída”, un conflicto entre la tierra y URM (United Republic of Mars) que dejo a la tierra devastada. Los últimos humanos sobrevivientes se dividieron en dos lugares: (...)</h4>
							<img src="img/peliculas.png" alt="">
							<div class="caption">
								<a href="http://blogs.eltiempo.com/trendgeek/2019/02/04/review-alita-battle-angel/">
									Imagen: TrendGeek - Review de Alita: Battle Angel
								</a>
							</div>	
							<button id="peliculas">CONTINUAR LEYENDO</button>	
								<hr>
						</div>						
					</div>					
				</div>	
				<!-- Fin peliculas -->
				<div class="index">	
					<div class="row">
						<div class="col-md-3">
							<img class="img-circle" width="111" height="105" src="http://lorempixel.com/1000/400" class="img-responsive" alt="">
						</div>
						<div class="col-md-9">
							<a href="tecnologia.php"><p>Cultura</p></a>
							<p class="date"><?php print fecha(); ?></p>
								<hr class="break-line">
							<h3>Usted y yo</h3>
							<p>Por: John Alexander Cena</p>		
						</div>
					</div>	
					<div class="row">
						<div class="col-md-12">
							<span>Publicado en: <a class="extern" href="http://blogs.eltiempo.com/maternidadresiliente"> Maternidad Resiliente</a></span>
							<div class="span"> </div>
							<h4>En las noches, cuando la cabeza es mi verdugo, trato de escrutar en la composición de la humanidad desde una óptica noble y comprensiva pero también crítica y quizá, egoísta. Leo noticias, busco varias fuentes sobre un mismo tema para no contaminarme con una sola opinión o(...)</h4>						
							<button id="cultura">CONTINUAR LEYENDO</button>	
								<hr>
						</div>						
					</div>					
				</div>	
				<!-- Fin Cultura -->							
			</div>
			<?php include_once('includes/asidebar.php');?>
		</div>			
	</div>		
<?php include('includes/footer.php');?>		
	<script src="js/bootstrap.3.4.js"></script>
	<script src="js/jquery.3.4.js"></script>
</body>
</html>
<script>
	$("#musica").click(function(){
		window.location.href="musica.php";
	});
	$("#tecnologia").click(function(){
		window.location.href="tecnologia.php";
	});
	$("#peliculas").click(function(){
		window.location.href="peliculas.php";
	});
	$("#cultura").click(function(){
		window.location.href="cultura.php";
	});
</script>