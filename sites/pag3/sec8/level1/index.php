<?php
session_start();


include '../../../../connection/server.php';

if(isset($_SESSION['user'])) {






	?>

<!-- 
* Copyright 2018 Luis De Tomas
-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Planeamiento y Control</title>
	<link rel="stylesheet" href="/lib/css/normalize.css">
	<link rel="stylesheet" href="/lib/css/sweetalert2.css">
	<link rel="stylesheet" href="/lib/css/material.min.css">
	<link rel="stylesheet" href="/lib/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="/lib/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="/lib/css/main.css">

	<link rel="stylesheet" href="/lib/css/bootstrap.min.css">
	
	<script>window.jQuery || document.write('<script src="/lib/js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="/lib/js/material.min.js" ></script>
	<script src="/lib/js/sweetalert2.min.js" ></script>
	<script src="/lib/js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="/lib/js/main.js" ></script>

	<link rel="icon" type="image/png" href="/tools/img/icono-logo.png" />


</head>
<body>
	
	<!-- navBar -->
	<div class="full-width navBar">
		<div class="full-width navBar-options">
			<i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>	
			<div class="mdl-tooltip" for="btn-menu">Menu</div>
			<nav class="navBar-options-list">
				<ul class="list-unstyle">
					<li class="text-condensedLight noLink" ><small>Bienvenido : <?php echo $_SESSION['Nombres']." ".$_SESSION['Apaterno']." ".$_SESSION['Amaterno'];  ?></small></li>
					<li class="text-condensedLight noLink" ><small>Cargo : <?php echo $_SESSION['cargo'];  ?></small></li>
					<li class="text-condensedLight noLink" ><small>Función : <?php echo $_SESSION['funcion'];  ?></small></li>
					<li class="btn-Notification" id="notifications">
					<a  href="/design/profile.php" style='text-decoration:none;color:white;' " > 	<i class="zmdi zmdi-face"></i></a>
						<!-- <i class="zmdi zmdi-notifications-active btn-Notification" id="notifications"></i> -->
						<div class="mdl-tooltip" for="notifications">Perfil</div>
					</li>
					<li class="btn-exit" id="btn-exit">
						<i class="zmdi zmdi-power"></i>
						<div class="mdl-tooltip" for="btn-exit">Salir</div>
					</li>

					<li class="noLink">
						<figure>
							<img src="/tools/img/a.jpg" alt="Avatar" class="img-responsive">
						</figure>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- navLateral -->
	<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			<div class="full-width navLateral-body-logo text-center tittles a ">
			&nbsp
			</div>
			<figure class="full-width" style="height: 77px;">
				<div class="navLateral-body-cl">
					<img src="/tools/img/ima.jpg" alt="Avatar" style="width: 270px; height: 70px;" class="img-responsive">  
				</div>
				
			</figure>
	
			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">
					<li class="full-width">
						<a href="/sites/pag3/sec8/index.php?pag1=3&pag2=8" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-mail-reply-all c"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet b">
								<strong>ATRÁS</strong>
							</div>
						</a>
					</li>


				</ul>
			</nav> 
		</div>
	</section>
	<!-- pageContent -->
	<section class="full-width pageContent">

			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="../../design/indexluis.php">Inicio</a></li>
					<li class="breadcrumb-item"><a href="/sites/pag3/index.php?pag=3">Pool de Pases</a></li>
					<li class="breadcrumb-item"><a href="/sites/pag3/sec8/index.php?pag1=3&pag2=8">Programación de Pases</a></li>
					<li class="breadcrumb-item active" aria-current="page">Disponibilidad</li>
				</ol>
			</nav>

		<section class="full-width text-center" style="padding: 40px 0;">
			<h3 class="text-center tittles"></h3>

			</br></br>
			<!-- Tiles -->
			<article class="full-width tile">
				<div class="tile-text">
				<a href="1.-Estadisticos/test/1.-Contrato.php">	<span class="text-condensedLight">
					<strong>Malla Horaria</strong>	<br>
						<small></small>
					</span></a>
				</div>
				<a href="1.-Estadisticos/test/1.-Contrato.php"><i class="zmdi zmdi-calendar-alt tile-icon"></i></a>
			</article>

			 
			<article class="full-width tile">
				<div class="tile-text">
				<a href="#">	<span class="text-condensedLight">
					<strong>Horario Semanal</strong>	<br>
						<small></small>
					</span></a>
				</div>
				<a href="#"><i class="zmdi zmdi-calendar-note tile-icon"></i></a>
			</article>

			
	
		
		</section>
		
	</section>
</body>
</html>

<?php
}else{
	echo '<script> window.location="../../../../index.php"; </script>';
}
?>
