<?php  

$documento  = $_POST["s_dni"];
$fecha  = $_POST["s_meses"]; 
$mes = explode(' ', $fecha);
$mes_1 = $mes[0];




$serverName = "10.166.90.50"; //serverName\instanceName
$connectionInfo = array( "Database"=>"PyC", "UID"=>"UserPortal", "PWD"=>"Logaritmo10+","CharacterSet" => "UTF-8");
$conn = sqlsrv_connect( $serverName, $connectionInfo);




$query="
SELECT [Apellidos_y_Nombres],[Funcion],[Nombre_del_Programa],[Antiguedad] 
FROM [V_INDICADORES_MOVISTAR_PERU_DIA]
WHERE [Documento] = '".$documento."' 
AND [Periodo] = '".$fecha."' GROUP BY [Nombre_del_Programa],[Funcion],[Apellidos_y_Nombres],[Antiguedad]
";



  $resultado=sqlsrv_query($conn, $query);

  $data= "<ul class='nav nav-pills nav-stacked'>";
  
  while($row=sqlsrv_fetch_array($resultado)){ 


  $data =$data. "<li><a href='#' class='a'>".$row['Apellidos_y_Nombres']."</a></li>";
  $data =$data. "<li><a href='#' class='a'>".$row['Funcion']."</li>";
  $data =$data. "<li><a href='#' class='a'>".$row['Nombre_del_Programa']."</a></li>";
  $data =$data. "<li><a href='#' class='a'>".$row['Antiguedad']."</a></li>";

  }  
 

$data = $data . "</ul>";


echo json_encode($data);


?>