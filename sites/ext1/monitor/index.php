
<?php
session_start();
include '../../3.-Conexiones/1.-Servidor.php';

if(isset($_SESSION['user'])) {?>



<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Trafico de consultas</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <h2>Trafico de consultas</h2>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="table-responsive">
        <table summary="This table shows how to create responsive tables using Bootstrap's default functionality" class="table table-bordered table-hover">
          <caption class="text-center">Regresa a Web CIA <a href="http://10.252.199.236" target="_blank"> INICIO </a></caption>
          <thead>
            <tr>
              <th>Nombre de Usuario</th>
              <th>Texto SQL</th>
              <th>Population</th>
              <th>Median Age</th>
              <th>Area (Km²)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>ATENTO\dallasim</td>
              <td>Spanish (official), English, Italian, German, French</td>
              <td>41,803,125</td>
              <td>31.3</td>
              <td>2,780,387</td>
            </tr>
            <tr>
              <td>usrCIA</td>
              <td>English 79%, native and other languages</td>
              <td>23,630,169</td>
              <td>37.3</td>
              <td>7,739,983</td>
            </tr>
            <tr>
              <td>ATENTO\lchachic</td>
              <td>Greek 99% (official), English, French</td>
              <td>11,128,404</td>
              <td>43.2</td>
              <td>131,956</td>
            </tr>
            <tr>
              <td>ATENTO\jmarcapinam</td>
              <td>Luxermbourgish (national) French, German (both administrative)</td>
              <td>536,761</td>
              <td>39.1</td>
              <td>2,586</td>
            </tr>
    
          </tbody>
          <tfoot>
            <tr>
              <td colspan="5" class="text-center">Data retrieved from <a href="http://www.infoplease.com/ipa/A0855611.html" target="_blank">infoplease</a> and <a href="http://www.worldometers.info/world-population/population-by-country/" target="_blank">worldometers</a>.</td>
            </tr>
          </tfoot>
        </table>
      </div><!--end of .table-responsive-->
    </div>
  </div>
</div>

<p class="p">CIA: Centro de Información y Análisis. <a href="http://10.252.199.236" target="_blank">Aqui</a>.</p>
  
  

    <script  src="js/index.js"></script>




</body>

</html>

<?php
}else{
  echo '<script> window.location="../../index.php"; </script>';
}
?>