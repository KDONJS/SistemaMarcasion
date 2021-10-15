
<?php
session_start();

$serverName = "10.252.194.193"; //serverName\instanceName
$connectionInfo = array( "Database"=>"SEGUIMIENTO_CIA", "UID"=>"usrCIA", "PWD"=>"C14201805","CharacterSet" => "UTF-8");
$conn = sqlsrv_connect( $serverName, $connectionInfo);


if(isset($_SESSION['user'])) {?>








<?php 


////Obteniendo registros de la base de datos a traves de una consulta SQL 
$consulta="SELECT * FROM WhoIsActive"; 
$resultado=sqlsrv_query($conn, $query);


while($row=sqlsrv_fetch_array($resultado)){ 


echo "nombre: ".$rows[0]."<br>"; 
echo "Email"."$rows[1]."<br>"; 
} 
?> 