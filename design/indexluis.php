<?php
// session_start(); //esto ya lo tenia en el login o porque lo inicias 
include '../connection/server.php';  
include '../connection/inactive.php'; 


// echo('<pre>');
// echo(print_r($_SESSION));
// echo('</pre>');
// exit();

?>


<!-- 

-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title> Proyecto CDG | Dashboard</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="../assets/css/transparent/app.min.css" rel="stylesheet" />


<link href="../assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
<link href="../assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
<link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />

</head>
<body>

<div class="page-cover"></div>


<div id="page-loader" class="fade show">
<span class="spinner"></span>
</div>


<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">

<div id="header" class="header navbar-default">

<div class="navbar-header">
<a href="indexluis.php" class="navbar-brand"><span class="fas fa-globe fa-spin"></span> &nbsp; PROYECTO | <b> CDG</b> </a>
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
<img src="../assets/img/user/user-13.jpg" alt="" />
<span class="d-none d-md-inline text-condensedLight noLink">Bienvenido : <?php echo $_SESSION['Nombres']." ".$_SESSION['Apaterno']." ".$_SESSION['Amaterno'];  ?></span> <b class="caret"></b>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Cargo : <?php echo $_SESSION['cargo'];  ?></a>
<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Función : <?php echo $_SESSION['funcion'];  ?></a>
<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Perfil : <?php echo $_SESSION['nombre_perfil'];  ?></a>
<!--<a href="javascript:;" class="dropdown-item text-condensedLight noLink">Usuario : <?php echo $_SESSION['usuario'];  ?></a>-->
<div class="dropdown-divider"></div>
<div  class="dropdown-item" > <a href="../connection/logout.php" > Cerrar Seción </a></div>
<a></a>
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
<img src="../assets/img/user/user-13.jpg" alt="" />
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


