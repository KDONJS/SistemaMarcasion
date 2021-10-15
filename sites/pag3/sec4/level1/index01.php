<?php
session_start();


include '../../../../connection/inactive.php';

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
	<title>Zeus</title>
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
			   &nbsp;
			</div>
			<figure class="full-width" style="height: 77px;">
				<div class="navLateral-body-cl">
					<img src="/tools/img/logo.jpg" alt="Avatar" style="width: 270px; height: 70px;" class="img-responsive">  
				</div>
				
			</figure>
	
			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">


					<li class="full-width">
						<a href="/sites/pag3/sec4/level1/index.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-mail-reply-all c"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet b">
								<strong>ATRÁS</strong>
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-arrow-right c"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet b">
								<strong>01) Ingreso a BMC Remedy</strong>
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="index02.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-arrow-right c"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet b">
								02) Estado Aplicación
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="index03.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-arrow-right c"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet b">
								03) Asignación de RLM
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					




					
					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-arrow-right c"></i>
							</div>
							<div class="navLateral-body-cr">
							04) Iniciar Pase a Producción
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="admin.html" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-arrows"></i>
									</div>
									<div class="navLateral-body-cr">
										ESTRUCTURAL
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="client.html" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-arrows"></i>
									</div>
									<div class="navLateral-body-cr">
										ORIENTADA A OBJETOS
									</div>
								</a>
							</li>
							
						</ul>
					</li>
					<li class="full-width divider-menu-h"></li>


					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-arrow-right c"></i>
							</div>
							<div class="navLateral-body-cr">
							05) Revisión de Reversión
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="admin.html" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-arrows"></i>
									</div>
									<div class="navLateral-body-cr">
										ESTRUCTURAL
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="client.html" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-arrows"></i>
									</div>
									<div class="navLateral-body-cr">
										ORIENTADA A OBJETOS
									</div>
								</a>
							</li>
							
						</ul>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-arrow-right c"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet b">
								06) Crear Actividad
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-arrow-right c"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet b">
								07) Asignarse Actividad
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-arrow-right c"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet b">
								08) Revisar derivaciones en MIS
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					




					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-arrow-right c"></i>
							</div>
							<div class="navLateral-body-cr">
							09) Crear Tareas
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="admin.html" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-arrows"></i>
									</div>
									<div class="navLateral-body-cr">
										ESTRUCTURAL
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="client.html" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-arrows"></i>
									</div>
									<div class="navLateral-body-cr">
										ORIENTADA A OBJETOS
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="client.html" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-arrows"></i>
									</div>
									<div class="navLateral-body-cr">
										ORIENTADA A OBJETOS
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="client.html" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-arrows"></i>
									</div>
									<div class="navLateral-body-cr">
										ORIENTADA A OBJETOS
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="client.html" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-arrows"></i>
									</div>
									<div class="navLateral-body-cr">
										ORIENTADA A OBJETOS
									</div>
								</a>
							</li>
							
						</ul>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-arrow-right c"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet b">
								10) Editar Notas en tareas
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-arrow-right c"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet b">
								11) Colocar Fechas de Atención
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-arrow-right c"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet b">
								12) Devolver RLM
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-arrow-right c"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet b">
								13) Cambiar a Cierre
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>






					


				</ul>
				
				
					


			</nav> 
		</div>
	</section>
	<!-- pageContent -->
	<section class="full-width pageContent">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/design/index.php">Inicio</a></li>
					<li class="breadcrumb-item"><a href="/sites/pag3/index.php?pag=3">Pool de Pases</a></li>
					<li class="breadcrumb-item"><a href="/sites/pag3/sec4/index.php?pag1=3&pag2=4">Gestión de Pases</a></li>
					<li class="breadcrumb-item active" aria-current="page">Pase a Producción - Remedy</li>
				</ol>
			</nav>
	
		<section class="full-width text-center" style="padding: 40px 0;">
			<h3 class="text-center tittles">01) Ingresar a BMC Remedy:</h3>

			<p class="text-condensedLight">
					
					 <a href="index02.php"> <b> Siguiente</b></a>
				   </p>
			
			
				   <p class="text-condensedLight">
					
					Enviamos el correo de inicio de pase a producción con el siguiente asunto
					[INICIO] PASE A PRODUCCION - [AGIL] - [APLICACION] - RLM0000000xxxxx - TA000xxxxxx.
					</p>


		<textarea id="textarea" rows="7" cols="100" style="background-color:  #434249;color: #a2a2a5;font-family: Calibri;font-size: 11pt; ">

		Asunto : [INICIO] PASE A PRODUCCION - AGIL - XXXX - RLM0000000xxxxx - TA000xxxxxx

		Buenos Días:
 
		Se da inicio al Pase a Producción.


		Buenas Tardes:
		
		Se da inicio al Pase a Producción.


		Buenas Noches:
		
		Se da inicio al Pase a Producción.

		</textarea><br/><br>	


			
				<p class="text-condensedLight">
					
				Ingresar al BMC Remedy <a href="https://remedy9mdpro.lima.bcp.com.pe:8443/arsys/forms/remedy9sgpro.lima.bcp.com.pe/SHR%3ALandingConsole/Default+Administrator+View/?cacheid=fa86d6ff" target="_blank"> <b> Aqui </b></a>
				realizar la busqueda en el lado superior derecho del <b> #RLM0000000xxxxx </b> .
				</p>
			
				<div class="slider-holder">
					<span id="slider-image-1"></span>
					<div class="image-holder">
						<img src="/tools/img/seccion/1.-Ima1.jpg" class="slider-image" class="img-responsive" />
					</div>
				</div>
				
				<p class="text-condensedLight">
					
				Nos mostrara una ventana emergente donde deberas seleccionar con doble clic el  <b> #RLM0000000xxxxx </b>.
				</p>

				<div class="slider-holder">
					<span id="slider-image-1"></span>
					<div class="image-holder">
						<img src="/tools/img/seccion/1.-Ima2.jpg" class="slider-image" class="img-responsive" />
					</div>
				</div>
				<p class="text-condensedLight">
					
				 <a href="index02.php"> <b> Siguiente</b></a>
				</p>

		
			<!-- Tiles 
			<article class="full-width tile">
				<div class="tile-text">
				<a href="1.-Estadisticos/test/1.-Contrato.php">	<span class="text-condensedLight">
					<strong>Estadísticos</strong>	<br>
						<small></small>
					</span></a>
				</div>
				<a href="1.-Estadisticos/test/1.-Contrato.php"><i class="zmdi zmdi-chart tile-icon"></i></a>
			</article>
				-->
			<!-- Tiles 
			<article class="full-width tile">
				<div class="tile-text">
				<a href="1.-Estadisticos/test/1.-Contrato.php">	<span class="text-condensedLight">
					<strong>Gráficas</strong>	<br>
						<small></small>
					</span></a>
				</div>
				<a href="1.-Estadisticos/test/1.-Contrato.php"><i class="zmdi zmdi-chart tile-icon"></i></a>
			</article>
			-->
		</section>
		
	</section>
</body>
</html>

<?php
}else{
	echo '<script> window.location="../../../../index.php"; </script>';
}
?>
