<?php
session_start();
include '../../../3.-Conexiones/1.-Servidor.php';

if(isset($_SESSION['user'])) {?>

<!-- 
* Copyright 2018 Luis De Tomas
-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Planeamiento y Control</title>
	<link rel="stylesheet" href="/2.-Lenguajes/1.-css/normalize.css">
	<link rel="stylesheet" href="/2.-Lenguajes/1.-css/sweetalert2.css">
	<link rel="stylesheet" href="/2.-Lenguajes/1.-css/material.min.css">
	<link rel="stylesheet" href="/2.-Lenguajes/1.-css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="/2.-Lenguajes/1.-css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="/2.-Lenguajes/1.-css/pagina1/main.css">
	
	<script>window.jQuery || document.write('<script src="/2.-Lenguajes/2.-js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="/2.-Lenguajes/2.-js/material.min.js" ></script>
	<script src="/2.-Lenguajes/2.-js/sweetalert2.min.js" ></script>
	<script src="/2.-Lenguajes/2.-js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="/2.-Lenguajes/2.-js/main.js" ></script>

	<link rel="icon" type="image/png" href="/1.-Herramientas/1.-Imagenes/icono-logo.png" />


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
					<li class="text-condensedLight noLink" ><small>Función : <?php echo $_SESSION['Funcion'];  ?></small></li>	
					<li class="btn-Notification" id="notifications">
					<a  href="/4.-Diseño/3.-Perfil.php" style='text-decoration:none;color:white;' " > 	<i class="zmdi zmdi-face"></i></a>
						<!-- <i class="zmdi zmdi-notifications-active btn-Notification" id="notifications"></i> -->
						<div class="mdl-tooltip" for="notifications">Perfil</div>
					</li>
					<li class="btn-exit" id="btn-exit">
						<i class="zmdi zmdi-power"></i>
						<div class="mdl-tooltip" for="btn-exit">Salir</div>
					</li>

					<li class="noLink">
						<figure>
							<img src="/1.-Herramientas/1.-Imagenes/logoesquina.png" alt="Avatar" class="img-responsive">
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
				Planeamiento y Control
			</div>
			<figure class="full-width" style="height: 77px;">
				<div class="navLateral-body-cl">s
					<img src="/1.-Herramientas/1.-Imagenes/logo.jpg" alt="Avatar" style="width: 270px; height: 70px;" class="img-responsive">  
				</div>
				
			</figure>
	
			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">
					<li class="full-width">
						<a href="/5.-Paginas/pagina1/p1/index.php?pag1=1&pag2=1" class="full-width">
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
		<section class="full-width text-center" style="padding: 40px 0;">
			<h3 class="text-center tittles"></h3>

			</br></br>
			<!-- Tiles -->
			<article class="full-width tile">
				<div class="tile-text">
				<a href="#">	<span class="text-condensedLight">
					<strong>Tabla de K'PIS</strong>	<br>
						<small></small>
					</span></a>
				</div>
				<a href="#"><i class="zmdi zmdi-chart tile-icon"></i></a>
			</article>

			<!-- Tiles -->
			<article class="full-width tile">
				<div class="tile-text">
				<a href="#">	<span class="text-condensedLight">
					<strong>Gráficas</strong>	<br>
						<small></small>
					</span></a>
				</div>
				<a href="#"><i class="zmdi zmdi-chart tile-icon"></i></a>
			</article>
		</section>
		
	</section>
</body>
</html>

<?php
}else{
	echo '<script> window.location="../../../index.php"; </script>';
}
?>
