<?php
session_start();


include '../../../../connection/inactive.php';

if(isset($_SESSION['user'])) {






	?>

<!-- 
* Copyright 2020 Luis De Tomas
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
						<a href="index01.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-arrow-right c"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet b">
								01) Ingreso a BMC Remedy
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
						<a href="#!" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-arrow-right c"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet b">
							<strong>03) Asignación de RLM</strong>
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
			<h3 class="text-center tittles">03) Cambios de Estado Remedy (Asignado/En curso/Terminado)</h3>

				
					<p class="text-condensedLight">
					
					<a href="index02.php"> <b> Atras</b></a> / <a href="index04.php"> <b> Siguiente</b></a>
				   </p>
			
			
				<p class="text-condensedLight">
					
				En caso sea necesario realizar los pasos <b>(1)</b> asignación y <b>(2)</b> en curso del RLM para el inicio de gestion 
				</p>
			
				<p class="text-condensedLight">


					<section style="padding-left: 70px;padding-right: 70px;">

				
					

					<table class="table">
						<thead>
							<tr>
							<th scope="col" style="background: #dde1ed;">#</th>
							<th scope="col" style="background: #dde1ed;">Estado</th>
							<th scope="col" style="background: #dde1ed;">Descripción</th>
							<th scope="col" style="background: #dde1ed;">Acción</th>						
							</tr>
						</thead>
						<tbody>
							<tr>
							<th scope="row">1</th>
							<td> <a href="#Asignado"> Asignado</a></td>
							<td>Estado "Asignado" utlizado antes de iniciar la atención de un RLM</td>
							<td>Debes Asignarte el RLM al Grupo correcto y buscarte en los </td>							
							</tr>
							<tr>
							<th scope="row">2</th>
							<td> <a href="#En_curso">En curso</a> </td>
							<td>Estado "En curso" es el periodo de la atención del RLM</td>
							<td>Debes seleccionar la opción En curso una vez ya este Asignado el RLM </td>							
							</tr>
							<tr>
							<th scope="row">3</th>
							<td> <a href="#Terminado"> Terminado </a> </td>
							<td>Estado "Terminado" utilizamos este estado al culminar la atención</td>	
							<td>Debes seleccionar la opción "Terminada-Con Exito"una vez esten cerradas las tareas y cierre el RLM </td>						
							</tr>
						</tbody>
					</table>

					</section>

					<br>
					<hr size="2px" color="black" />
					<br>
				<p>
					
				<strong> <a name="Asignado"> Estado - Asignado:</a> </strong> En caso no se encuentre asignado el RLM te realizas la asignación 
				se la siguiente manera:
				</p>
				<br>
			
				<div class="slider-holder">
					<span id="slider-image-1"></span>
					<div class="image-holder">
						<img src="/tools/img/seccion/3.-Ima1.jpg" class="slider-image" class="img-responsive" />
					</div>
				</div>
				
				<br>
				<hr size="2px" color="black" />
				<br>
				<p>
				*** Luego de seleccionar el grupo correspondiente ubicas tu nombre y realizas la selección:
				</p>
				<br>

				<div class="slider-holder">
					<span id="slider-image-1"></span>
					<div class="image-holder">
						<img src="/tools/img/seccion/3.-Ima2.jpg" class="slider-image" class="img-responsive" />
					</div>
				</div>

				
				<br>
				<hr size="2px" color="black" />
				<br>
				<p>
				*** Luego de seleccionar Asignado y posterior a ello guardar:
				</p>
				<br>


				<div class="slider-holder">
					<span id="slider-image-1"></span>
					<div class="image-holder">
						<img src="/tools/img/seccion/3.-Ima3.jpg" class="slider-image" class="img-responsive" />
					</div>
				</div>

			

				<br>
				<hr size="2px" color="black" />
				<br>

				<p>
					
				<strong> <a name="En_curso">Estado - En curso:</a> </strong> Posterior a la asignación se realiza el cambio a estado En curso:
				</p>
				<br>


				<div class="slider-holder">
					<span id="slider-image-1"></span>
					<div class="image-holder">
						<img src="/tools/img/seccion/3.-Ima4.jpg" class="slider-image" class="img-responsive" />
					</div>
				</div>

				<br>
				<br>

				<p class="text-condensedLight">
					
					Despues de realizar la asignación y colocar en curso continua con el <b> <a href="index04.php">Siguiente</a> </b> paso.
				</p>

				<br>
				<hr size="2px" color="black" />
				<br>

				<p>
					
				<strong> <a name="Terminado">Estado - Terminado:</a> </strong> Solo procedemos a cerrar el RML si ya culminamos de atender todas las tareas.
				</p>
				<br>


				<div class="slider-holder">
					<span id="slider-image-1"></span>
					<div class="image-holder">
						<img src="/tools/img/seccion/3.-Ima5.jpg" class="slider-image" class="img-responsive" />
					</div>
				</div>


				<br>

					<p class="text-condensedLight">
					
					<b>Siguiente</b>.
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
