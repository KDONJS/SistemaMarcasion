<?php
	
$serverName = "DESKTOP-9FG6RED\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = 

               array( 
                         "Database"=>"PortalCDG", 
                         "UID"=>"PortalCDG", 
                         "PWD"=>"password",
                         "CharacterSet" => "UTF-8"
                    );

$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}




?>


