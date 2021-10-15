<?php

session_start();
include '../../../connection/server.php';

if(isset($_SESSION['user']))
	//Crear la conexión
	$srv="DESKTOP-9FG6RED\SQLEXPRESS";
	$opc=array("Database"=>"PortalCDG", "UID"=>"PortalCDG", "PWD"=>"password","CharacterSet" => "UTF-8");
	$con=sqlsrv_connect($srv,$opc) or die(print_r(sqlsrv_errors(), true));

  $dni = $_SESSION['usuario'];

  $sql=
    "SELECT * 
        FROM    z_03_99_Resumen_Diario_2  
        where   dni = '$dni'
        order by fecha
    ; 
  ";

  $res=sqlsrv_query($con,$sql);

  $icon_green = '<svg width="15" height="15" viewBox="0 0 24 24" style="fill: green;"><path d="M21.856 10.303c.086.554.144 1.118.144 1.697 0 6.075-4.925 11-11 11s-11-4.925-11-11 4.925-11 11-11c2.347 0 4.518.741 6.304 1.993l-1.422 1.457c-1.408-.913-3.082-1.45-4.882-1.45-4.962 0-9 4.038-9 9s4.038 9 9 9c4.894 0 8.879-3.928 8.99-8.795l1.866-1.902zm-.952-8.136l-9.404 9.639-3.843-3.614-3.095 3.098 6.938 6.71 12.5-12.737-3.096-3.096z"></path></svg>';
  $icon_orannge = '<svg width="15" height="15" viewBox="0 0 24 24" style="fill: orange;"><path d="M21.856 10.303c.086.554.144 1.118.144 1.697 0 6.075-4.925 11-11 11s-11-4.925-11-11 4.925-11 11-11c2.347 0 4.518.741 6.304 1.993l-1.422 1.457c-1.408-.913-3.082-1.45-4.882-1.45-4.962 0-9 4.038-9 9s4.038 9 9 9c4.894 0 8.879-3.928 8.99-8.795l1.866-1.902zm-.952-8.136l-9.404 9.639-3.843-3.614-3.095 3.098 6.938 6.71 12.5-12.737-3.096-3.096z"></path></svg>';
  $icon_red = '<svg width="15" height="15" viewBox="0 0 24 24" style="fill: red;"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.151 17.943l-4.143-4.102-4.117 4.159-1.833-1.833 4.104-4.157-4.162-4.119 1.833-1.833 4.155 4.102 4.106-4.16 1.849 1.849-4.1 4.141 4.157 4.104-1.849 1.849z"></path></svg>';

 

  while($row=sqlsrv_fetch_array($res))
  {
        if( $row['AHT'] < 600 ){
            $tableIcoaht =  $icon_green;
          }else if ($row['AHT'] >= 600 && $row['AHT'] < 900  ) {
            $tableIcoaht =  $icon_orannge;
          }else{
            $tableIcoaht =  $icon_red;
          };

          if( $row['NPS'] < 0 ){
            $tableIcoNps =  $icon_red;
          }else if ($row['NPS'] >= 0 && $row['NPS'] <59) {
            $tableIcoNps =  $icon_orannge;            
          }else{
            $tableIcoNps =  $icon_green;
          };

          if( $row['CSAT'] < 0 ){
            $tableIcoCsat =  $icon_red;
          }else if ($row['CSAT'] >= 0 && $row['CSAT'] <59) {
            $tableIcoCsat =  $icon_orannge;
          }else{
            $tableIcoCsat =  $icon_green;
          };

        $data ['data'] [] = array (
                                    'DNI' => $row['DNI'],
                                    'AGENTE'  => $row['AGENTE'],
                                    'SUPERVISOR'  => $row['SUPERVISOR'],
                                    'Atendidas' => $row['Atendidas'],
                                    'Atendidas_30'  => $row['Atendidas_30'],
                                    'Abandonada'  => $row['Abandonada'],
                                    'Llamada_Salida'  => $row['Llamada_Salida'],
                                    'AHT' => $tableIcoaht.' '.$row['AHT'],
                                    'AHT_CHAT'  => $row['AHT_CHAT'],
                                    'AHT_PHONE' => $row['AHT_PHONE'],
                                    'AHT_EMAIL' => $row['AHT_EMAIL'],
                                    'AHT_MESSAGING' => $row['AHT_MESSAGING'],
                                    'Recontacto'  => $row['Recontacto'],
                                    'Paymentlink' => $row['Paymentlink'],
                                    'Revenue' => $row['Revenue'],
                                    'NPS' => $tableIcoNps.' '.$row['NPS'],
                                    'CSAT'  => $tableIcoCsat.' '.$row['CSAT'],
                                    'FCR' => $row['FCR'],
                                  );
    
  }

  echo json_encode ( $data );

sqlsrv_close($con);
?>


