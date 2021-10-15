<!-- 
* Copyright 2021 Yorlin
-->

<?php
	session_start();
	include 'connection/server.php';
	if(isset($_SESSION['user'])){
	echo '<script> window.location="/design/index.php"; </script>';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Proyecto CDG|Pagina de Logueo</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="./assets/css/transparent/app.min.css" rel="stylesheet" />

 


</head>

<div class="login-cover">
<div class="login-cover-image" style="background-image: url(./assets/img/login-bg/login-bg-17.jpg)" data-id="login-cover-image"></div>
<div class="login-cover-bg"></div>
</div>


<div id="page-container" class="fade">

<div class="login login-v2" data-pageload-addclass="animated fadeIn">

<div class="login-header">
<div class="brand">
<span class="logo"><i class="ion-ios-cloud"></i></span> Proyecto <b>ADIDAS</b>
<small>Bienvenido a la pagina de logueo</small>
</div>
<div class="icon">
<i class="fa fa-lock"></i>
</div>
</div>


<div class="login-content">
<form action="connection/validate.php" method="post" class="margin-bottom-0">
<div class="form-group m-b-20">
<input type="text" class="form-control form-control-lg" placeholder="Usuario" required name="user" />
</div>
<div class="form-group m-b-20">
<input type="password" class="form-control form-control-lg" placeholder="Contraseña" required name="pw" />
</div>
<div class="checkbox checkbox-css m-b-20">
<input type="checkbox" id="remember_checkbox" />
<label for="remember_checkbox">
Recordar usuario y contraseña
</label>
</div>
<div class="login-buttons">
<button type="submit" class="btn btn-success btn-block btn-lg" name="login" >Ingresar</button>
</div>
<div class="m-t-20">
DYNAMICALL | Eficiencia y flexibilidad en sus manos.
</div>
</form>
</div>

</div>


<ul class="login-bg-list clearfix">
<li class="active"><a href="javascript:;" data-click="change-bg" data-img="./assets/img/login-bg/login-bg-17.jpg" style="background-image: url(./assets/img/login-bg/login-bg-17.jpg)"></a></li>
<li><a href="javascript:;" data-click="change-bg" data-img="./assets/img/login-bg/login-bg-16.jpg" style="background-image: url(./assets/img/login-bg/login-bg-16.jpg)"></a></li>
<li><a href="javascript:;" data-click="change-bg" data-img="./assets/img/login-bg/login-bg-15.jpg" style="background-image: url(./assets/img/login-bg/login-bg-15.jpg)"></a></li>
<li><a href="javascript:;" data-click="change-bg" data-img="./assets/img/login-bg/login-bg-14.jpg" style="background-image: url(./assets/img/login-bg/login-bg-14.jpg)"></a></li>
<li><a href="javascript:;" data-click="change-bg" data-img="./assets/img/login-bg/login-bg-13.jpg" style="background-image: url(./assets/img/login-bg/login-bg-13.jpg)"></a></li>
<li><a href="javascript:;" data-click="change-bg" data-img="./assets/img/login-bg/login-bg-12.jpg" style="background-image: url(./assets/img/login-bg/login-bg-12.jpg)"></a></li>
</ul>



<a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

</div>


<script src="./assets/js/app.min.js" type="a8a7a9092adbc595a271b1a5-text/javascript"></script>
<script src="./assets/js/theme/apple.min.js" type="a8a7a9092adbc595a271b1a5-text/javascript"></script>

<script type="a8a7a9092adbc595a271b1a5-text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53034621-1', 'auto');
		ga('send', 'pageview');

	</script>

<script src="./assets/js/demo/login-v2.demo.js" type="a8a7a9092adbc595a271b1a5-text/javascript"></script>

<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="a8a7a9092adbc595a271b1a5-|49" defer=""></script></body>
</html> 