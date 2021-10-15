
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

<?php
  
$serverName = "10.252.194.193"; //serverName\instanceName
$connectionInfo = array( "Database"=>"SEGUIMIENTO_CIA", "UID"=>"usrCIA", "PWD"=>"C14201805","CharacterSet" => "UTF-8");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

  
  $consulta = "SELECT * FROM dbo.V_INDICADORES_MOVISTAR_PERU_DIA where [Periodo]='$s_meses' ".$filtro." order by [Fecha]";
  $result=sqlsrv_query($conn, $consulta );

  $tabla1 =  "";
  // Motrar el resultado de los registro de la base de datos
  // Encabezado de la tabla
  echo "<table borde='2'>";
  echo "<tr>";
  echo "<th>Nombre</th>";
  echo "<th>Edad</th>";
  echo "</tr>";
  
  // Bucle while que recorre cada registro y muestra cada campo en la tabla.
    while($row=sqlsrv_fetch_array($resultado))
  {
    echo "<tr>";
    echo "<td>" . $row['nombre'] . "</td><td>" . $row['edad'] . "</td>";
    echo "</tr>";
  }
  
  echo "</table>"; // Fin de la tabla
  // cerrar conexión de base de datos
$tabla_fin =  "";        



$tabla_json = $tabla1.$rows_tabla.$tabla_fin;



echo json_encode($tabla_json);

?>