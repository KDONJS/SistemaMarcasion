<?php
session_start();


include '../../../../connection/server.php';

if(isset($_SESSION['user'])) {






	?>

<!-- 
* Copyright 2018 Luis De Tomas
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Proyecto CDG| </title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="../../../../assets/css/transparent/app.min.css" rel="stylesheet" />


<link href="../../../../assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />

</head>
<body>

<div class="page-cover"></div>


<div id="page-loader" class="fade show">
<span class="spinner"></span>
</div>


<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">

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
<img src="../../../../assets/img/user/user-1.jpg" class="media-object" alt="" />
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
<img src="../../../../assets/img/user/user-2.jpg" class="media-object" alt="" />
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
<img src="../../../../assets/img/user/user-13.jpg" alt="" />
<span class="d-none d-md-inline">Bienvenido : <?php echo $_SESSION['Nombres']." ".$_SESSION['Apaterno']." ".$_SESSION['Amaterno'];  ?></span> <b class="caret"></b>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Cargo : <?php echo $_SESSION['cargo'];  ?></a>
<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Función : <?php echo $_SESSION['funcion'];  ?></a>
<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Perfil : <?php echo $_SESSION['nombre_perfil'];  ?></a>
<!--<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Usuario : <?php echo $_SESSION['usuario'];  ?></a>-->
<div class="dropdown-divider"></div>
<div  class="dropdown-item" > <a href="../../../../connection/logout.php" > Cerrar Seción </a></div>
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
<img src="../../../../assets/img/user/user-13.jpg" alt="" />
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
<i class="fa fa-arrow-circle-left"></i> Ir pagina anterior
</a>
</p>
</center>

<ul class="nav"><li class="nav-header">Navigation</li>
<li class="has-sub">
<a href="javascript:;">
<b class="caret"></b>
<i class="fa fa-th-large"></i>
<span>Dashboard</span>
</a>
<ul class="sub-menu">
<li><a href="index.html">Dashboard v1</a></li>
<li><a href="index_v2.html">Dashboard v2</a></li>
<li><a href="index_v3.html">Dashboard v3</a></li>
</ul>
</li>

<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>

</ul>

</div>

</div>
<div class="sidebar-bg"></div>


<div id="content" class="content">

<ol class="breadcrumb float-xl-right">
<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
<li class="breadcrumb-item"><a href="javascript:;">Page Options</a></li>
<li class="breadcrumb-item active">d3 Chart</li>
</ol>


<h1 class="page-header "><span class="fas fa-cog fa-spin"></span>&nbsp;INDICADORES <small>Bienvenido a la vista de tus indicadores diarios como semanales</small></h1>


<div class="alert alert-info">
<span class="label label-inverse m-r-5">NOTE!</span> NVD3 Chart is not supported in old browser like IE8.
</div>



<section>
<?php
$srv="DESKTOP-9FG6RED\SQLEXPRESS";
	$opc=array("Database"=>"PortalCDG", "UID"=>"PortalCDG", "PWD"=>"password","CharacterSet" => "UTF-8");
	$con=sqlsrv_connect($srv,$opc) or die(print_r(sqlsrv_errors(), true));


	$sql=
    "SELECT COUNT([Atendidas]) FROM [dbo].[z_03_99_Resumen_Diario_2];";
	

?>


<style>
#chartdiv {
  width: 100%;
  height: 500px;
}

</style>

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.PieChart);

// Add data
chart.data = [ {
  "country": "Lithuania",
  "litres":524
}, {
  "country": "Czechia",
  "litres": 301.9
}, {
  "country": "Ireland",
  "litres": 201.1
}, {
  "country": "Germany",
  "litres": 165.8
}, {
  "country": "Australia",
  "litres": 139.9
}, {
  "country": "Austria",
  "litres": 128.3
}, {
  "country": "UK",
  "litres": 300
}, {
  "country": "Belgium",
  "litres": 60
}, {
  "country": "The Netherlands",
  "litres": 50
} ];

// Add and configure Series
var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "litres";
pieSeries.dataFields.category = "country";
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeWidth = 2;
pieSeries.slices.template.strokeOpacity = 1;

// This creates initial animation
pieSeries.hiddenState.properties.opacity = 1;
pieSeries.hiddenState.properties.endAngle = -90;
pieSeries.hiddenState.properties.startAngle = -90;

}); // end am4core.ready()
</script>

<!-- HTML -->
<div id="chartdiv"></div>
</section>


<div class="theme-panel theme-panel-lg">
<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
<div class="theme-panel-content">
<h5>App Settings</h5><ul class="theme-list clearfix">
<li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="../../../../assets/css/transparent/theme/red.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-pink" data-theme="pink" data-theme-file="../../../../assets/css/transparent/theme/pink.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Pink">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="../../../../assets/css/transparent/theme/orange.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-yellow" data-theme="yellow" data-theme-file="../../../../assets/css/transparent/theme/yellow.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Yellow">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-lime" data-theme="lime" data-theme-file="../../../../assets/css/transparent/theme/lime.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Lime">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-green" data-theme="green" data-theme-file="../../../../assets/css/transparent/theme/green.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Green">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-teal" data-theme="teal" data-theme-file="../../../../assets/css/transparent/theme/teal.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Teal">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-aqua" data-theme="aqua" data-theme-file="../../../../assets/css/transparent/theme/aqua.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Aqua">&nbsp;</a></li>
<li class="active"><a href="javascript:;" class="bg-blue" data-theme="default" data-theme-file="" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="../../../../assets/css/transparent/theme/purple.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-indigo" data-theme="indigo" data-theme-file="../../../../assets/css/transparent/theme/indigo.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Indigo">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="../../../../assets/css/transparent/theme/black.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
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


<script src="../../../../assets/js/app.min.js" type="a251d6b6fbdecc041f1dc3d6-text/javascript"></script>
<script src="../../../../assets/js/theme/transparent.min.js" type="a251d6b6fbdecc041f1dc3d6-text/javascript"></script>

<script type="a251d6b6fbdecc041f1dc3d6-text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53034621-1', 'auto');
		ga('send', 'pageview');

	</script>

<script src="../../../../assets/plugins/d3/d3.min.js" type="a251d6b6fbdecc041f1dc3d6-text/javascript"></script>
<script src="../../../../assets/plugins/nvd3/build/nv.d3.min.js" type="a251d6b6fbdecc041f1dc3d6-text/javascript"></script>
<script src="../../../../assets/js/demo/chart-d3.demo.js" type="a251d6b6fbdecc041f1dc3d6-text/javascript"></script>

<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="a251d6b6fbdecc041f1dc3d6-|49" defer=""></script></body>
</html>


<?php
}else{
	echo '<script> window.location="../../../../index.php"; </script>';
}
?>
