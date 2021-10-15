<?php
session_start();
include '../../../connection/server.php';

if(isset($_SESSION['user'])) {?>

<!-- 
* Copyright 2018 Luis De Tomas
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Proyecto CDG|Dashboard </title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="../../../assets/css/transparent/app.min.css" rel="stylesheet" />


<link href="../../../assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
<link href="../../../assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
<link href="../../../assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="../../../lib/js/DataTables/datatables.min.css"/>



</head>
<body>

<div class="page-cover"></div>


<div id="page-loader" class="fade show">
<span class="spinner"></span>
</div>


<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">

<div id="header" class="header navbar-default">

<div class="navbar-header">
<a href="index.html" class="navbar-brand"><span class="fas fa-cog fa-spin"></span> &nbsp; Proyecto | <b>CDG</b></a>
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
<img src="../../../assets/img/user/user-1.jpg" class="media-object" alt="" />
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
<img src="../../../assets/img/user/user-2.jpg" class="media-object" alt="" />
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
<img src="../../../assets/img/user/user-13.jpg" alt="" />
<span class="d-none d-md-inline text-condensedLight noLink">Bienvenido : <?php echo $_SESSION['Nombres']." ".$_SESSION['Apaterno']." ".$_SESSION['Amaterno'];  ?></span> <b class="caret"></b>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Cargo : <?php echo $_SESSION['cargo'];  ?></a>
<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Función : <?php echo $_SESSION['funcion'];  ?></a>
<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Perfil : <?php echo $_SESSION['nombre_perfil'];  ?></a>
<!--<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Usuario : <?php echo $_SESSION['usuario'];  ?></a>-->
<div class="dropdown-divider"></div>
<div  class="dropdown-item" > <a href="../../../connection/logout.php" > Cerrar Seción </a></div>
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
<img src="../../../assets/img/user/user-13.jpg" alt="" />
</div>
<div class="info">
<b class="caret pull-right"></b>Sean Ngu
<small>Front end developer</small>
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
<a href="javascript:history.back(-2);" class="btn btn-success nav-header ">
<i class="fa fa-arrow-circle-left "></i> Ir pagina anterior
</a>
</p>
</center>
<ul class="nav"><li class="nav-header">Navigation</li>
<li class="has-sub active">
<a href="javascript:;">
<b class="caret"></b>
<i class="fa fa-th-large"></i>
<span>Dashboard</span>
</a>
<ul class="sub-menu"> <?php 
					$menu_inicio ="-1";
					$menu_nivel_1 =$_GET['pag1'];// pendiene obtener
					$menu_nivel_2 =$_GET['pag2'];;// pendiene obtener
					
					foreach ($_SESSION["menu"] as $key) {

						if($menu_nivel_1 != $key["id"] or $menu_nivel_2 != $key["id_nivel2"] or $key["id_nivel3"] == "")
						{
							continue;
							
						}	

						if($key["id_nivel3"]!=$menu_inicio)
							{
						?>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">

						<a href="<?php echo $key["url_nivel3"];?>" data-toggle="tooltip" title="<?php echo $key["frase"];?>" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="<?php echo $key["icono_nivel3"];  ?>"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								<strong><?php echo $key["nombre_nivel3"];  ?></strong>
							</div>
							
						</a>
						
					</li>
					<?php 	
					$menu_inicio=$key["id_nivel3"];
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
<li class="breadcrumb-item"><a href="javascript:;">Adidas</a></li>
<li class="breadcrumb-item active">Gerencia</li>
</ol>


<h1 class="page-header mb-3"><?php echo $_SESSION['Nombres']?></h1>


<div class="row">

<div class="col-xl-3 col-md-6">
<div class="widget widget-stats bg-blue">
<div class="stats-icon"><i class="fa fa-desktop"></i></div>
<div class="stats-info">
<h4>CASOS ATENDIDOS</h4>
<p>300</p>
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


<!--<div class="d-sm-flex align-items-center mb-3">
<a href="#" class="btn btn-default mr-2 text-truncate" id="daterange-filter">
<i class="fa fa-calendar fa-fw text-white-transparent-5 ml-n1"></i>
<span>1 Jun 2020 - 7 Jun 2020</span>
<b class="caret"></b>
</a>
<div class="text-muted f-w-600 mt-2 mt-sm-0">compared to <span id="daterange-prev-date">24 Mar-30 Apr 2020</span></div>
</div>-->


<div class="row">

<div class="col-xl-6">

<div class="card border-0 mb-3 overflow-hidden ">

<div class="card-body">

<div class="row">

<div class="col-xl-7 col-lg-8">

<div class="mb-3 text-grey">
<b>TOTAL SALES</b>
<span class="ml-2">
<i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Total sales" data-placement="top" data-content="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i>
</span>
</div>


<div class="d-flex mb-1">
<h2 class="mb-0">$<span data-animation="number" data-value="64559.25">0.00</span></h2>
<div class="ml-auto mt-n1 mb-n1"><div id="total-sales-sparkline"></div></div>
</div>


<div class="mb-3 text-grey">
<i class="fa fa-caret-up"></i> <span data-animation="number" data-value="33.21">0.00</span>% compare to last week
</div>

<hr class="bg-white-transparent-2" />

<div class="row text-truncate">

<div class="col-6">
<div class="f-s-12 text-grey">Total sales order</div>
<div class="f-s-18 m-b-5 f-w-600 p-b-1" data-animation="number" data-value="1568">0</div>
<div class="progress progress-xs rounded-lg bg-dark-darker m-b-5">
<div class="progress-bar progress-bar-striped rounded-right bg-teal" data-animation="width" data-value="55%" style="width: 0%"></div>
</div>
</div>


<div class="col-6">
<div class="f-s-12 text-grey">Avg. sales per order</div>
<div class="f-s-18 m-b-5 f-w-600 p-b-1">$<span data-animation="number" data-value="41.20">0.00</span></div>
<div class="progress progress-xs rounded-lg bg-dark-darker m-b-5">
<div class="progress-bar progress-bar-striped rounded-right" data-animation="width" data-value="55%" style="width: 0%"></div>
</div>
</div>

</div>

</div>


<div class="col-xl-5 col-lg-4 align-items-center d-flex justify-content-center">
<img src="../../../assets/img/svg/img-1.svg" height="150px" class="d-none d-lg-block" />
</div>

</div>

</div>

</div>

</div>


<div class="col-xl-6">

<div class="row">

<div class="col-sm-6">

<div class="card border-0 text-truncate mb-3 ">

<div class="card-body">

<div class="mb-3 text-grey">
<b class="mb-3">CONVERSION RATE</b>
<span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Conversion Rate" data-placement="top" data-content="Percentage of sessions that resulted in orders from total number of sessions." data-original-title="" title=""></i></span>
</div>


<div class="d-flex align-items-center mb-1">
<h2 class="text-white mb-0"><span data-animation="number" data-value="2.19">0.00</span>%</h2>
<div class="ml-auto">
<div id="conversion-rate-sparkline"></div>
</div>
</div>


<div class="mb-4 text-grey">
<i class="fa fa-caret-down"></i> <span data-animation="number" data-value="0.50">0.00</span>% compare to last week
</div>


<div class="d-flex mb-2">
<div class="d-flex align-items-center">
<i class="fa fa-circle text-red f-s-8 mr-2"></i>
Added to cart
</div>
<div class="d-flex align-items-center ml-auto">
<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="262">0</span>%</div>
<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="3.79">0.00</span>%</div>
</div>
</div>


<div class="d-flex mb-2">
<div class="d-flex align-items-center">
<i class="fa fa-circle text-warning f-s-8 mr-2"></i>
Reached checkout
</div>
<div class="d-flex align-items-center ml-auto">
<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="11">0</span>%</div>
<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="3.85">0.00</span>%</div>
</div>
</div>


<div class="d-flex">
<div class="d-flex align-items-center">
<i class="fa fa-circle text-lime f-s-8 mr-2"></i>
Sessions converted
</div>
<div class="d-flex align-items-center ml-auto">
<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="57">0</span>%</div>
<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="2.19">0.00</span>%</div>
</div>
</div>

</div>

</div>

</div>


<div class="col-sm-6">

<div class="card border-0 text-truncate mb-3 ">

<div class="card-body">

<div class="mb-3 text-grey">
<b class="mb-3">STORE SESSIONS</b>
<span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Store Sessions" data-placement="top" data-content="Number of sessions on your online store. A session is a period of continuous activity from a visitor." data-original-title="" title=""></i></span>
</div>


<div class="d-flex align-items-center mb-1">
<h2 class="text-white mb-0"><span data-animation="number" data-value="70719">0</span></h2>
<div class="ml-auto">
<div id="store-session-sparkline"></div>
</div>
</div>


<div class="mb-4 text-grey">
<i class="fa fa-caret-up"></i> <span data-animation="number" data-value="9.5">0.00</span>% compare to last week
</div>


<div class="d-flex mb-2">
<div class="d-flex align-items-center">
<i class="fa fa-circle text-teal f-s-8 mr-2"></i>
Mobile
</div>
<div class="d-flex align-items-center ml-auto">
<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="25.7">0.00</span>%</div>
<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="53210">0</span></div>
</div>
</div>


<div class="d-flex mb-2">
<div class="d-flex align-items-center">
<i class="fa fa-circle text-blue f-s-8 mr-2"></i>
Desktop
</div>
<div class="d-flex align-items-center ml-auto">
<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="16.0">0.00</span>%</div>
<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="11959">0</span></div>
</div>
</div>


<div class="d-flex">
<div class="d-flex align-items-center">
<i class="fa fa-circle text-aqua f-s-8 mr-2"></i>
Tablet
</div>
<div class="d-flex align-items-center ml-auto">
<div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="7.9">0.00</span>%</div>
<div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="5545">0</span></div>
</div>
</div>

</div>

</div>

</div>

</div>

</div>

</div>


<!--<div class="row">

<div class="col-xl-8 col-lg-6">

<div class="card border-0 mb-3 ">
<div class="card-body">
<div class="mb-3 text-grey"><b>VISITORS ANALYTICS</b> <span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Top products with units sold" data-placement="top" data-content="Products with the most individual units sold. Includes orders from all sales channels." data-original-title="" title=""></i></span></div>
<div class="row">
<div class="col-xl-3 col-4">
<h3 class="mb-1"><span data-animation="number" data-value="127.1">0</span>K</h3>
<div>New Visitors</div>
<div class="text-grey f-s-11 text-truncate"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="25.5">0.00</span>% from previous 7 days</div>
</div>
<div class="col-xl-3 col-4">
<h3 class="mb-1"><span data-animation="number" data-value="179.9">0</span>K</h3>
<div>Returning Visitors</div>
<div class="text-grey f-s-11 text-truncate"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="5.33">0.00</span>% from previous 7 days</div>
</div>
<div class="col-xl-3 col-4">
<h3 class="mb-1"><span data-animation="number" data-value="766.8">0</span>K</h3>
<div>Total Page Views</div>
<div class="text-grey f-s-11 text-truncate"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="0.323">0.00</span>% from previous 7 days</div>
</div>
</div>
</div>
<div class="card-body p-0">
<div style="height: 269px">
<div id="visitors-line-chart" class="widget-chart-full-width nvd3-inverse-mode" style="height: 254px"></div>
</div>
</div>
</div>

</div>


<div class="col-xl-4 col-lg-6">

<div class="card border-0 mb-3 ">
<div class="card-body">
<div class="mb-2 text-grey">
<b>SESSION BY LOCATION</b>
<span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Total sales" data-placement="top" data-content="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i></span>
</div>
<div id="visitors-map" class="mb-2" style="height: 200px"></div>
<div>
<div class="d-flex align-items-center text-white mb-2">
<div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(../../../assets/img/flag/us.jpg)"></div>
<div class="d-flex w-100">
<div>United States</div>
<div class="ml-auto text-grey"><span data-animation="number" data-value="39.85">0.00</span>%</div>
</div>
</div>
<div class="d-flex align-items-center text-white mb-2">
<div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(../../../assets/img/flag/cn.jpg)"></div>
<div class="d-flex w-100">
<div>China</div>
<div class="ml-auto text-grey"><span data-animation="number" data-value="14.23">0.00</span>%</div>
</div>
</div>
<div class="d-flex align-items-center text-white mb-2">
<div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(../../../assets/img/flag/de.jpg)"></div>
<div class="d-flex w-100">
<div>Germany</div>
<div class="ml-auto text-grey"><span data-animation="number" data-value="12.83">0.00</span>%</div>
</div>
</div>
<div class="d-flex align-items-center text-white mb-2">
<div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(../../../assets/img/flag/fr.jpg)"></div>
<div class="d-flex w-100">
<div>France</div>
<div class="ml-auto text-grey"><span data-animation="number" data-value="11.14">0.00</span>%</div>
</div>
</div>
<div class="d-flex align-items-center text-white mb-0">
<div class="widget-img widget-img-xs rounded bg-inverse mr-2 width-40" style="background-image: url(../../../assets/img/flag/jp.jpg)"></div>
<div class="d-flex w-100">
<div>Japan</div>
<div class="ml-auto text-grey"><span data-animation="number" data-value="10.75">0.00</span>%</div>
</div>
</div>
</div>
</div>
</div>

</div>

</div>


<div class="row">

<div class="col-xl-4 col-lg-6">

<div class="card border-0 mb-3 ">

<div class="card-body" style="background: no-repeat bottom right; background-image: url(../../../assets/img/svg/img-4.svg); background-size: auto 60%;">

<div class="mb-3 text-grey">
<b>SALES BY SOCIAL SOURCE</b>
<span class="text-grey ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Sales by social source" data-placement="top" data-content="Total online store sales that came from a social referrer source."></i></span>
</div>


<h3 class="m-b-10">$<span data-animation="number" data-value="55547.89">0.00</span></h3>


<div class="text-grey m-b-1"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="45.76">0.00</span>% increased</div>

</div>


<div class="widget-list widget-list-rounded inverse-mode">

<a href="#" class="widget-list-item rounded-0 p-t-3">
<div class="widget-list-media icon">
<i class="fab fa-apple bg-indigo text-white"></i>
</div>
<div class="widget-list-content">
<div class="widget-list-title">Apple Store</div>
</div>
<div class="widget-list-action text-nowrap text-grey">
$<span data-animation="number" data-value="34840.17">0.00</span>
</div>
</a>


<a href="#" class="widget-list-item">
<div class="widget-list-media icon">
<i class="fab fa-facebook-f bg-blue text-white"></i>
</div>
<div class="widget-list-content">
<div class="widget-list-title">Facebook</div>
</div>
<div class="widget-list-action text-nowrap text-grey">
$<span data-animation="number" data-value="12502.67">0.00</span>
</div>
</a>


<a href="#" class="widget-list-item">
<div class="widget-list-media icon">
<i class="fab fa-twitter bg-aqua text-white"></i>
</div>
<div class="widget-list-content">
<div class="widget-list-title">Twitter</div>
</div>
<div class="widget-list-action text-nowrap text-grey">
$<span data-animation="number" data-value="4799.20">0.00</span>
</div>
</a>


<a href="#" class="widget-list-item">
<div class="widget-list-media icon">
<i class="fab fa-google bg-red text-white"></i>
</div>
<div class="widget-list-content">
<div class="widget-list-title">Google Adwords</div>
</div>
<div class="widget-list-action text-nowrap text-grey">
$<span data-animation="number" data-value="3405.85">0.00</span>
</div>
</a>


<a href="#" class="widget-list-item p-b-3">
<div class="widget-list-media icon">
<i class="fab fa-instagram bg-pink text-white"></i>
</div>
<div class="widget-list-content">
<div class="widget-list-title">Instagram</div>
</div>
<div class="widget-list-action text-nowrap text-grey">
$<span data-animation="number" data-value="0.00">0.00</span>
</div>
</a>

</div>

</div>

</div>



<div class="col-xl-4 col-lg-6">

<div class="card border-0 mb-3 ">

<div class="card-body">

<div class="mb-3 text-grey">
<b>TOP PRODUCTS BY UNITS SOLD</b>
<span class="ml-2 "><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Top products with units sold" data-placement="top" data-content="Products with the most individual units sold. Includes orders from all sales channels."></i></span>
</div>


<div class="d-flex align-items-center m-b-15">
<div class="widget-img rounded-lg m-r-10 bg-white p-3 width-30">
<div class="h-100 w-100" style="background: url(../../../assets/img/product/product-8.jpg) center no-repeat; background-size: auto 100%;"></div>
</div>
<div class="text-truncate">
<div>Apple iPhone XR (2019)</div>
<div class="text-grey">$799.00</div>
</div>
<div class="ml-auto text-center">
<div class="f-s-13"><span data-animation="number" data-value="195">0</span></div>
<div class="text-grey f-s-10">sold</div>
</div>
</div>


<div class="d-flex align-items-center m-b-15">
<div class="widget-img rounded-lg m-r-10 bg-white p-3 width-30">
<div class="h-100 w-100" style="background: url(../../../assets/img/product/product-9.jpg) center no-repeat; background-size: auto 100%;"></div>
</div>
<div class="text-truncate">
<div>Apple iPhone XS (2019)</div>
<div class="text-grey">$1,199.00</div>
</div>
<div class="ml-auto text-center">
<div class="f-s-13"><span data-animation="number" data-value="185">0</span></div>
<div class="text-grey f-s-10">sold</div>
</div>
</div>


<div class="d-flex align-items-center m-b-15">
<div class="widget-img rounded-lg m-r-10 bg-white p-3 width-30">
<div class="h-100 w-100" style="background: url(../../../assets/img/product/product-10.jpg) center no-repeat; background-size: auto 100%;"></div>
</div>
<div class="text-truncate">
<div>Apple iPhone XS Max (2019)</div>
<div class="text-grey">$3,399</div>
</div>
<div class="ml-auto text-center">
<div class="f-s-13"><span data-animation="number" data-value="129">0</span></div>
<div class="text-grey f-s-10">sold</div>
</div>
</div>


<div class="d-flex align-items-center m-b-15">
<div class="widget-img rounded-lg m-r-10 bg-white p-3 width-30">
<div class="h-100 w-100" style="background: url(../../../assets/img/product/product-11.jpg) center no-repeat; background-size: auto 100%;"></div>
</div>
<div class="text-truncate">
<div>Huawei Y5 (2019)</div>
<div class="text-grey">$99.00</div>
</div>
<div class="ml-auto text-center">
<div class="f-s-13"><span data-animation="number" data-value="96">0</span></div>
<div class="text-grey f-s-10">sold</div>
</div>
</div>


<div class="d-flex align-items-center">
<div class="widget-img rounded-lg m-r-10 bg-white p-3 width-30">
<div class="h-100 w-100" style="background: url(../../../assets/img/product/product-12.jpg) center no-repeat; background-size: auto 100%;"></div>
</div>
<div class="text-truncate">
<div>Huawei Nova 4 (2019)</div>
<div class="text-grey">$499.00</div>
</div>
<div class="ml-auto text-center">
<div class="f-s-13"><span data-animation="number" data-value="55">0</span></div>
<div class="text-grey f-s-10">sold</div>
</div>
</div>

</div>

</div>

</div>


<div class="col-xl-4 col-lg-6">

<div class="card border-0 mb-3 ">

<div class="card-body">

<div class="mb-3 text-grey">
<b>MARKETING CAMPAIGN</b>
<span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Marketing Campaign" data-placement="top" data-content="Campaign that run for getting more returning customers."></i></span>
</div> 


<div class="row align-items-center p-b-1">

<div class="col-4">
<div class="height-100 d-flex align-items-center justify-content-center">
<img src="../../../assets/img/svg/img-2.svg" class="mw-100 mh-100" />
</div>
</div>


<div class="col-8">
<div class="m-b-2 text-truncate">Email Marketing Campaign</div>
<div class="m-b-2  text-grey f-s-11">Mon 12/6 - Sun 18/6</div>
<div class="d-flex align-items-center m-b-2">
<div class="flex-grow-1">
<div class="progress progress-xs rounded-corner bg-white-transparent-1">
<div class="progress-bar progress-bar-striped bg-indigo" data-animation="width" data-value="80%" style="width: 0%"></div>
</div>
</div>
<div class="ml-2 f-s-11 width-30 text-center"><span data-animation="number" data-value="80">0</span>%</div>
</div>
<div class="text-grey f-s-11 m-b-15 text-truncate">
57.5% people click the email
</div>
<a href="#" class="btn btn-xs btn-indigo f-s-10 pl-2 pr-2">View campaign</a>
</div>

</div>

<hr class=" bg-white-transparent-2 m-t-20 m-b-20" />

<div class="row align-items-center">

<div class="col-4">
<div class="height-100 d-flex align-items-center justify-content-center">
<img src="../../../assets/img/svg/img-3.svg" class="mw-100 mh-100" />
</div>
</div>


<div class="col-8">
<div class="m-b-2 text-truncate">Facebook Marketing Campaign</div>
<div class="m-b-2  text-grey f-s-11">Sat 10/6 - Sun 18/6</div>
<div class="d-flex align-items-center m-b-2">
<div class="flex-grow-1">
<div class="progress progress-xs rounded-corner bg-white-transparent-1">
<div class="progress-bar progress-bar-striped bg-warning" data-animation="width" data-value="60%" style="width: 0%"></div>
</div>
</div>
<div class="ml-2 f-s-11 width-30 text-center"><span data-animation="number" data-value="60">0</span>%</div>
</div>
<div class="text-grey f-s-11 m-b-15 text-truncate">
+124k visitors from facebook
</div>
<a href="#" class="btn btn-xs btn-warning f-s-10 pl-2 pr-2">View campaign</a>
</div>

</div>

</div>

</div>

</div>

</div>

</div>-->



<!-- INICIO DE TABLA -->


<section>
    <div>

    <style>
        
        .ft_container table {
    border-width: 0px;
    margin: 0px;
    border-collapse: collapse;
    margin: 0;
    outline-style: none;
    font-size: 0.9em;
    background: rgba(44, 46, 47, 0.253);
    }
    
    .ft_container table tr th {
    font-weight: bold;
    }
    
    .ft_container table thead {
    -moz-user-select: none;
    -webkit-user-select: none;
    }
    .ft_container table tr th,
    .ft_container table tr td {
    border-collapse: collapse;
    padding: 0px 0px;
    word-wrap: break-word;
    border: rgba(54, 54, 54, 0.2);
    border-top-width: 0px;
    border-left-width: 0px;
    border-right-width: 0px;
    border-bottom-width: 0px;
    overflow: hidden;
    word-wrap: break-word;
    }
    
    .ft_container table tr:first-child td,
    .ft_container table tr:first-child th {
    border-top-width: 10px;
    border-color: rgba(54, 54, 54, 0.2);
    }
    .ft_container table tr td:first-child,
    .ft_container table tr th:first-child {
    border-left-width: 3px;
    border-color: rgba(54, 54, 54, 0.2);
    }
    
    .ft_container {
    overflow: auto;
    padding: 0px;
    }
    
    .ft_rel_container {
    position: relative;
    overflow: hidden;
    border-width: 0px;
    width: 100%;
    height: 100%;
    border-color:1px solid rgba(54, 54, 54, 0.2);
    }
    
    .ft_r,
    .ft_rc {
    background-image: none;
    }
    .ft_rc {
    position: absolute;
    z-index: 1005;
    }
    .ft_r,
    .ft_c {
    position: relative;
    }
    
    .ft_rwrapper,
    .ft_cwrapper {
    overflow: hidden;
    position: absolute;
    z-index: 1001;
    border-width: 0px;
    padding: 0px;
    margin: 0px;

    }
    /*.ft_rwrapper { width: 100%; padding-right: 17px; }*/
    
    .ft_scroller {
    overflow: auto;
    background-color: none;
    height: 100%;
    padding: 0px;
    margin: 0px;
    }
    
    .ft_container tbody tr.ui-widget-content,
    thead.ui-widget-header {
    background-image: none;
    }
    
    .ft_container table.sorttable thead tr th {
    cursor: pointer;
    }
    .ft_container table thead tr th.fx_sort_bg {
    background-image: url(images/bg.gif);
    background-position: right center;
    background-repeat: no-repeat;
    }
    .ft_container table thead tr th.fx_sort_asc {
    background-image: url(images/asc.gif);
    }
    .ft_container table thead tr th.fx_sort_desc {
    background-image: url(images/desc.gif);
    }
    
 

    table.dataTable tbody th,
    table.dataTable tbody td {
     }
 
    .dataTables_scroll {
      width: auto  !important;
    }


    </style>
    
    <!-- <script src="https://code.jquery.com/jquery.min.js" type="text/javascript"></script> -->
    <script src="../../../lib/js/jquery-2.1.1.min.js"></script>
    <script src="https://meetselva.github.io/fixed-table-rows-cols/js/sortable_table.js" type="text/javascript"></script>
    <script>
    
    (function ($) {
    
    $.fn.fxdHdrCol = function (o) {
        var cfg = {
            height: 0,
            width: 0,		
            fixedCols: 0,
            colModal: [],			
            tableTmpl: function () {
                return '<table />';							
            },
            sort: false
        };
        $.extend(cfg, o);
        
        return this.each (function () {
            var lc = {
                    ft_container: null,
                    ft_rel_container: null,
                    ft_wrapper: null,
                    ft_rc: null,
                    ft_r: null,
                    ft_c: null,
                    tableWidth: 0
            };
            
            var $this = $(this);
            $this.addClass('ui-widget-header');
            $this.find('tbody tr').addClass('ui-widget-content');
                                
            $this.wrap('<div class="ft_container" />');
            lc.ft_container = $this.parent().css({width: cfg.width, height: cfg.height});		
            
            var $ths = $('thead tr', $this).first().find('th');
            
            if (cfg.sort && sorttable && cfg.fixedCols == 0) {				
                $ths.addClass('fx_sort_bg');				
            }
    
            var $thFirst = $ths.first();
            var thSpace = parseInt($thFirst.css('paddingLeft'), 10) + parseInt($thFirst.css('paddingRight'), 10);
    
            /* set width and textAlign from colModal */
            var ct = 0;
            $ths.each(function (i, el) {
                var calcWidth = 0;
                for (var j = 0; j < el.colSpan; j++) {
                    calcWidth += cfg.colModal[ct].width;
                    ct++;
                }
                $(el).css({width: calcWidth, textAlign: cfg.colModal[ct-1].align});
                
                lc.tableWidth += calcWidth + thSpace + ((i == 0)?2:1);
            });
                                
            $('tbody', $this).find('tr').each(function (i, el) {
                $('td', el).each(function (i, tdel) {
                    tdel.style.textAlign = cfg.colModal[i].align;
                });
            });
            
            $this.width(lc.tableWidth);
    
            //add relative container
            $this.wrap('<div class="ft_rel_container" />');
            lc.ft_rel_container = $this.parent();
                        
            //add wrapper to base table which will have the scrollbars
            $this.wrap('<div class="ft_scroller" />');
            lc.ft_wrapper = $this.parent().css('width', cfg.width - 5);
            
            var theadTr = $('thead', $this);
            //clone the thead->tr 
            var theadTrClone = theadTr.clone();
            
            //construct fixed row (full row)
            lc.ft_rel_container
                .prepend($(cfg.tableTmpl(), {'class': 'ft_r ui-widget-header'})
                .append(theadTrClone));
    
            //an instance of fixed row
            lc.ft_r = $('.ft_r', lc.ft_rel_container);
            lc.ft_r.wrap($('<div />', {'class': 'ft_rwrapper'}));
            
            lc.ft_r.width(lc.tableWidth);
            
            if (cfg.fixedCols > 0) {
                //clone the thead again to construct the 
                theadTrClone = theadTr.clone();
                
                //calculate the actual column's count (support for colspan)					
                var r1c1ColSpan = 0;		
                for (var i = 0; i < cfg.fixedCols; i++ ) {
                    r1c1ColSpan += this.rows[0].cells[i].colSpan;			
                }					
                
                //prepare rows/cols for fixed row col section
                $('tr', theadTrClone).each(function () {
                  var tdct = 0;
                  $(this).find('th').filter(function() {
                    tdct += this.colSpan;
                    return tdct > r1c1ColSpan;
                  }).remove();
                });
                
                //add fixed row col section
                lc.ft_rel_container
                    .prepend($(cfg.tableTmpl(), {'class': 'ft_rc ui-widget-header'})
                    .append(theadTrClone));
                
                //an instance of fixed row column
                lc.ft_rc = $('.ft_rc', lc.ft_rel_container);
                
                //now clone the fixed row column and append tbody for the remaining rows
                lc.ft_c = lc.ft_rc.clone();
                lc.ft_c[0].className = 'ft_c';
                
                //append tbody
                lc.ft_c.append('<tbody />');
                
                //append row by row while just keeping the frozen cols
                var ftc_tbody = lc.ft_c.find('tbody'); 
                $.each ($this.find('tbody > tr'), function (idx, el) {
                    var tr = $(el).clone();
                    
                    tdct = 0;
                    tr.find('td').filter(function (){
                        tdct += this.colSpan;
                        return tdct > r1c1ColSpan;
                    }).remove();
                    
                    ftc_tbody.append(tr);
                });
                
                lc.ft_rc.after(lc.ft_c);
                lc.ft_c.wrap($('<div />', {'class': 'ft_cwrapper'}));
    
                var tw = 0;
                for (var i = 0; i < cfg.fixedCols; i++) {
                    tw += $(this.rows[0].cells[i]).outerWidth(true);
                }
                lc.ft_c.add(lc.ft_rc).width(tw);       
                lc.ft_c.height($this.outerHeight(true));
                    
                //set height of fixed_rc and fixed_c
                for (var i = 0; i < this.rows.length; i++) {
                    var ch = $(this.rows[i]).outerHeight();
                    var fch = $(lc.ft_c[0].rows[i]).outerHeight(true);
                    
                    ch = (ch>fch)?ch:fch;
                    
                    if (i < lc.ft_rc[0].rows.length) {
                        $(lc.ft_r[0].rows[i])
                            .add(lc.ft_rc[0].rows[i])								
                            .height(ch);
                    }
                    
                    $(lc.ft_c[0].rows[i])
                        .add(this.rows[i])
                        .height(ch);
                }
                
                lc.ft_c			
                    .parent()
                    .css({height: lc.ft_container.height() - 17})
                    .width(lc.ft_rc.outerWidth(true) + 1);
            }		
    
            lc.ft_r
                .parent()
                .css({width: lc.ft_wrapper.width()- 17});
            
            //events (scroll and resize)
            lc.ft_wrapper.scroll(function () {
                if (cfg.fixedCols > 0) { 
                    lc.ft_c.css('top', ($(this).scrollTop()*-1));
                }
                lc.ft_r.css('left', ($(this).scrollLeft()*-1));
            });
            
            /*$(window).on('resize', function () {
                lc.ft_r
                .parent()
                .css({width: lc.ft_rel_container.width()- 17});			
            });*/
            
            if (cfg.sort && sorttable && cfg.fixedCols == 0) {
                
                $('table', lc.ft_container).addClass('sorttable');
                
                sorttable.makeSortable(this);
                
                var $sortableTh = $('.fx_sort_bg', lc.ft_rel_container);
                
                $sortableTh.click (function () {
                    var $this = $(this);
                    var isAscSort = $this.hasClass('fx_sort_asc'); 
                    
                    $sortableTh.removeClass('fx_sort_asc fx_sort_desc');
                    
                    if (isAscSort) { 
                        $this.addClass('fx_sort_desc').removeClass('fx_sort_asc'); 
                    } else { 
                        $this.addClass('fx_sort_asc').removeClass('fx_sort_desc'); 
                    }
                    
                    var idx = $(this).index();
                    
                    sorttable.innerSortFunction.apply(lc.ft_wrapper.find('th').get(idx), []);
                });
            }
    
        });
    
    };	
    
    })(jQuery);
    
    </script>
    <style>
        html, body {
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            margin: 0;
            padding: 0;
            background-color: rgba(255, 255, 255, 0);
        }
        
        div.container {
            padding: 5px 15px;
            width: 1330px;
            margin: 10px auto;
        }
        
        /* .ft_container table tr th {
            background-color: rgba(255, 255, 255, 0);
        } */
    </style>
    <script>
    $(function () {
        $('#fixed_hdr1').fxdHdrCol({
            fixedCols: 2,
            width:     '100%',
            height:    400,
            colModal: [
               { width: 70, align: 'center' },
               { width: 280, align: 'left' },
               { width: 300, align: 'center' },
               { width: 120, align: 'center' },
               { width: 110, align: 'center' },
               { width: 200, align: 'center' },
               { width: 100, align: 'center' },
               { width: 100, align: 'center' },
               { width: 100, align: 'center' },
               { width: 100, align: 'center' },
               { width: 100, align: 'center' },
               { width: 100, align: 'center' },
               { width: 100, align: 'center' },
               { width: 100, align: 'center' },
               { width: 100, align: 'center' },
               { width: 100, align: 'center' },
               { width: 100, align: 'center' },
               { width: 100, align: 'center' }
            ]				
        });
        


        
        $('#fixed_hdr_test28').fxdHdrCol({
            fixedCols: 1,
            width: 700,
            height: 300,
            colModal: [
              { width: 70, align: 'center' }, 
              { width: 70, align: 'center' }, 
              { width: 70, align: 'center' }, 
              { width: 70, align: 'center' }, 
              { width: 70, align: 'center' }, 
              { width: 70, align: 'center' }, 
              { width: 70, align: 'center' }, 
              { width: 70, align: 'center' }, 
              { width: 70, align: 'center' }, 
              { width: 70, align: 'center' }, 
              { width: 70, align: 'center' }, 
              { width: 70, align: 'center' }
            ],
            sort: false
          })
    });
    </script>
    
    
    

 
  </select>

  <?php



	//Crear la conexión
	$srv="DESKTOP-9FG6RED\SQLEXPRESS";
	$opc=array("Database"=>"PortalCDG", "UID"=>"PortalCDG", "PWD"=>"password","CharacterSet" => "UTF-8");
	$con=sqlsrv_connect($srv,$opc) or die(print_r(sqlsrv_errors(), true));


  $dni = $_SESSION['usuario'];

  $sql="SELECT * 
        FROM    z_03_99_Resumen_Diario_2  
        where   fecha = '2021-03-20'
        order by fecha
  ; ";
  $res=sqlsrv_query($con,$sql);

  $icon_green = '<svg width="15" height="15" viewBox="0 0 24 24" style="fill: green;"><path d="M21.856 10.303c.086.554.144 1.118.144 1.697 0 6.075-4.925 11-11 11s-11-4.925-11-11 4.925-11 11-11c2.347 0 4.518.741 6.304 1.993l-1.422 1.457c-1.408-.913-3.082-1.45-4.882-1.45-4.962 0-9 4.038-9 9s4.038 9 9 9c4.894 0 8.879-3.928 8.99-8.795l1.866-1.902zm-.952-8.136l-9.404 9.639-3.843-3.614-3.095 3.098 6.938 6.71 12.5-12.737-3.096-3.096z"></path></svg>';
  $icon_orannge = '<svg width="15" height="15" viewBox="0 0 24 24" style="fill: orange;"><path d="M21.856 10.303c.086.554.144 1.118.144 1.697 0 6.075-4.925 11-11 11s-11-4.925-11-11 4.925-11 11-11c2.347 0 4.518.741 6.304 1.993l-1.422 1.457c-1.408-.913-3.082-1.45-4.882-1.45-4.962 0-9 4.038-9 9s4.038 9 9 9c4.894 0 8.879-3.928 8.99-8.795l1.866-1.902zm-.952-8.136l-9.404 9.639-3.843-3.614-3.095 3.098 6.938 6.71 12.5-12.737-3.096-3.096z"></path></svg>';
  $icon_red = '<svg width="15" height="15" viewBox="0 0 24 24" style="fill: red;"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.151 17.943l-4.143-4.102-4.117 4.159-1.833-1.833 4.104-4.157-4.162-4.119 1.833-1.833 4.155 4.102 4.106-4.16 1.849 1.849-4.1 4.141 4.157 4.104-1.849 1.849z"></path></svg>';

?>

<section>
<div>
<script>

angular.module('angularApp',[])
.controller('MyCtrl', function($scope, $filter) {
    $scope.maxDateStr = $filter('date')(new Date(), 'yyyy-MM-dd');
   // $scope.date = new Date();
  //$scope.date = new Date();
  $scope.date = new Date((new Date()).getFullYear(), (new Date()).getMonth(), (new Date()).getDate());
  console.log($scope.date);
  
  $scope.keypress = function(e){
    var key = e.key || e.keyCode || e.which;
    console.log(key);
    if(e.currentTarget.value.length >=5) {
      if(key >= 48 && key <= 57) {
        e.preventDefault();
        e.stoppropagation();
        
        return false;
      }   
    }
  }
  
});

</script>
<br>
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">

    <title>angular date</title>

</head>
<html ng-app="angularApp">
  <body ng-controller="MyCtrl">
     <form name="myForm" class="item"> 
        <input type="date" ng-model="date" max="{{maxDateStr}}" name="dateInput" id="dateInput">
        
        <p> <br> TABLA DE INDICADORES </p>

        <a class="btn btn-success nav-header " id="btn-ok">
        <i class="fa fa-arrow-circle-left "></i> Cargar datos
        </a>
        <br>
  </body>
  </html>
  </br>
</section>
            <table id="fixed_hdr1">
                <thead>
                    <tr>
                    <th style="background-color:#B4B3B3;">DNI</th>                   
                    <th style="background-color:#B4B3B3;">AGENTE</th> 
                    <th style="background-color:#B4B3B3;">SUPERVISOR</th>                  
                    <th style="background-color:#B4B3B3;">ATENDIDAS</th>
                    <th style="background-color:#B4B3B3;">ATENDIDAS_30</th>
                    <th style="background-color:#B4B3B3;">ABANDONADA</th>
                    <th style="background-color:#B4B3B3;">LL_SALIDA</th>
                    <th style="background-color:#B4B3B3;">AHT</th>
                    <th style="background-color:#B4B3B3;">AHT_CHAT</th>
                    <th style="background-color:#B4B3B3;">AHT_PHONE</th>
                    <th style="background-color:#B4B3B3;">AHT_EMAIL</th>
                    <th style="background-color:#B4B3B3;">AHT_FACE</th>
                    <th style="background-color:#B4B3B3;">RECONTACTO</th>
                    <th style="background-color:#B4B3B3;">PAYMENTS_LINK</th>
                    <th style="background-color:#B4B3B3;">REVENUE</th>
                    <th style="background-color:#B4B3B3;">NPS</th>
                    <th style="background-color:#B4B3B3;">CSAT</th>
                    <th style="background-color:#B4B3B3;">FCR</th>
                    
                    </tr>
                </thead>
                <tbody id="tableBody" style="background: white;">

                <?php
                $tableIcoaht='';
		if(!$res)
		{?>
		<tr>
			<td colspan="6">No hay datos para mostrar</td>
		</tr>
		<?php
		}
		else
		{
			while($row=sqlsrv_fetch_array($res))
   
			{
        
        if( $row['AHT'] < 600 ){
          $tableIcoaht =  $icon_green;
        }else if ($row['AHT'] >= 600 && $row['AHT'] < 900  ) {
          $tableIcoaht =  $icon_orannge;
        }else{
          $tableIcoaht =  $icon_red;
        };

      
        ?>

			 <?php
			}
		}
		sqlsrv_close($con);
		?>

    
	</table>

</section>



      <div class="row">    
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <div class="panel-title">Tabla Ventas</div>
            </div>
            <div class="panel-body" style="width:100% !important;" >
              <table class="display nowrap hover compact" id="tablaJson" style="width:100% !important;" >
                <thead>
                  <tr>
                    <th>DNI</th>
                    <th>AGENTE</th>
                    <th>SUPERVISOR</th>
                    <th>Atendidas</th>
                    <th>Atendidas_30</th>
                    <th>Abandonada</th>
                    <th>Llamada_Salida</th>
                    <th>AHT</th>
                    <th>AHT_CHAT</th>
                    <th>AHT_PHONE</th>
                    <th>AHT_EMAIL</th>
                    <th>AHT_MESSAGING</th>
                    <th>Recontacto</th>
                    <th>Paymentlink</th>
                    <th>Revenue</th>
                    <th>NPS</th>
                    <th>CSAT</th>
                    <th>FCR</th>
                  </tr>
                </thead>
                <tbody id="body_tablaJson" style="color: black !important; width:100% !important;">

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>



<div class="theme-panel theme-panel-lg">
<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
<div class="theme-panel-content">
<h5>App Settings</h5><ul class="theme-list clearfix">
<li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="../../../assets/css/transparent/theme/red.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-pink" data-theme="pink" data-theme-file="../../../assets/css/transparent/theme/pink.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Pink">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="../../../assets/css/transparent/theme/orange.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-yellow" data-theme="yellow" data-theme-file="../../../assets/css/transparent/theme/yellow.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Yellow">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-lime" data-theme="lime" data-theme-file="../../../assets/css/transparent/theme/lime.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Lime">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-green" data-theme="green" data-theme-file="../../../assets/css/transparent/theme/green.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Green">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-teal" data-theme="teal" data-theme-file="../../../assets/css/transparent/theme/teal.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Teal">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-aqua" data-theme="aqua" data-theme-file="../../../assets/css/transparent/theme/aqua.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Aqua">&nbsp;</a></li>
<li class="active"><a href="javascript:;" class="bg-blue" data-theme="default" data-theme-file="" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="../../../assets/css/transparent/theme/purple.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-indigo" data-theme="indigo" data-theme-file="../../../assets/css/transparent/theme/indigo.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Indigo">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="../../../assets/css/transparent/theme/black.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
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


<script src="../../../assets/js/app.min.js" type="11b9f60f56c76b5d5633b4e6-text/javascript"></script>
<script src="../../../assets/js/theme/transparent.min.js" type="11b9f60f56c76b5d5633b4e6-text/javascript"></script>

<script type="11b9f60f56c76b5d5633b4e6-text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53034621-1', 'auto');
		ga('send', 'pageview');

	</script>
 


<script src="../../../assets/plugins/d3/d3.min.js" type="11b9f60f56c76b5d5633b4e6-text/javascript"></script>
<script src="../../../assets/plugins/nvd3/build/nv.d3.min.js" type="11b9f60f56c76b5d5633b4e6-text/javascript"></script>
<script src="../../../assets/plugins/jvectormap-next/jquery-jvectormap.min.js" type="11b9f60f56c76b5d5633b4e6-text/javascript"></script>
<script src="../../../assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js" type="11b9f60f56c76b5d5633b4e6-text/javascript"></script>
<script src="../../../assets/plugins/apexcharts/dist/apexcharts.min.js" type="11b9f60f56c76b5d5633b4e6-text/javascript"></script>
<script src="../../../assets/plugins/moment/min/moment.min.js" type="11b9f60f56c76b5d5633b4e6-text/javascript"></script>
<script src="../../../assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="11b9f60f56c76b5d5633b4e6-text/javascript"></script>
<script src="../../../assets/js/demo/dashboard-v3.js" type="11b9f60f56c76b5d5633b4e6-text/javascript"></script>


<script type="text/javascript" src="../../../lib/js/DataTables/datatables.min.js"></script>


<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="11b9f60f56c76b5d5633b4e6-|49" defer=""></script></body>
</html>
<?php
}else{
	echo '<script> window.location="../../../../../../../../../index.php"; </script>';
}
?>


<script>

$(document).on('ready',function(){

  var d = new Date();
  var month = d.getMonth()+1;
  var day = d.getDate();
  var today = d.getFullYear() + '-' +  ((''+month).length<2 ? '0' : '') + month + '-' +  ((''+day).length<2 ? '0' : '') + day;
  
  let datos = { 'fecha' : today }
  $.post( "tabla.php", datos)
      .done(function( data ) 
        {
          $("#tableBody").html(data);
        }
      );
  
  function tablaJson(datos){
 		// $('#tablaJson').DataTable().fnDestroy();		 	
		$('#tablaJson').DataTable({
      // fixedHeader: true,
      scrollY:        "500px",
      scrollX:        "100%",
      scrollCollapse: true,
      // paging:         false,
      
      fixedColumns:   {
          leftColumns: 1
      },
      // responsive: true,
      dom: '   rftp  <"clear"B> ',
			buttons: [
				{
					extend: 'collection',
					text: 'Exportar',
					buttons: [
						{
                            extend: 'copyHtml5',
                            exportOptions: {
                                columns: [ 0 ]
                            }
                        },
						'excel',
						'csv',
						'pdf',
						'print'
					],
                    
				}
			],
			// "ajax" : "tablaJson.php" ,
      // "type": 'POST',
      // "data": datos,

      'ajax' : {
            'url' : 'tablaJson.php',
            'data' : datos,
            'type' : 'post'
        },

			"columns" : [
                    {"data" : "DNI"},
                    {"data" : "AGENTE"},
                    {"data" : "SUPERVISOR"},
                    {"data" : "Atendidas"},
                    {"data" : "Atendidas_30"},
                    {"data" : "Abandonada"},
                    {"data" : "Llamada_Salida"},
                    {"data" : "AHT"},
                    {"data" : "AHT_CHAT"},
                    {"data" : "AHT_PHONE"},
                    {"data" : "AHT_EMAIL"},
                    {"data" : "AHT_MESSAGING"},
                    {"data" : "Recontacto"},
                    {"data" : "Paymentlink"},
                    {"data" : "Revenue"},
                    {"data" : "NPS"},
                    {"data" : "CSAT"},
                    {"data" : "FCR"}
			],"language": {
				"url": "/formulario/public/cdn/datatable.spanish.lang"
			} 
		});	
	}



  $('#btn-ok').click(function(){
    let fechaInput = $('#dateInput').val();
    let fecha = fechaInput;
    let datos = { 'fecha' : fecha }

      $.post( "tabla.php", datos)
      .done(function( data ) 
        {
        // $("#tableBody").html('');
         $("#tableBody").html(data);
        }
      );

      $.noConflict();
      tablaJson(datos);


      
    });


});
</script>