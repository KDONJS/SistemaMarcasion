<?php

session_start();
include '../../../../connection/server.php';

if(isset($_SESSION['user']))
	//Crear la conexión
	$srv="DESKTOP-9FG6RED\SQLEXPRESS";
	$opc=array("Database"=>"PortalCDG", "UID"=>"PortalCDG", "PWD"=>"password","CharacterSet" => "UTF-8");
	$con=sqlsrv_connect($srv,$opc) or die(print_r(sqlsrv_errors(), true));

  $dni = $_SESSION['usuario'];

  $sql="SELECT * FROM  [PortalCDG].[dbo].[grafico1_dni] WHERE DNI = '$dni' ORDER BY 2; ";

  $result = array(); 

  try {
    $res=sqlsrv_query($con,$sql) or die ('Error en '.$sql);
 
      do {
        while ($row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC)){
          $result[] = $row; 
        }
    } while (sqlsrv_next_result($res));
    echo json_encode ( $result );
 
  } catch (\Throwable $th) {
    echo($th);
  }

sqlsrv_close($con);
?>


