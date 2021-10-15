<?php
session_start();
include '../../../connection/server.php';

// echo('<pre>');
// echo(print_r($_SESSION));
// echo('</pre>');

// echo($_SESSION['usuario']);
// exit();


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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nvd3/1.8.6/nv.d3.css">
<link href="../../../assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="../../../lib/js/dataTablesV/dataTables.min.css"/>



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
<span class="d-none d-md-inline text-condensedLight noLink">Bienvenido : <?php echo $_SESSION['Nombres']." ".$_SESSION['Apaterno'];  ?></span> <b class="caret"></b>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Cargo : <?php echo $_SESSION['cargo'];  ?></a>
<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Función : <?php echo $_SESSION['funcion'];  ?></a>
<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Perfil : <?php echo $_SESSION['nombre_perfil'];  ?></a>
<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Usuario : <?php echo $_SESSION['usuario'];  ?></a>
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
<b class="caret pull-right"></b><?php echo $_SESSION['Nombres'];  ?>
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
<p id="casosAtendidos"></p>
</div>
</div>
</div>


<div class="col-xl-3 col-md-6">
<div class="widget widget-stats bg-info">
<div class="stats-icon"><i class="fa fa-clock"></i></div>
<div class="stats-info">
<h4>AHT GENERAL</h4>
<p id="avgAht"></p>
</div>

</div>
</div>


<div class="col-xl-3 col-md-6">
<div class="widget widget-stats bg-orange">
<div class="stats-icon"><i class="fa fa-users"></i></div>
<div class="stats-info">
<h4>Recontacto</h4>
<p id="recontacto"></p>
</div>
</div>
</div>


<div class="col-xl-3 col-md-6">
<div class="widget widget-stats bg-red">
<div class="stats-icon"><i class="fa fa-bolt"></i></div>
<div class="stats-info">
<h4>Abandonadas</h4>
<p id='abandonadas'></p>
</div>
</div>
</div>
</div>
<!-- charts--->

<!-- INICIO DE TABLA -->


<section>
    <div>

 

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

    </style>
  
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


<link href="css/index.css" rel="stylesheet" />

<div class="row">

<div class="col-xl-12">

  <div class="panel panel-inverse">
    <div class="panel-heading">
    <h4 class="panel-title">Llamadas Atendidas</h4>
      <div class="panel-heading-btn">
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
          <a href="javascript:;"  class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
      </div>
  </div>
  <div class="panel-body" id="div_grafico1">
    <div class="dashboard-flex-container">
            <div
              id="averageDegreesLineChart"
              class="with-3d-shadow with-transitions averageDegreesLineChart">
              <svg></svg>
            </div>
    
    </div>
  </div>
</div>
</div>
</div>


<div class="row">

<div class="col-xl-12">

  <div class="panel panel-inverse">
    <div class="panel-heading">
    <h4 class="panel-title">AHT</h4>
      <div class="panel-heading-btn">
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
          <a href="javascript:;"  class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
      </div>
  </div>
  <div class="panel-body" id="div_grafico2">
    <div class="dashboard-flex-container">
            <div
              id="grafico2"
              class="with-3d-shadow with-transitions grafico2">
              <svg></svg>
            </div>
    
    </div>
  </div>
</div>
</div>
</div>


<div class="row">

<div class="col-xl-6">

  <div class="panel panel-inverse">
    <div class="panel-heading">
    <h4 class="panel-title">Aht</h4>
      <div class="panel-heading-btn">
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
          <a href="javascript:;"  class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
          <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
      </div>
  </div>
  <div class="panel-body" id="div_grafico3" style="height: 250px; ">
    <div class="dashboard-flex-container" style=" margin: -4.5em 20px;" >
      <div id="main" style="width: 100vh;height:500px;"></div>
    </div>
  </div>
</div>
</div>


<div class="col-xl-6">

    <div class="panel panel-inverse">
      <div class="panel-heading">
      <h4 class="panel-title">Atendidas</h4>
        <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
            <a href="javascript:;"  class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
        </div>
    </div>
    <div class="panel-body" id="div_grafico4" style="height: 250px; ">
      <div class="dashboard-flex-container" style=" margin: -4.5em 20px;" >
        <div id="mainAtendidas" style="width: 100vh;height:500px;"></div>
      </div>
    </div>
  </div>
  </div>
</div>


<br>


<head>
    <meta charset="utf-8">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">

    <title>angular date</title>

</head>

        <p> <br> TABLA DE INDICADORES </p>

        <a class="btn btn-success nav-header " id="btn-ok">
        <i class="fa fa-arrow-circle-left "></i> Cargar datos
        </a>
  </body>
  </html>

      <div class="row">    
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
            </div>
            <div class="panel-body"  style="text-align: center;">
              <table class="  nowrap hover  " id="tablaJson"  >
                <thead>
                  <tr>
                    <th style="color:#FF0000";>DNI</th>
                    <th  style="color:#FF0000";>AGENTE</th>
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
                <tbody id="body_tablaJson" style="color: black !important; ">

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


<script src="../../../lib/js/jquery-2.1.1.min.js"></script>
<script src="../../../lib/js/jquery-ui-1.10.3.min.js"></script>



<script data-cfasync="false" type="text/javascript" src="../../../lib/js/dataTablesV/dataTables.min.js" ></script>

<script data-cfasync="false" src="../../../assets/js/app.min.js" type="11b9f60f56c76b5d5633b4e6-text/javascript"></script>
<script src="../../../assets/js/theme/transparent.min.js" type="11b9f60f56c76b5d5633b4e6-text/javascript"></script>

<script type="11b9f60f56c76b5d5633b4e6-text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53034621-1', 'auto');
		ga('send', 'pageview');

	</script>
 

<script src="../../../assets/plugins/chart.js/dist/Chart.min.js" type="40a8d7dc733a74ba108c79bb-text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.2/d3.min.js"></script>
<script src="../../../assets/plugins/d3/nv.d3-update.js" type="text/javascript"></script>
<script src="../../../assets/plugins/jvectormap-next/jquery-jvectormap.min.js" type="11b9f60f56c76b5d5633b4e6-text/javascript"></script>
<script src="../../../assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js" type="11b9f60f56c76b5d5633b4e6-text/javascript"></script>
<script src="../../../assets/plugins/apexcharts/dist/apexcharts.min.js" type="11b9f60f56c76b5d5633b4e6-text/javascript"></script>
<script src="../../../assets/plugins/moment/min/moment.min.js" type="11b9f60f56c76b5d5633b4e6-text/javascript"></script>
<script src="../../../assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="11b9f60f56c76b5d5633b4e6-text/javascript"></script>
<script src="../../../assets/js/demo/dashboard-v3.js" type="11b9f60f56c76b5d5633b4e6-text/javascript"></script>



<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="11b9f60f56c76b5d5633b4e6-|49" defer=""></script></body>
</html>
<?php
}else{
	// echo '<script> window.location="../../../../../../../../../index.php"; </script>';
}
?>

<!-- js cuando la pagina carga -->
<script src="js/index.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/echarts@5.0.2/dist/echarts.common.min.js" type="text/javascript"> </script>
<script src="https://cdn.jsdelivr.net/npm/echarts@5.0.2/dist/echarts.esm.min.js" type="text/javascript"> </script>
<script src="https://cdn.jsdelivr.net/npm/echarts@5.0.2/dist/echarts.min.js" type="text/javascript"> </script>
 