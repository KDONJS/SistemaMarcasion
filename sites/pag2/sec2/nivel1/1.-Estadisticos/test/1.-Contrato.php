<?php
session_start();
include '../../../../../../3.-Conexiones/1.-Servidor.php';

if(isset($_SESSION['user'])) {?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Planeamiento y Control</title>

  <link rel="stylesheet" href="/2.-Lenguajes/1.-css/normalize.css">
  <link rel="stylesheet" href="/2.-Lenguajes/1.-css/sweetalert2.css">
  <link rel="stylesheet" href="/2.-Lenguajes/1.-css/material.min.css">
  <link rel="stylesheet" href="/2.-Lenguajes/1.-css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="/2.-Lenguajes/1.-css/jquery.mCustomScrollbar.css">       
  <link rel="stylesheet" href="/2.-Lenguajes/1.-css/1.-MovistarPeru/main.css">

  <script>window.jQuery || document.write('<script src="/2.-Lenguajes/2.-js/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="/2.-Lenguajes/2.-js/material.min.js" ></script>
  <script src="/2.-Lenguajes/2.-js/sweetalert2.min.js" ></script>
  <script src="/2.-Lenguajes/2.-js/jquery.mCustomScrollbar.concat.min.js" ></script>
  <script src="/2.-Lenguajes/2.-js/main.js" ></script>


<link rel="icon" type="image/png" href="/1.-Herramientas/1.-Imagenes/icono-logo.png" />



 <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
 <link rel="stylesheet" href="css/jquery.stickytable.min.css">



<!-- 
* Inicia // Codigo de filtro ordenamiento
-->
  

  <script src="js/jquery.stickytable.min.js" type="text/javascript"></script>

  <link href="css/bootstrap.no-icons.min.css" rel="stylesheet">
<!-- 
* Inicia // Exportado
-->
  <script src="https://cdn.rawgit.com/eligrey/FileSaver.js/e9d941381475b5df8b7d7691013401e171014e89/FileSaver.min.js"></script>
  <script src="js/exportar.js"></script>



<style type="text/css">
  
  td.a {

    text-align: center;

  }

button.btn1{
    position:absolute;
    top: 90px;
    left: 385px;
    
  }

select.a{ 
  position:absolute;
    top: 90px;
    left: 30px;
}

select.b{ 
  position:absolute;
    top: 90px;
    left: 108px;
}

select.c{ 
  position:absolute;
    top: 90px;
    left: 246px;
}


#ka{
  background-color: #ed7d31;

  }




</style>


    </head>





    <body dir="ltr" >
 


  <section class="container">

  </br>



<img src="img/logocomdatagroup.png" style="width:285px;height:40px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="button" class="btn btn-info" style="width:500px;height:30px;text-align: top;  "><h4>Estadísticos Diarios</h4></button>
&nbsp;&nbsp;&nbsp;
<a href="/4.-Diseño/index.php"><button type="button" class="btn btn-primary ">Portal - Inicio </button></a>
<a href="../../index.php"><button type="button" class="btn btn-default">Retroceder</button></a>
<button type="button" class="btn-exit btn btn-danger" data-toggle="tooltip" title="Salir" id="btn-exit">Salir</button>
</br></br>

<form method="post">
 

  <select class="a" name="taskOption" id="s_anio" style="width:75px;height:28px;" >
    <option value="2017">2017</option>
    <option selected value="2018">2018</option>
 
  </select>


  <select class="b" name="taskOption" id="s_meses" style="width:135px;height:28px;" >
    <option selected value="">Selecciona Mes</option>
    <option value="ENERO">Enero</option>
    <option value="FEBRERO">Febrero</option>
    <option value="MARZO">Marzo</option>
    <option value="ABRIL">Abril</option>
    <option value="MAYO">Mayo</option>
    <option value="JUNIO">Junio</option>
    <option value="JULIO">Julio</option>
    <option value="AGOSTO">Agosto</option>
    <option value="SEPTIEMBRE">Septiembre</option>
    <option value="NOVIEMBRE">Noviembre</option>
    <option value="DICIEMBRE">Diciembre</option>
  </select>

  <select class="c" name="taskOption" id="s_programa" style="width:182px;height:28px;" >
    <option selected value value="">Selecciona Programa</option>
    <option value="CONTRATO">Contrato</option>
    <option value="CORTE POR ROBO">Corte por Robo</option>
    <option value="FIJA GRABACIONES">Fija Grabaciones</option>
    <option value="INTERCABLE">Intercable</option>
    <option value="MOVISTAR TOTAL PREMIUM">Movistar Total Premium</option>
    <option value="POSTPAGO">Postpago</option>
    <option value="PREPAGO">Prepago</option>
    <option value="PREPAGO CROSSELLING">Prepago Crosselling</option>
    <option value="ROAMING INBOUND">Roaming Inbound</option>
  </select>




</form>
          
<br><br>

<section class="container">

<div > 
<div class='sticky-table sticky-headers sticky-ltr-cells'>
 <table id='' class='table table-bordered table-striped' >
<thead>

<tr class='sticky-row'>    

<th class='sticky-cell' id="ka">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br> </th>
<th class='a' >Llamadas Previstas</th>  
<th class='a'>Llamadas Recibidas</th>
<th class='a'>&nbsp;&nbsp;Desviación&nbsp;&nbsp;</th>
<th class='a'>Llamadas Atendidas</th>
<th class='a'>Llamadas Atendidas en&nbsp;Umbral</th>
<th class='a'>Llamadas Abandonadas </th>
<th class='a'>Llamadas Abandonadas en Umbral</th>
<th class='a'>Llamadas Cleared</th>
<th class='a'>Llamadas Diference</th>
<th class='a'>Nivel de Atención</th>
<th class='a'>&nbsp;&nbsp;&nbsp;&nbsp;Nivel&nbsp;de &nbsp;&nbsp;&nbsp;&nbsp;Servicio&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th class='a'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TMO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th class='a'>TME</th>
<th class='a'>Llamadas Cortas</th>
<th class='a'>%&nbsp;Llamadas Cortas</th>
<th class='a'>Llamadas Salientes</th>
<th class='a'>%&nbsp;Llamadas Salientes</th>
<th class='a'>TMO Saliente</th>
<th class='a'>Horas Requeridas</th>
<th class='a'>Horas Convocadas</th>
<th class='a'>Horas Presenciales</th>
<th class='a'>Horas de Tardanza</th>
<th class='a'>Horas de Absentismo</th>
<th class='a'>Horas de Absentismo Remunerado</th>
<th class='a'>Horas de Absentismo&nbsp;No Remunerado</th>
<th class='a'>%&nbsp;Tardanza</th>
<th class='a'>%&nbsp;Absentismo</th>
<th class='a'>%&nbsp;Absentismo Remunerado</th>
<th class='a'>%&nbsp;Absentismo No&nbsp;Remunerado</th>
<th class='a'>Horas de Conexión</th>
<th class='a'>%&nbsp;Conexión</th>
<th class='a'>Horas de Avail</th>
<th class='a'>%&nbsp;Avail</th>
<th class='a'>Horas&nbsp;de Not&nbsp;Ready</th>
<th class='a'>%&nbsp;Not&nbsp;Ready</th>
<th class='a'>Horas&nbsp;de Hold</th>
<th class='a'>%&nbsp;Hold</th>
<th class='a'>Horas&nbsp;de ACW</th>
<th class='a'>%&nbsp;ACW</th>
<th class='a'>%&nbsp;Ocupación</th>
<th class='a'>%&nbsp;Utilización&nbsp;&nbsp;</th>
<th class='a'>Atendidas COPC</th>
<th class='a'>Rellamadas COPC</th>
<th class='a'>Transferencias COPC</th>
<th class='a'>%&nbsp;Rellamadas</th>
<th class='a'>%&nbsp;Transferencias</th>
<th class='a'>Llamadas Abordadas</th>
<th class='a'>Ventas</th>
<th class='a'>%&nbsp;Abordaje</th>
<th class='a'>%&nbsp;Efectividad</th>
</tr>

</thead> 

<tbody id="tabla_dinamica" >
</tbody >

  </table>



</div>


</div>


  </section>



<script type="text/javascript">
  

  $(document).on('ready',function(){
  
  $('#s_meses').change(function(){
    var s_meses = $('#s_meses').val();
    var s_anio = $('#s_anio').val();
    var s_programa = $('#s_programa').val();    
    console.log(s_meses);

      $.post('php/tabla_reporte1.php',{
        s_meses : s_meses,s_anio : s_anio,s_programa : s_programa
      },function(data){      
        var datas = $.parseJSON(data);

        $("#tabla_dinamica").html(datas);
          
        });
    
      }); 
    
     $('#s_anio').change(function(){
    var s_meses = $('#s_meses').val();
    var s_anio = $('#s_anio').val();
    var s_programa = $('#s_programa').val();
    console.log(s_meses);

      $.post('php/tabla_reporte1.php',{
        s_meses : s_meses,s_anio : s_anio,s_programa : s_programa
      },function(data){      
        var datas = $.parseJSON(data);

        $("#tabla_dinamica").html(datas);
          
        });
    
      });

      $('#s_programa').change(function(){
    var s_meses = $('#s_meses').val();
    var s_anio = $('#s_anio').val();
    var s_programa = $('#s_programa').val();
    console.log(s_meses);

      $.post('php/tabla_reporte1.php',{
        s_meses : s_meses,s_anio : s_anio,s_programa : s_programa
      },function(data){      
        var datas = $.parseJSON(data);

        $("#tabla_dinamica").html(datas);
          
        });
    
      });


      $.post('php/tabla_reporte1.php',{
        s_meses : 'DEFAULT'
      },function(data){      
        var datas = $.parseJSON(data);

        $("#tabla_dinamica").html(datas);
          
        });


    
  });






  
</script>






    </body>
</html>


<?php
}else{
    echo '<script> window.location="../../../../../../../../index.php"; </script>';
}
?>

