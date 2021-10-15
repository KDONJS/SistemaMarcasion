<?php

	$s_meses = $_POST['s_meses'];



session_start();
include '../../../../../../../../serv.php';

$serverName = "10.166.90.50"; //serverName\instanceName
$connectionInfo = array( "Database"=>"PORTAL", "UID"=>"UserPortal", "PWD"=>"Logaritmo10+");
$conn = sqlsrv_connect( $serverName, $connectionInfo);


if($s_meses=='DEFAULT') {
$s_meses = 'FEBRERO 2018';

}else {
}

/*ESTO ES LA CONSULTA*/
$sql = "SELECT * FROM dbo.V_ESTADISTICOS_MOVISTAR_PERU_PORTAL where [Periodo]='$s_meses' and [Nombre_del_Programa] = 'CORTE POR ROBO PREPAGO' order by [Fecha]";



$result=sqlsrv_query($conn, $sql );



$tabla1 =  "";
            /*Y ahora todos los registros */
          while($row=sqlsrv_fetch_array($result))
            {
       			##########################################################################################################
			/* ---------------------------------------------------------------------------------------------------------------
       		Condicionales segun intervalo KPI : Desviación
       		------------------------------------------------------------------------------------------------------------------ i*/
			
			$des = $row['Desviacion'];
			$des = str_replace('%', '', $des);
			$des = (double) $des;
			 if (
			 	# Intervalo Codigo verde -------------------------------------------------------- i
			 	$des>=-10 && $des<10
			 	# Intervalo Codigo verde -------------------------------------------------------- f
			 ) 
			 {
			 	$Desviacion1 = "<td><img src='img/verde.png'>&nbsp;".$row['Desviacion']." </td>";
			 }
			if (
				# Intervalo Codigo Amarillo -------------------------------------------------------- i
				$des<-10
				# Intervalo Codigo Amarillo -------------------------------------------------------- f
			   ) 
			{
				$Desviacion1 = "<td><img src='img/amar.png'>&nbsp;".$row['Desviacion']." </td>";
			}
			 if (
			 	# Intervalo Codigo rojo -------------------------------------------------------- i
			 	$des>=10
			 	# Intervalo Codigo rojo -------------------------------------------------------- f
			 ) 
			 {
			 	$Desviacion1 = "<td><img src='img/rojo.png'>&nbsp;".$row['Desviacion']." </td>";
			 }
		         ##########################################################################################################
 			/* ---------------------------------------------------------------------------------------------------------------
       		Condicionales segun intervalo KPI : Nivel de Servicio 
       		------------------------------------------------------------------------------------------------------------------*/
			
			$serv = $row['Nivel_de_Servicio'];
			$serv = str_replace('%', '', $serv);
			$serv = (double) $serv;
			 if (
			 	# Intervalo Codigo verde -------------------------------------------------------- i
			 	$serv>=85
			 	# Intervalo Codigo verde -------------------------------------------------------- f
			    )
			 {
			 	$nivel_servicio = "<td><img src='img/verde.png'>&nbsp;".$row['Nivel_de_Servicio']."</td>";
			 }
			if (
				# Intervalo Codigo amar -------------------------------------------------------- i
				$serv>=76.5 && $serv<85
				# Intervalo Codigo amar -------------------------------------------------------- f
			   )
			 {
			 	$nivel_servicio = "<td><img src='img/amar.png'>&nbsp;".$row['Nivel_de_Servicio']." </td>";
			 }
			 if (
			 	# Intervalo Codigo rojo -------------------------------------------------------- i
			 	$serv<=76.5
			 	# Intervalo Codigo rojo -------------------------------------------------------- f
			    )
			 {
			 	$nivel_servicio = "<td><img src='img/rojo.png'>&nbsp;".$row['Nivel_de_Servicio']." </td>";
			 }
		         ##########################################################################################################
 			/* ---------------------------------------------------------------------------------------------------------------
       		Condicionales segun intervalo KPI : TMO
       		------------------------------------------------------------------------------------------------------------------*/ 			

			$tmo = $row['TMO'];
			$tmo = (double) $tmo;
			 if (
			 	# Intervalo Codigo verde -------------------------------------------------------- i
			 	$tmo>=276.3 && $tmo<337.7
			 	# Intervalo Codigo verde -------------------------------------------------------- f
			 	) 
			 {
			 	$tmo1 = "<td><img src='img/verde.png'>".$row['TMO']." </td>";
			 }
			if (
				# Intervalo Codigo amar -------------------------------------------------------- i
				$tmo<276.3
				# Intervalo Codigo amar -------------------------------------------------------- f
			   )
			 {
			 	$tmo1 = "<td><img src='img/amar.png'>".$row['TMO']." </td>";
			 }
			 if (
			 	# Intervalo Codigo rojo -------------------------------------------------------- i
			 	$tmo>=337.7
			 	# Intervalo Codigo rojo -------------------------------------------------------- f
				) 
			 {
			 	$tmo1 = "<td><img src='img/rojo.png'>".$row['TMO']." </td>";
			 }
		         ##########################################################################################################
 			/* ---------------------------------------------------------------------------------------------------------------
       		Condicionales segun intervalo KPI : Absentismo
       		------------------------------------------------------------------------------------------------------------------*/ 

			$abs = $row['P_Absentismo'];
			$abs = str_replace('%', '', $abs);
			$abs = (double) $abs;
			 if (
			 	# Intervalo Codigo Verde -------------------------------------------------------- i
			 	$abs<8
			 	# Intervalo Codigo Verde -------------------------------------------------------- f
			    ) 
			 {
			 	$abs1 = "<td><img src='img/verde.png'>&nbsp;&nbsp;&nbsp;".$row['P_Absentismo']."</td>";
			 }
			if (
				# Intervalo Codigo amar -------------------------------------------------------- i
				$abs>=8 && $abs<8.8
				# Intervalo Codigo amar -------------------------------------------------------- f
			   )
			 {
			 	$abs1 = "<td><img src='img/amar.png'>&nbsp;&nbsp;&nbsp;".$row['P_Absentismo']." </td>";
			 }
			 if (
			 	# Intervalo Codigo rojo -------------------------------------------------------- i
			 	$abs>=8.8
			 	# Intervalo Codigo rojo -------------------------------------------------------- f
			    )
			 {
			 	$abs1 = "<td><img src='img/rojo.png'>&nbsp;&nbsp;&nbsp;".$row['P_Absentismo']." </td>";
			 }

		         ##########################################################################################################
 			/* ---------------------------------------------------------------------------------------------------------------
       		Condicionales segun intervalo KPI : Not Ready
       		------------------------------------------------------------------------------------------------------------------*/ 

			$notr = $row['P_Not_Ready'];
			$notr = str_replace('%', '', $notr);
			$notr = (double) $notr;
			 if (
			 	# Intervalo Codigo Verde -------------------------------------------------------- i
			 	$notr<=2
			 	# Intervalo Codigo Verde -------------------------------------------------------- f
			    )
			 {
			 	$notr1 = "<td><img src='img/verde.png'>&nbsp;&nbsp;".$row['P_Not_Ready']."</td>";
			 }
			if (
				# Intervalo Codigo amar -------------------------------------------------------- i
				$notr>2 && $notr<2.2
				# Intervalo Codigo amar -------------------------------------------------------- f
			   )
			 {
			 	$notr1 = "<td><img src='img/amar.png'>&nbsp;&nbsp;".$row['P_Not_Ready']." </td>";
			 }
			 if (
			 	# Intervalo Codigo rojo -------------------------------------------------------- i
			 	$notr>=2.2
			 	# Intervalo Codigo rojo -------------------------------------------------------- f
			    )
			 {
			 	$notr1 = "<td><img src='img/rojo.png'>&nbsp;&nbsp;".$row['P_Not_Ready']." </td>";
			 }

		         ##########################################################################################################
 			/* ---------------------------------------------------------------------------------------------------------------
       		Condicionales segun intervalo KPI : Utilizacion
       		------------------------------------------------------------------------------------------------------------------*/ 

			$util = $row['P_Utilizacion'];
			$util = str_replace('%', '', $util);
			$util = (double) $util;
			 if (
			 	# Intervalo Codigo Verde -------------------------------------------------------- i
			 	$util>=94
			 	# Intervalo Codigo Verde -------------------------------------------------------- f
			    )
			 {
			 	$util1 = "<td><img src='img/verde.png'>&nbsp;&nbsp;&nbsp;".$row['P_Utilizacion']."</td>";
			 }
			if (
				# Intervalo Codigo amar -------------------------------------------------------- i
				$util>=84.6 && $util<94
				# Intervalo Codigo amar -------------------------------------------------------- f
			   )
			 {
			 	$util1 = "<td><img src='img/amar.png'>&nbsp;&nbsp;&nbsp;".$row['P_Utilizacion']." </td>";
			 }
			 if (
			 	# Intervalo Codigo rojo -------------------------------------------------------- i
			 	$util<84.6
			 	# Intervalo Codigo rojo -------------------------------------------------------- f
			    )
			 {
			 	$util1 = "<td><img src='img/rojo.png'>&nbsp;&nbsp;&nbsp;".$row['P_Utilizacion']." </td>";
			 }
		         ##########################################################################################################
 			/* ---------------------------------------------------------------------------------------------------------------
       		cabeceras de tabla - Impresion de Resultados
       		------------------------------------------------------------------------------------------------------------------*/ 
			$rows_tabla.="
			<tr>

			<td class='sticky-cell' style='text-align:center;' >" . $row['Fecha'] . "</td>

			<td class='a'>" . $row['Llamadas_Previstas'] . "</td>
			<td class='a'>" . $row['Llamadas_Recibidas'] . "</td>"
			. $Desviacion1 . 
			"<td class='a'>" . $row['Llamadas_Atendidas'] . "</td>
			<td class='a'>" . $row['Llamadas_Atendidas_en_Umbral'] . "</td>
			<td class='a'>" . $row['Llamadas_Abandonadas'] . "</td>
			<td class='a'>" . $row['Llamadas_Abandonadas_en_Umbral'] . "</td>
			<td class='a'>" . $row['Llamadas_Cleared'] . "</td>
			<td class='a'>" . $row['Llamadas_Diference'] . "</td>
			<td class='a'>" . $row['Nivel_de_Atencion'] . "</td>"
			 . $nivel_servicio . 
			   $tmo1 . 
			"<td class='a'>" . $row['TME'] . "</td>
			<td class='a'>" . $row['Llamadas_Cortas'] . "</td>
			<td class='a'>" . $row['P_Llamadas_Cortas'] . "</td>
			<td class='a'>" . $row['Llamadas_Salientes'] . "</td>
			<td class='a'>" . $row['P_Llamadas_Salientes'] . "</td>
			<td class='a'>" . $row['TMO_Saliente'] . "</td>
			<td class='a'>" . $row['Horas_Requeridas'] . "</td>																			
			<td class='a'>" . $row['Horas_Convocadas'] . "</td>
			<td class='a'>" . $row['Horas_Presenciales'] . "</td>
			<td class='a'>" . $row['Horas_de_Tardanza'] . "</td>
			<td class='a'>" . $row['Horas_de_Absentismo'] . "</td>
			<td class='a'>" . $row['Horas_de_Absentismo_Remunerado'] . "</td>
			<td class='a'>" . $row['Horas_de_Absentismo_No_Remunerado'] . "</td>
			<td class='a'>" . $row['P_Tardanza'] . "</td>"
			. $abs1 .
			"<td class='a'>" . $row['P_Absentismo_Remunerado'] . "</td>
			<td class='a'>" . $row['P_Absentismo_No_Remunerado'] . "</td>
			<td class='a'>" . $row['Horas_de_Conexion'] . "</td>
			<td class='a'>" . $row['P_Conexion'] . "</td>
			<td class='a'>" . $row['Horas_de_Avail'] . "</td>
			<td class='a'>" . $row['P_Avail'] . "</td>
			<td class='a'>" . $row['Horas_de_Not_Ready'] . "</td>"
			. $notr1 .
			"<td class='a'>" . $row['Horas_de_Hold'] . "</td>
			<td class='a'>" . $row['P_Hold'] . "</td>
			<td class='a'>" . $row['Horas_de_ACW'] . "</td>
			<td class='a'>" . $row['P_ACW'] . "</td>
			<td class='a'>" . $row['P_Ocupacion'] . "</td>"
			. $util1 . 
			"<td class='a'>" . $row['Atendidas_COPC'] . "</td>
			<td class='a'>" . $row['Rellamadas_COPC'] . "</td>
			<td class='a'>" . $row['Transferencias_COPC'] . "</td>
			<td class='a'>" . $row['P_Rellamadas'] . "</td>
			<td class='a'>" . $row['P_Transferencias'] . "</td>
			<td class='a'>" . $row['Llamadas_Abordadas'] . "</td>
			<td class='a'>" . $row['Ventas'] . "</td>
			<td class='a'>" . $row['P_Abordaje'] . "</td>
			<td class='a'>" . $row['P_Efectividad'] . "</td>

			</tr>
			";

}

$tabla_fin =  "";        



$tabla_json = $tabla1.$rows_tabla.$tabla_fin;



echo json_encode($tabla_json);

   ?>