<?php
session_start();
include '../../../3.-Conexiones/1.-Servidor.php';

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


<style type="text/css">
  

  
  th.a {

    text-align: center;

  }


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
<button type="button" class="btn btn-info" style="width:500px;height:30px;text-align: top;  "><h4> Asistencia Diaria</h4></button>
&nbsp;&nbsp;&nbsp;
<a href="/4.-Diseño/index.php"><button type="button" class="btn btn-primary ">Portal - Inicio </button></a>
<a href="../../3.-Perfil.php"><button type="button" class="btn btn-default">Retroceder</button></a>
<button type="button" class="btn-exit btn btn-danger" data-toggle="tooltip" title="Salir" id="btn-exit">Salir</button>
</br></br>

<form method="post">
 

  <select class="a" name="taskOption" id="s_anio" style="width:75px;height:28px;" >
    <option value="2017">2017</option>
    <option selected value="2018">2018</option>
 
  </select>


  <select class="b" name="taskOption" id="s_meses" style="width:135px;height:28px;" >
    <option selected value="">Selecciona Mes</option>
    <option value="01">Enero</option>
    <option value="02">Febrero</option>
    <option value="03">Marzo</option>
    <option value="04">Abril</option>
    <option value="05">Mayo</option>
    <option value="06">Junio</option>
    <option value="07">Julio</option>
    <option value="08">Agosto</option>
    <option value="09">Septiembre</option>
    <option value="10">Octubre</option>
    <option value="11">Noviembre</option>
    <option value="12">Diciembre</option>
  </select>


<!--
  <select class="c" name="taskOption" id="s_programa" style="width:182px;height:28px;" >
    <option selected value=<? /* php echo $_SESSION['Documento']; */ ?>> Asistencia </option>
  </select>
-->



</form>
          
<br><br>





<section class="container">

<div > 
<div class='sticky-table sticky-headers sticky-ltr-cells'>


 <table id='' class='table table-bordered table-striped' >
<thead>

<tr class='sticky-row'>    

<th class='sticky-cell' id="ka">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Día<br> </th>
<th class='a'>Horario Programado <br></th>  
<th class='a'>Hora de ingreso</th>
<th class='a'>Tipo de Asistencia</th>
<th class='a'>Tiempo de tardanzas </th>
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

