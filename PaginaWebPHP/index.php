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
			</div>
			<?php include_once('includes/asidebar.php');?>
		</div>	
		<div class="row">
			<?php include('includes/footer.php');?>		
		</div>	
	</div>
	<script src="js/bootstrap.3.4.js"></script>
	<script src="js/jquery.3.4.js"></script>
</body>
</html>
<script>
	$("#musica").click(function(){
		window.location.href="musica.php";
	});
	$("#tecnologia").click(function(){
		window.location.hred="tecnologia.php";
	});
	$("#peliculas").click(function(){
		window.location.hred="peliculas.php";
	});
	$("#cultura").click(function(){
		window.location.hred="cultura.php";
	});
</script>