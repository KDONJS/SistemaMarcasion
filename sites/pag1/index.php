<?php
session_start();
include '../../connection/server.php';

if(isset($_SESSION['user'])) {?>

<!-- 
* Copyright 2018 Luis De Tomas
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Proyecto CDG| Adidas</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="../../assets/css/transparent/app.min.css" rel="stylesheet" />


<link href="../../assets/plugins/intro.js/minified/introjs.min.css" rel="stylesheet" />

</head>
<body>

<div class="page-cover"></div>


<div id="page-loader" class="fade show">
<span class="spinner"></span>
</div>


<div id="page-container" class="fade page-header-fixed page-sidebar-fixed">

<div id="header" class="header navbar-default">

<div class="navbar-header">
<a href="#" class="navbar-brand"><span class="fas fa-cog fa-spin"></span> &nbsp; PROYECTO|<b>CDG</b></a>
<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>

<ul class="navbar-nav navbar-right">
<li class="navbar-form">
<form action="" method="POST" name="search_form">
<div class="form-group">
<input type="text" class="form-control" placeholder="Enter keyword" />
<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
</div>
</form>
</li>
<li class="dropdown">
<a href="#" data-toggle="dropdown" class="dropdown-toggle f-s-14">
<i class="fa fa-bell"></i>
<span class="label">5</span>
</a>
<div class="dropdown-menu media-list dropdown-menu-right">
<div class="dropdown-header">ULTIMAS NOTICIAS (5)</div>
<a href="javascript:;" class="dropdown-item media">
<div class="media-left">
<i class="fa fa-bug media-object bg-silver-darker"></i>
</div>
<div class="media-body">
<h6 class="media-heading">Bienvenido a DYNAMICALL | <i class="fa fa-trophy text-danger"></i></h6>
<div class="text-muted f-s-11">hace 3 minut</div>
</div>
</a>
<a href="javascript:;" class="dropdown-item media">
<div class="media-left">
<img src="../../assets/img/user/user-1.jpg" class="media-object" alt="" />
<i class="fa fa-check-circle text-blue media-object-icon"></i>
</div>
<div class="media-body">
<h6 class="media-heading">Jose Tong</h6>
<p>Se realizo la actualización del reporte correctamente.</p>
<div class="text-muted f-s-11">hace 25 minutos</div>
</div>
</a>
<a href="javascript:;" class="dropdown-item media">
<div class="media-left">
<img src="../../assets/img/user/user-2.jpg" class="media-object" alt="" />
<i class="fa fa-check-circle text-blue media-object-icon"></i>
</div>
<div class="media-body">
<h6 class="media-heading">David Guillen</h6>
<p>Reporte de AHT elevado ya esta listo.</p>
<div class="text-muted f-s-11">hace 35 minutos</div>
</div>
</a>
<a href="javascript:;" class="dropdown-item media">
<div class="media-left">
<i class="fa fa-plus media-object bg-silver-darker"></i>
</div>
<div class="media-body">
<h6 class="media-heading">Nuevo Reporte</h6>
<div class="text-muted f-s-11">hace 1 hora</div>
</div>
</a>
<a href="javascript:;" class="dropdown-item media">
<div class="media-left">
<i class="fa fa-envelope media-object bg-silver-darker"></i>
<i class="fab fa-google text-warning media-object-icon f-s-14"></i>
</div>
<div class="media-body">
<h6 class="media-heading">Nuevo correo de Jose</h6>
<div class="text-muted f-s-11">Hace 2 horas</div>
</div>
</a>
<div class="dropdown-footer text-center">
<a href="javascript:;">Ver más</a>
</div>
</div>
</li>
<li class="dropdown navbar-user">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<img src="../../assets/img/user/user-13.jpg" alt="" />
<span class="d-none d-md-inline">Bienvenido : <?php echo $_SESSION['Nombres']." ".$_SESSION['Apaterno']." ".$_SESSION['Amaterno'];  ?></span> <b class="caret"></b>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Cargo : <?php echo $_SESSION['cargo'];  ?></a>
<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Función : <?php echo $_SESSION['funcion'];  ?></a>
<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Perfil : <?php echo $_SESSION['nombre_perfil'];  ?></a>
<!--<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Usuario : <?php echo $_SESSION['usuario'];  ?></a>-->
<div class="dropdown-divider"></div>
<div  class="dropdown-item" > <a href="../../connection/logout.php" > Cerrar Seción </a></div>
</div>
</li>
</ul>

</div>


<div id="sidebar" class="sidebar">

<div data-scrollbar="true" data-height="100%">

<ul class="nav">
<li class="nav-profile">
<a href="javascript:;" data-toggle="nav-profile">
<div class="cover with-shadow"></div>
<div class="image">
<img src="../../assets/img/user/user-13.jpg" alt="" />
</div>
<div class="info">
<b class="caret pull-right"></b><?php echo $_SESSION['Nombres']." ".$_SESSION['Apaterno']." ".$_SESSION['Amaterno'];  ?>
<small><?php echo $_SESSION['cargo'];  ?></small>
</div>
</a>
</li>
<li>
<ul class="nav nav-profile">
<li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
<li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
<li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
</ul>
</li>
</ul>
</br>
<center>
<p>
<a href="javascript:history.back(-2);" class="btn btn-success nav-header">
<i class="fa fa-arrow-circle-left"></i> Ir a pagina anterior
</a>
</p>
</center>


<ul class="nav"><li class="nav-header">Navegación</li>
<li class="has-sub  active">
<a href="javascript:;">
<b class="caret"></b>
<i class="fa fa-th-large"></i>
<span>Dashboard</span>
</a>
<ul class="sub-menu">			
					<?php 
					$menu_inicio ="-1";
					$menu_nivel_1 =$_GET['pag'];// pendiene obtener
					
					foreach ($_SESSION["menu"] as $key) {

						if($menu_nivel_1 != $key["id"] or  $key["id_nivel2"] == "" )
						{
							continue;

						}	
						if($key["id_nivel2"]!=$menu_inicio)
							{
						?>
					<li class="divider-menu-h"></li>
					<li>

						<a href="<?php echo $key["url_nivel2"]."?pag1=".$key["id"]."&pag2=".$key["id_nivel2"];?>" data-toggle="tooltip" title="<?php echo $key["frase"];?>" class="full-width btn-subMenu">
							<div class="navLateral-body-cl active ">
								<i class="<?php echo $key["icono_nivel2"];  ?>"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								<strong><?php echo $key["nombre_nivel2"];  ?></strong>
							</div>
							
						</a>
						
					</li>
					<?php 	
					$menu_inicio=$key["id_nivel2"];
					}
					} ?>
</ul>
</li>


<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>

</ul>

</div>

</div>
<div class="sidebar-bg"></div>


<div id="content" class="content">

<ol class="breadcrumb float-xl-right">
<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
<li class="breadcrumb-item active">Adidas</li>
</ol>


<h1 class="page-header"><?php echo $_SESSION['Nombres']." ".$_SESSION['Apaterno']." ".$_SESSION['Amaterno'];  ?><small>Logra tus metas</small></h1>

<div class="row">

<div class="col-xl-3 col-md-6">
<div class="widget widget-stats bg-blue">
<div class="stats-icon"><i class="fa fa-desktop"></i></div>
<div class="stats-info">
<h4>CASOS ATENDIDOS</h4>
<p>2 456</p>
</div>
<div class="stats-link">
<a href="javascript:;"> Ver detalle <i class="fa fa-arrow-alt-circle-right"></i></a>
</div>
</div>
</div>


<div class="col-xl-3 col-md-6">
<div class="widget widget-stats bg-info">
<div class="stats-icon"><i class="fa fa-link"></i></div>
<div class="stats-info">
<h4>AHT GENERAL</h4>
<p>500 Seg</p>
</div>
<div class="stats-link">
<a href="javascript:;">Ver detalle <i class="fa fa-arrow-alt-circle-right"></i></a>
</div>
</div>
</div>


<div class="col-xl-3 col-md-6">
<div class="widget widget-stats bg-orange">
<div class="stats-icon"><i class="fa fa-users"></i></div>
<div class="stats-info">
<h4>AGENTES CONECTADOS</h4>
<p>500</p>
</div>
<div class="stats-link">
<a href="javascript:;">Ver detalle <i class="fa fa-arrow-alt-circle-right"></i></a>
</div>
</div>
</div>


<div class="col-xl-3 col-md-6">
<div class="widget widget-stats bg-red">
<div class="stats-icon"><i class="fa fa-clock"></i></div>
<div class="stats-info">
<h4> NPS GENERAL</h4>
<p>80 %</p>
</div>
<div class="stats-link">
<a href="javascript:;"> Ver detalle <i class="fa fa-arrow-alt-circle-right"></i></a>
</div>
</div>
</div>
</div>

<center>
<body>
    <!-- partial:index.partial.html -->
    <link rel="stylesheet" href="./css/style.css">
    <div class="wrap">
        <div class="widget">
            <div class="fecha">
                <p id="diaSemana" class="diaSemana"></p>
                <p id="dia" class="dia"></p>
                <p>de </p>
                <p id="mes" class="mes"></p>
                <p>del </p>
                <p id="year" class="year"></p>
            </div>
            <div class="reloj">
                <span id="horas" class="horas"></span>
                <span>:</span>
                <span id="minutos" class="minutos"></span>
                <span>:</span>
                <span id="segundos" class="segundos"></span>
            </div>
        </div>
    </div>
    <!-- partial -->




	<h2>REVISA TUS CURSOS</h2>
	
    <script src="./js/script.js"></script>
</body>
</center>

<!--- DESPLEGABLE ---->
<div class="d-block d-md-flex align-items-center mb-3">



<div class="ml-auto d-none d-lg-block">
<ul class="pagination mb-0">
<a href="javascript:;" class="page-link paginate_button previous disabled">«</a>
<a href="javascript:;" class="page-link paginate_button current">1</a>
<a href="javascript:;" class="page-link paginate_button next disabled">»</a>
</ul>
</div>

</div>

<ul class="result-list">
<li>
<a href="#" class="result-image" style="background-image: url(../../assets/img/gallery/gallery-1.jpg)"></a>
<div class="result-info">
<h4 class="title"><a href="javascript:;">Manual de tranferencias a L2</a></h4>
<p class="location">Dynamicall | Adidas</p>
<p class="desc">
Este manual es de tranferencias L2 donde muestra las dieferentes casuisticas
</p>
</div>
<div class="result-price">
DESCARGAR <small>AHORA</small>
<a class="btn btn-yellow btn-block" href="./PDF/Manual_PAI_WEB.pdf"target="_blank">Ver PDF</a>
</div>
</li>
<li>
<a href="#" class="result-image" style="background-image: url(../../assets/img/gallery/gallery-1.jpg)"></a>
<div class="result-info">
<h4 class="title"><a href="javascript:;">Manual de tranferencias a L2</a></h4>
<p class="location">Dynamicall | Adidas</p>
<p class="desc">
Este manual es de tranferencias L2 donde muestra las dieferentes casuisticas
</p>
</div>
<div class="result-price">
DESCARGAR <small>AHORA</small>
<a class="btn btn-yellow btn-block" href="./PDF/Manual_PAI_WEB.pdf"target="_blank">Ver PDF</a>
</div>
</li>
<li>
<a href="#" class="result-image" style="background-image: url(../../assets/img/gallery/gallery-1.jpg)"></a>
<div class="result-info">
<h4 class="title"><a href="javascript:;">Manual de tranferencias a L2</a></h4>
<p class="location">Dynamicall | Adidas</p>
<p class="desc">
Este manual es de tranferencias L2 donde muestra las dieferentes casuisticas
</p>
</div>
<div class="result-price">
DESCARGAR <small>AHORA</small>
<a class="btn btn-yellow btn-block" href="./PDF/Manual_PAI_WEB.pdf"target="_blank">Ver PDF</a>
</div>
</li>

<li>
<a href="#" class="result-image" style="background-image: url(../../assets/img/gallery/gallery-1.jpg)"></a>
<div class="result-info">
<h4 class="title"><a href="javascript:;">Manual de tranferencias a L2</a></h4>
<p class="location">Dynamicall | Adidas</p>
<p class="desc">
Este manual es de tranferencias L2 donde muestra las dieferentes casuisticas
</p>
</div>
<div class="result-price">
DESCARGAR <small>AHORA</small>
<a class="btn btn-yellow btn-block" href="./PDF/Manual_PAI_WEB.pdf"target="_blank">Ver PDF</a>
</div>
</li>

<li>
<a href="#" class="result-image" style="background-image: url(../../assets/img/gallery/gallery-1.jpg)"></a>
<div class="result-info">
<h4 class="title"><a href="javascript:;">Manual de tranferencias a L2</a></h4>
<p class="location">Dynamicall | Adidas</p>
<p class="desc">
Este manual es de tranferencias L2 donde muestra las dieferentes casuisticas
</p>
</div>
<div class="result-price">
DESCARGAR <small>AHORA</small>
<a class="btn btn-yellow btn-block" href="./PDF/Manual_PAI_WEB.pdf"target="_blank">Ver PDF</a>
</div>
</li>

<li>
<a href="#" class="result-image" style="background-image: url(../../assets/img/gallery/gallery-1.jpg)"></a>
<div class="result-info">
<h4 class="title"><a href="javascript:;">Manual de tranferencias a L2</a></h4>
<p class="location">Dynamicall | Adidas</p>
<p class="desc">
Este manual es de tranferencias L2 donde muestra las dieferentes casuisticas
</p>
</div>
<div class="result-price">
DESCARGAR <small>AHORA</small>
<a class="btn btn-yellow btn-block" href="./PDF/Manual_PAI_WEB.pdf"target="_blank">Ver PDF</a>
</div>
</li>

<li>
<a href="#" class="result-image" style="background-image: url(../../assets/img/gallery/gallery-1.jpg)"></a>
<div class="result-info">
<h4 class="title"><a href="javascript:;">Manual de tranferencias a L2</a></h4>
<p class="location">Dynamicall | Adidas</p>
<p class="desc">
Este manual es de tranferencias L2 donde muestra las dieferentes casuisticas
</p>
</div>
<div class="result-price">
DESCARGAR <small>AHORA</small>
<a class="btn btn-yellow btn-block" href="./PDF/Manual_PAI_WEB.pdf"target="_blank">Ver PDF</a>
</div>
</li>

<li>
<a href="#" class="result-image" style="background-image: url(../../assets/img/gallery/gallery-1.jpg)"></a>
<div class="result-info">
<h4 class="title"><a href="javascript:;">Manual de tranferencias a L2</a></h4>
<p class="location">Dynamicall | Adidas</p>
<p class="desc">
Este manual es de tranferencias L2 donde muestra las dieferentes casuisticas
</p>
</div>
<div class="result-price">
DESCARGAR <small>AHORA</small>
<a class="btn btn-yellow btn-block" href="./PDF/Manual_PAI_WEB.pdf"target="_blank">Ver PDF</a>
</div>
</li>

<li>
<a href="#" class="result-image" style="background-image: url(../../assets/img/gallery/gallery-1.jpg)"></a>
<div class="result-info">
<h4 class="title"><a href="javascript:;">Manual de tranferencias a L2</a></h4>
<p class="location">Dynamicall | Adidas</p>
<p class="desc">
Este manual es de tranferencias L2 donde muestra las dieferentes casuisticas
</p>
</div>
<div class="result-price">
DESCARGAR <small>AHORA</small>
<a class="btn btn-yellow btn-block" href="./PDF/Manual_PAI_WEB.pdf"target="_blank">Ver PDF</a>
</div>
</li>

<li>
<a href="#" class="result-image" style="background-image: url(../../assets/img/gallery/gallery-1.jpg)"></a>
<div class="result-info">
<h4 class="title"><a href="javascript:;">Manual de tranferencias a L2</a></h4>
<p class="location">Dynamicall | Adidas</p>
<p class="desc">
Este manual es de tranferencias L2 donde muestra las dieferentes casuisticas
</p>
</div>
<div class="result-price">
DESCARGAR <small>AHORA</small>
<a class="btn btn-yellow btn-block" href="./PDF/Manual_PAI_WEB.pdf"target="_blank">Ver PDF</a>
</div>
</li>

<li>
<a href="#" class="result-image" style="background-image: url(../../assets/img/gallery/gallery-1.jpg)"></a>
<div class="result-info">
<h4 class="title"><a href="javascript:;">Manual de tranferencias a L2</a></h4>
<p class="location">Dynamicall | Adidas</p>
<p class="desc">
Este manual es de tranferencias L2 donde muestra las dieferentes casuisticas
</p>
</div>
<div class="result-price">
DESCARGAR <small>AHORA</small>
<a class="btn btn-yellow btn-block" href="./PDF/Manual_PAI_WEB.pdf"target="_blank">Ver PDF</a>
</div>
</li>

<li>
<a href="#" class="result-image" style="background-image: url(../../assets/img/gallery/gallery-1.jpg)"></a>
<div class="result-info">
<h4 class="title"><a href="javascript:;">Manual de tranferencias a L2</a></h4>
<p class="location">Dynamicall | Adidas</p>
<p class="desc">
Este manual es de tranferencias L2 donde muestra las dieferentes casuisticas
</p>
</div>
<div class="result-price">
DESCARGAR <small>AHORA</small>
<a class="btn btn-yellow btn-block" href="./PDF/Manual_PAI_WEB.pdf"target="_blank">Ver PDF</a>
</div>
</li>
</ul>

</div>

</div>

</div>

</div>
<!--- DESPLEGABLE ---->




<a href="javascript:;" class="btn btn-primary btn-sm" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:introJs().setOption('showBullets', false).start();" data-cf-modified-82e1de7a5cc755ff1915d53f-="">Demo</a>
</div>
</div>

</div>



<div class="theme-panel theme-panel-lg">
<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
<div class="theme-panel-content">
<h5>App Settings</h5><ul class="theme-list clearfix">
<li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="../../assets/css/transparent/theme/red.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-pink" data-theme="pink" data-theme-file="../../assets/css/transparent/theme/pink.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Pink">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="../../assets/css/transparent/theme/orange.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-yellow" data-theme="yellow" data-theme-file="../../assets/css/transparent/theme/yellow.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Yellow">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-lime" data-theme="lime" data-theme-file="../../assets/css/transparent/theme/lime.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Lime">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-green" data-theme="green" data-theme-file="../../assets/css/transparent/theme/green.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Green">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-teal" data-theme="teal" data-theme-file="../../assets/css/transparent/theme/teal.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Teal">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-aqua" data-theme="aqua" data-theme-file="../../assets/css/transparent/theme/aqua.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Aqua">&nbsp;</a></li>
<li class="active"><a href="javascript:;" class="bg-blue" data-theme="default" data-theme-file="" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="../../assets/css/transparent/theme/purple.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-indigo" data-theme="indigo" data-theme-file="../../assets/css/transparent/theme/indigo.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Indigo">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="../../assets/css/transparent/theme/black.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
</ul>
<div class="divider"></div>
<div class="row m-t-10">
<div class="col-6 control-label  f-w-600">Header Fixed</div>
<div class="col-6 d-flex">
<div class="custom-control custom-switch ml-auto">
<input type="checkbox" class="custom-control-input" name="header-fixed" id="headerFixed" value="1" checked />
<label class="custom-control-label" for="headerFixed">&nbsp;</label>
</div>
</div>
</div>
<div class="row m-t-10">
<div class="col-6 control-label  f-w-600">Sidebar Fixed</div>
<div class="col-6 d-flex">
<div class="custom-control custom-switch ml-auto">
<input type="checkbox" class="custom-control-input" name="sidebar-fixed" id="sidebarFixed" value="1" checked />
<label class="custom-control-label" for="sidebarFixed">&nbsp;</label>
</div>
</div>
</div>
<div class="row m-t-10">
<div class="col-6 control-label  f-w-600">Sidebar Grid</div>
<div class="col-6 d-flex">
<div class="custom-control custom-switch ml-auto">
<input type="checkbox" class="custom-control-input" name="sidebar-grid" id="sidebarGrid" value="1" />
<label class="custom-control-label" for="sidebarGrid">&nbsp;</label>
</div>
</div>
</div>
<div class="row m-t-10">
<div class="col-md-6 control-label  f-w-600">Sidebar Gradient</div>
<div class="col-md-6 d-flex">
<div class="custom-control custom-switch ml-auto">
<input type="checkbox" class="custom-control-input" name="sidebar-gradient" id="sidebarGradient" value="1" />
<label class="custom-control-label" for="sidebarGradient">&nbsp;</label>
</div>
</div>
</div>



<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

</div>


<script src="../../assets/js/app.min.js" type="82e1de7a5cc755ff1915d53f-text/javascript"></script>
<script src="../../assets/js/theme/transparent.min.js" type="82e1de7a5cc755ff1915d53f-text/javascript"></script>

<script type="82e1de7a5cc755ff1915d53f-text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53034621-1', 'auto');
		ga('send', 'pageview');

	</script>

<script src="../../assets/plugins/intro.js/minified/intro.min.js" type="82e1de7a5cc755ff1915d53f-text/javascript"></script>

<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="82e1de7a5cc755ff1915d53f-|49" defer=""></script></body>
</html>

<?php
}else{
	echo '<script> window.location="../../index.php"; </script>';
}
?>