<ul class="nav"><li class="nav-header">Navegación</li>
<li class="has-sub active">
<a href="javascript:;">
<b class="caret"></b>
<i class="fa fa-th-large"></i>
<span>Dashboard</span>
</a>
<ul class="sub-menu">
                        <a href="indexluis.php" >
                        </a>
                    </li>
                    
                    <!-- MENU -->
                    <?php 
                    $menu_inicio ="-1";
                    foreach ($_SESSION["menu"] as $key) {

                        
                        if($key["id"]!=$menu_inicio)
                            {
                        ?>
                    <li class="active has-sub nav"></li>
                    <li>
                        <a href="<?php echo $key["url"]."?pag=".$key["id"];  ?>"  data-toggle="tooltip" title="<?php echo $key["frase"];?>" class="active">
                            <div class=" active has-sub nav">
                                <i class="<?php echo $key["icono"];?>"></i>
                            </div>
                            <div class="active">
                                <strong><?php echo $key["nombre"];  ?></strong>
                            </div>
                        </a>
                        
                    </li>
                    <?php   
                    $menu_inicio=$key["id"];
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
<li class="breadcrumb-item active">Dashboard</li>
</ol>


<h1 class="page-header">Dashboard <small>Detalle de indicadores vista general</small></h1>


<div class="row">

<div class="col-xl-3 col-md-6">
<div class="widget widget-stats bg-blue">
<div class="stats-icon"><i class="fa fa-desktop"></i></div>
<div class="stats-info">
<h4>CASOS ATENDIDOS</h4>
<p>1 500</p>
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
<p>98.2 %</p>
</div>
<div class="stats-link">
<a href="javascript:;"> Ver detalle <i class="fa fa-arrow-alt-circle-right"></i></a>
</div>
</div>
</div>

</div>

<div class="row">

<div class="col-xl-3 col-md-6">
<div class="widget widget-stats bg-teal">
<div class="stats-icon"><i class="fa fa-desktop"></i></div>
<div class="stats-info">
<h4>CASOS ABANDONADOS</h4>
<p>185</p>
</div>
<div class="stats-link">
<a href="javascript:;"> Ver detalle <i class="fa fa-arrow-alt-circle-right"></i></a>
</div>
</div>
</div>

<div class="col-xl-3 col-md-6">
<div class="widget widget-stats bg-green">
<div class="stats-icon"><i class="fa fa-link"></i></div>
<div class="stats-info">
<h4>RELLAMADA</h4>
<p>15 %</p>
</div>
<div class="stats-link">
<a href="javascript:;">Ver detalle <i class="fa fa-arrow-alt-circle-right"></i></a>
</div>
</div>
</div>

<div class="col-xl-3 col-md-6">
<div class="widget widget-stats bg-yellow">
<div class="stats-icon"><i class="fa fa-users"></i></div>
<div class="stats-info">
<h4>CSAT GENERAL</h4>
<p>76.7 %</p>
</div>
<div class="stats-link">
<a href="javascript:;">Ver detalle <i class="fa fa-arrow-alt-circle-right"></i></a>
</div>
</div>
</div>

<div class="col-xl-3 col-md-6">
<div class="widget widget-stats bg-purple">
<div class="stats-icon"><i class="fa fa-clock"></i></div>
<div class="stats-info">
<h4> FCR</h4>
<p>70.8 %</p>
</div>
<div class="stats-link">
<a href="javascript:;"> Ver detalle <i class="fa fa-arrow-alt-circle-right"></i></a>
</div>
</div>
</div>

</div>


<div class="row">

<div class="col-xl-8">

<div class="panel panel-inverse" data-sortable-id="index-1">
<div class="panel-heading">
<h4 class="panel-title">Análisis (de los ultimos 7 días)</h4>
<div class="panel-heading-btn">
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="panel-body pr-1">
<div id="interactive-chart" class="height-sm"></div>
</div>
</div>


<ul class="nav nav-tabs nav-tabs-inverse nav-justified nav-justified-mobile" data-sortable-id="index-2">
<li class="nav-item"><a href="#latest-post" data-toggle="tab" class="nav-link active"><i class="fa fa-building fa-lg m-r-5"></i> <span class="d-none d-md-inline">Compañias</span></a></li>
<li class="nav-item"><a href="#purchase" data-toggle="tab" class="nav-link"><i class="fa fa-book fa-lg m-r-5"></i> <span class="d-none d-md-inline">Capacitación</span></a></li>
<li class="nav-item"><a href="#email" data-toggle="tab" class="nav-link"><i class="fa fa-envelope fa-lg m-r-5"></i> <span class="d-none d-md-inline">Email</span></a></li>
</ul>
<div class="tab-content" data-sortable-id="index-3">
<div class="tab-pane fade active show" id="latest-post">
<div class="height-sm" data-scrollbar="true">
<ul class="media-list media-list-with-divider">
<li class="media media-lg">
<a href="javascript:;" class="pull-left">
<img class="media-object rounded" src="../assets/img/gallery/gallery-1.jpg" alt="" />
</a>
<div class="media-body">
<h5 class="media-heading">ADIDAS |Nada es imposible</h5>
ADIDAS es un nombre que representa competencia en todos los sectores de deporte en todo el mundo. La empresa fue fundada en los años 1920 por el empresario alemán Adi Dassler, que tenía como objetivo de fabricar zapatillas de deporte para proveer a cada atleta, el mejor material posible para realizar su deporte. 
</div>
</li>
<li class="media media-lg">
<a href="javascript:;" class="pull-left">
<img class="media-object rounded" src="../assets/img/gallery/gallery-10.jpg" alt="" />
</a>
<div class="media-body">
<h5 class="media-heading">CLARO |Para de sufrir</h5>
Nuestra misión proveer servicios de telecomunicaciones con la más alta calidad, más amplia cobertura y constante innovación para anticiparnos a las necesidades de comunicación de nuestros clientes; generar el mayor bienestar y desarrollo personal y profesional de nuestros trabajadores, proporcionar bienestar y desarrollo a la comunidad y exceder los objetivos financieros y de crecimiento de nuestros accionistas.
</div>
</li>
<li class="media media-lg">
<a href="javascript:;" class="pull-left">
<img class="media-object rounded" src="../assets/img/gallery/gallery-7.jpg" alt="" />
</a>
<div class="media-body">
<h5 class="media-heading">GLOVO |Ya vamos nosotros</h5>
Glovo es la aplicación que te permite obtener los mejores productos de tu ciudad en pocos minutos. Conectamos usuarios, empresas y mensajeros para hacerlo posible.
</div>
</li>
<li class="media media-lg">
<a href="javascript:;" class="pull-left">
<img class="media-object rounded" src="../assets/img/gallery/gallery-8.jpg" alt="" />
</a>
<div class="media-body">
<h5 class="media-heading">WORLDREMIT |Casa en casa</h5>
Nos enorgullecemos de contratar a un equipo diverso de diferentes orígenes culturales y profesionales. Con más de 1000 empleados en todo el mundo, hay más de 30 nacionalidades solo en nuestra sede de Londres. 
</div>
</li>
</ul>
</div>
</div>
<div class="tab-pane fade" id="purchase">
<div class="height-sm" data-scrollbar="true">
<table class="table">
<thead>
<tr>
<th>Inicio de Capacitación</th>
<th class="hidden-sm text-center">Nombres</th>
<th></th>
<th>Grupo de capacitación</th>
<th>Capacitador</th>
</tr>
</thead>
<tbody>
<tr>
<td class="f-w-600 text-muted">12/02/2021</td>
<td class="hidden-sm text-center">
<a href="javascript:;">
<img src="../assets/img/product/product-1.png" alt="" width="32px" />
</a>
</td>
<td class="text-nowrap">
<h6><a href="javascript:;" class="text-inverse text-orange">Andrea<br />Gonsales Roque</a></h6>
</td>
<td class="text-blue f-w-600">Nº 005</td>
<td class="text-nowrap"><a href="javascript:;" class="text-inverse text-green">Derick Wong</a></td>
</tr>
<tr>
<td class="f-w-600 text-muted">12/02/2021</td>
<td class="hidden-sm text-center">
<a href="javascript:;">
<img src="../assets/img/product/product-1.png" alt="" width="32px" />
</a>
</td>
<td class="text-nowrap">
<h6><a href="javascript:;" class="text-inverse text-orange">Jose Alberto<br />De Tomas Pizarro</a></h6>
</td>
<td class="text-blue f-w-600">Nº 005</td>
<td class="text-nowrap"><a href="javascript:;" class="text-inverse text-green">Derick Wong</a></td>
</tr>
<tr>
<td class="f-w-600 text-muted">14/03/2021</td>
<td class="hidden-sm text-center">
<a href="javascript:;">
<img src="../assets/img/product/product-1.png" alt="" width="32px" />
</a>
</td>
<td class="text-nowrap">
<h6><a href="javascript:;" class="text-inverse text-orange">Diego <br />Aburto Ramirez</a></h6>
</td>
<td class="text-blue f-w-600">Nº 005</td>
<td class="text-nowrap"><a href="javascript:;" class="text-inverse text-green">Ramon Golden</a></td>
</tr>
<tr>
<td class="f-w-600 text-muted">15/03/2021</td>
<td class="hidden-sm text-center">
<a href="javascript:;">
<img src="../assets/img/product/product-1.png" alt="" width="32px" />
</a>
</td>
<td class="text-nowrap">
<h6><a href="javascript:;" class="text-inverse text-orange">David <br />Bautista Anicama</a></h6>
</td>
<td class="text-blue f-w-600">Nº 005</td>
<td class="text-nowrap"><a href="javascript:;" class="text-inverse text-green">Ursula Torres</a></td>
</tr>
<tr>
<td class="f-w-600 text-muted">15/04/2021</td>
<td class="hidden-sm text-center">
<a href="javascript:;">
<img src="../assets/img/product/product-1.png" alt="" width="32px" />
</a>
</td>
<td class="text-nowrap">
<h6><a href="javascript:;" class="text-inverse text-orange">Luis <br />Ramirez Alegria</a></h6>
</td>
<td class="text-blue f-w-600">Nº 006</td>
<td class="text-nowrap"><a href="javascript:;" class="text-inverse text-green">Jose torres</a></td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="tab-pane fade" id="email">
<div class="height-sm" data-scrollbar="true">
<ul class="media-list media-list-with-divider">
<li class="media media-sm">
<a href="javascript:;" class="pull-left">
<img src="../assets/img/user/user-1.jpg" alt="" class="media-object rounded-corner" />
</a>
<div class="media-body">
<a href="javascript:;" class="text-inverse"><h5 class="media-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5></a>
<p class="m-b-5">
Aenean mollis arcu sed turpis accumsan dignissim. Etiam vel tortor at risus tristique convallis. Donec adipiscing euismod arcu id euismod. Suspendisse potenti. Aliquam lacinia sapien ac urna placerat, eu interdum mauris viverra.
</p>
<span class="text-muted f-s-11 f-w-600">Received on 04/16/2013, 12.39pm</span>
</div>
</li>
<li class="media media-sm">
<a href="javascript:;" class="pull-left">
<img src="../assets/img/user/user-2.jpg" alt="" class="media-object rounded-corner" />
</a>
<div class="media-body">
<a href="javascript:;" class="text-inverse"><h5 class="media-heading">Praesent et sem porta leo tempus tincidunt eleifend et arcu.</h5></a>
<p class="m-b-5">
Proin adipiscing dui nulla. Duis pharetra vel sem ac adipiscing. Vestibulum ut porta leo. Pellentesque orci neque, tempor ornare purus nec, fringilla venenatis elit. Duis at est non nisl dapibus lacinia.
</p>
<span class="text-muted f-s-11 f-w-600">Received on 04/16/2013, 12.39pm</span>
</div>
</li>
<li class="media media-sm">
<a href="javascript:;" class="pull-left">
<img src="../assets/img/user/user-3.jpg" alt="" class="media-object rounded-corner" />
</a>
<div class="media-body">
<a href="javascript:;" class="text-inverse"><h5 class="media-heading">Ut mi eros, varius nec mi vel, consectetur convallis diam.</h5></a>
<p class="m-b-5">
Ut mi eros, varius nec mi vel, consectetur convallis diam. Nullam eget hendrerit eros. Duis lacinia condimentum justo at ultrices. Phasellus sapien arcu, fringilla eu pulvinar id, mattis quis mauris.
</p>
<span class="text-muted f-s-11 f-w-600">Received on 04/16/2013, 12.39pm</span>
</div>
</li>
<li class="media media-sm">
<a href="javascript:;" class="pull-left">
<img src="../assets/img/user/user-4.jpg" alt="" class="media-object rounded-corner" />
</a>
<div class="media-body">
<a href="javascript:;" class="text-inverse"><h5 class="media-heading">Aliquam nec dolor vel nisl dictum ullamcorper.</h5></a>
<p class="m-b-5">
Aliquam nec dolor vel nisl dictum ullamcorper. Duis vel magna enim. Aenean volutpat a dui vitae pulvinar. Nullam ligula mauris, dictum eu ullamcorper quis, lacinia nec mauris.
</p>
<span class="text-muted f-s-11 f-w-600">Received on 04/16/2013, 12.39pm</span>
</div>
</li>
</ul>
</div>
</div>
</div>


<div class="panel panel-inverse" data-sortable-id="index-4">
<div class="panel-heading">
<h4 class="panel-title">Quick Post</h4>
<div class="panel-heading-btn">
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="panel-toolbar">
<div class="btn-group m-r-5">
<a class="btn btn-white" href="javascript:;"><i class="fa fa-bold"></i></a>
<a class="btn btn-white active" href="javascript:;"><i class="fa fa-italic"></i></a>
<a class="btn btn-white" href="javascript:;"><i class="fa fa-underline"></i></a>
</div>
<div class="btn-group">
<a class="btn btn-white" href="javascript:;"><i class="fa fa-align-left"></i></a>
<a class="btn btn-white active" href="javascript:;"><i class="fa fa-align-center"></i></a>
<a class="btn btn-white" href="javascript:;"><i class="fa fa-align-right"></i></a>
<a class="btn btn-white" href="javascript:;"><i class="fa fa-align-justify"></i></a>
</div>
</div>
<textarea class="form-control rounded-0 p-15" rows="14">Enter some comment.</textarea>
<div class="panel-footer text-right">
<a href="javascript:;" class="btn btn-white btn-sm">Cancelar</a>
<a href="javascript:;" class="btn btn-primary btn-sm m-l-5">Enviar</a>
</div>
</div>


<div class="panel panel-inverse" data-sortable-id="index-5">
<div class="panel-heading">
<h4 class="panel-title">Mensajes</h4>
<div class="panel-heading-btn">
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="panel-body">
<div class="height-sm" data-scrollbar="true">
<ul class="media-list media-list-with-divider media-messaging">
<li class="media media-sm">
<a href="javascript:;" class="pull-left">
<img src="../assets/img/user/user-5.jpg" alt="" class="media-object rounded-corner" />
</a>
<div class="media-body">
<h5 class="media-heading">John Doe</h5>
<p>Hola Jose te envie un correo por favor podrias verificar lo solicitado</p>
</div>
</li>
<li class="media media-sm">
<a href="javascript:;" class="pull-left">
<img src="../assets/img/user/user-6.jpg" alt="" class="media-object rounded-corner" />
</a>
<div class="media-body">
<h5 class="media-heading">Stefany</h5>
<p>Por favor de manera urgente presentar reporte de rellamadas de los 20 agentes mencionados en el correo</p>
</div>
</li>
<li class="media media-sm">
<a href="javascript:;" class="pull-left">
<img src="../assets/img/user/user-8.jpg" alt="" class="media-object rounded-corner" />
</a>
<div class="media-body">
<h5 class="media-heading">Jose M</h5>
<p>Estimado comunicarse con el area de operaciones para calibrar informaciion importante</p>
</div>
</li>
<li class="media media-sm">
<a href="javascript:;" class="pull-left">
<img src="../assets/img/user/user-7.jpg" alt="" class="media-object rounded-corner" />
</a>
<div class="media-body">
<h5 class="media-heading">Pedro A</h5>
<p>Bienvenido a Dynamicall seras de gran ayuda para esta area</p>
</div>
</li>
</ul>
</div>
</div>
<div class="panel-footer">
<form>
<div class="input-group">
<input type="text" class="form-control" placeholder="Enter message" />
<span class="input-group-append">
<button class="btn btn-primary" type="button"><i class="fa fa-pencil-alt"></i></button>
</span>
</div>
</form>
</div>
</div>

</div>


<div class="col-xl-4">

<div class="panel panel-inverse" data-sortable-id="index-6">
<div class="panel-heading">
<h4 class="panel-title">Detalle de análisis</h4>
<div class="panel-heading-btn">
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="table-responsive">
<table class="table table-valign-middle table-panel mb-0">
<thead>
<tr>
<th>Indicador</th>
<th>Total</th>
<th>Tendencia</th>
</tr>
</thead>
<tbody>
<tr>
<td><label class="label label-danger">NPS en general</label></td>
<td>95.5 %<span class="text-success"><i class="fa fa fa-arrow-down"></i></span></td>
<td><div id="sparkline-unique-visitor"></div></td>
</tr>
<tr>
<td><label class="label label-warning">Rellamadas</label></td>
<td>15.2%<span class="text-success"><i class="fa fa fa-arrow-down"> </td>
<td><div id="sparkline-bounce-rate"></div></td>
</tr>
<tr>
<td><label class="label label-success">Casos abandonados</label></td>
<td>201 <span class="text-success"><i class="fa fa fa-arrow-up"></td>
<td><div id="sparkline-total-page-views"></div></td>
</tr>
<tr>
<td><label class="label label-primary">TMO general</label></td>
<td>450 <span class="text-success"><i class="fa fa fa-arrow-up"> </td>
<td><div id="sparkline-avg-time-on-site"></div></td>
</tr>
<tr>
<td><label class="label label-default">Casos atendidos</label></td>
<td>1.1301 <span class="text-success"><i class="fa fa fa-arrow-up"></td>
<td><div id="sparkline-new-visits"></div></td>
</tr>
<tr>
<td><label class="label label-inverse">FCR general</label></td>
<td>73.4%</td>
<td><div id="sparkline-return-visitors"></div></td>
</tr>
</tbody>
</table>
</div>
</div>


<div class="panel panel-inverse" data-sortable-id="index-7">
<div class="panel-heading">
<h4 class="panel-title">NPS General</h4>
<div class="panel-heading-btn">
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="panel-body">
<div id="donut-chart" class="height-sm"></div>
</div>
</div>


<div class="panel panel-inverse" data-sortable-id="index-8">
<div class="panel-heading">
<h4 class="panel-title">Dynamicall cumpleaños</h4>
<div class="panel-heading-btn">
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="panel-body p-0">
<ul class="todolist">
<li class="active">
<a href="javascript:;" class="todolist-container active" data-click="todolist">
<div class="todolist-input"><i class="fa fa-square"></i></div>
<div class="todolist-title">Jorge davida Gutierres <br>12/02 Feliz cumpleaños</div>
</a>
</li>
<li>
<a href="javascript:;" class="todolist-container" data-click="todolist">
<div class="todolist-input"><i class="fa fa-square"></i></div>
<div class="todolist-title">Jose Alcantara Goes <br>15/05 Feliz cumpleaños</div>
</a>
</li>
<li>
<a href="javascript:;" class="todolist-container" data-click="todolist">
<div class="todolist-input"><i class="fa fa-square"></i></div>
<div class="todolist-title">Mario Vega Gutierres <br>25/03 Feliz cumpleaños</div>
</a>
</li>
<li>
<a href="javascript:;" class="todolist-container" data-click="todolist">
<div class="todolist-input"><i class="fa fa-square"></i></div>
<div class="todolist-title">Juan Vega Galves <br>28/05 Feliz cumpleaños</div>
</a>
</li>
<li>
<a href="javascript:;" class="todolist-container" data-click="todolist">
<div class="todolist-input"><i class="fa fa-square"></i></div>
<div class="todolist-title">Miguel Leyva Reyes <br>25/06 Feliz cumpleaños</div>
</a>
</li>
<li>
<a href="javascript:;" class="todolist-container" data-click="todolist">
<div class="todolist-input"><i class="fa fa-square"></i></div>
<div class="todolist-title">Renzo Morrope Reyes <br>17/01 Feliz cumpleaños</div>
</a>
</li>
<li>
<a href="javascript:;" class="todolist-container active" data-click="todolist">
<div class="todolist-input"><i class="fa fa-square"></i></div>
<div class="todolist-title">Inghrid Vega Rodriguez <br>05/03 Feliz cumpleaños</div>
</a>
</li>
</ul>
</div>
</div>


<div class="panel panel-inverse bg-white-transparent-2" data-sortable-id="index-9">
<div class="panel-heading">
<h4 class="panel-title">Visitas en general</h4>
<div class="panel-heading-btn">
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="panel-body p-0">
<div id="world-map" class="height-sm width-full"></div>
</div>
</div>


<div class="panel panel-inverse" data-sortable-id="index-10">
<div class="panel-heading">
<h4 class="panel-title">Calendario</h4>
<div class="panel-heading-btn">
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="panel-body">
<div id="datepicker-inline" class="datepicker-full-width overflow-y-scroll position-relative"><div></div></div>
</div>
</div>

</div>

</div>

</div>


<div class="theme-panel theme-panel-lg">
<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
<div class="theme-panel-content">
<h5>App Settings</h5><ul class="theme-list clearfix">
<li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="../assets/css/transparent/theme/red.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-pink" data-theme="pink" data-theme-file="../assets/css/transparent/theme/pink.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Pink">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="../assets/css/transparent/theme/orange.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-yellow" data-theme="yellow" data-theme-file="../assets/css/transparent/theme/yellow.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Yellow">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-lime" data-theme="lime" data-theme-file="../assets/css/transparent/theme/lime.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Lime">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-green" data-theme="green" data-theme-file="../assets/css/transparent/theme/green.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Green">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-teal" data-theme="teal" data-theme-file="../assets/css/transparent/theme/teal.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Teal">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-aqua" data-theme="aqua" data-theme-file="../assets/css/transparent/theme/aqua.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Aqua">&nbsp;</a></li>
<li class="active"><a href="javascript:;" class="bg-blue" data-theme="default" data-theme-file="" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="../assets/css/transparent/theme/purple.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-indigo" data-theme="indigo" data-theme-file="../assets/css/transparent/theme/indigo.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Indigo">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="../assets/css/transparent/theme/black.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
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


<script src="../assets/js/app.min.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/js/theme/transparent.min.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>

<script type="9f7d5e275687b162ba52166e-text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53034621-1', 'auto');
		ga('send', 'pageview');

	</script>

<script src="../assets/plugins/gritter/js/jquery.gritter.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/flot/source/jquery.canvaswrapper.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/flot/source/jquery.colorhelpers.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/flot/source/jquery.flot.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/flot/source/jquery.flot.saturated.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/flot/source/jquery.flot.browser.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/flot/source/jquery.flot.drawSeries.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/flot/source/jquery.flot.uiConstants.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/flot/source/jquery.flot.time.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/flot/source/jquery.flot.resize.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/flot/source/jquery.flot.pie.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/flot/source/jquery.flot.crosshair.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/flot/source/jquery.flot.categories.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/flot/source/jquery.flot.navigate.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/flot/source/jquery.flot.touchNavigate.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/flot/source/jquery.flot.hover.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/flot/source/jquery.flot.touch.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/flot/source/jquery.flot.selection.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/flot/source/jquery.flot.symbol.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/flot/source/jquery.flot.legend.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/jvectormap-next/jquery-jvectormap.min.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script src="../assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>
<script type="9f7d5e275687b162ba52166e-text/javascript">
		COLOR_BLACK_TRANSPARENT_2 = 'rgba(255,255,255,0.15)';
		COLOR_DARK_LIGHTER = 'rgba(0,0,0,0.5)';
		COLOR_WHITE = '#333';
	</script>
<script src="../assets/js/demo/dashboard.js" type="9f7d5e275687b162ba52166e-text/javascript"></script>

<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="9f7d5e275687b162ba52166e-|49" defer=""></script></body>
</html>