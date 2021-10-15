<?php

	$s_meses = $_POST['s_meses'];
	$s_anio = $_POST['s_anio'];
	$periodo = $s_anio.''.$s_meses;
	$s_programa = $_POST['s_programa'];


session_start();
include '../../../../3.-Conexiones/1.-Servidor.php';


if($s_meses=='DEFAULT') {
$periodo = ' 2018';

}

else

{
}

//ESTO ES LA CONSULTA/
$sql = 
"
SELECT
[Periodo],
[Documento],
CASE WHEN DATEPART(WEEKDAY, [Fecha]) = 1 THEN 'Domingo' ELSE 
CASE WHEN DATEPART(WEEKDAY, [Fecha]) = 2 THEN 'Lunes' ELSE 
CASE WHEN DATEPART(WEEKDAY, [Fecha]) = 3 THEN 'Martes' ELSE 
CASE WHEN DATEPART(WEEKDAY, [Fecha]) = 4 THEN 'Miércoles' ELSE 
CASE WHEN DATEPART(WEEKDAY, [Fecha]) = 5 THEN 'Jueves' ELSE 
CASE WHEN DATEPART(WEEKDAY, [Fecha]) = 6 THEN 'Vienes' ELSE 
'Sábado' END END END END END END  + FORMAT(DATEPART(DAY, [Fecha]),' 00') AS [Dia], 
[Horario_Programado], 
[Hora_de_Ingreso], 
[Tipo_de_Asistencia], 
[Tiempo_de_Tardanza] 
FROM [V_ASISTENCIA]
WHERE [Periodo] = '$periodo' 
AND [Documento] = '$_SESSION[Documento]'
ORDER BY [Fecha] "

;


$result=sqlsrv_query($conn, $sql );


$tabla1 =  "";
            /*Y ahora todos los registros */
          while($row=sqlsrv_fetch_array($result))
            {

	
			$rows_tabla.="

			<tr>

			<td class='sticky-cell' style='text-align:center;' >" . $row['Dia'] . "</td>

			<td class='a'>" . $row['Horario_Programado'] . "</td>
			<td class='a'>" . $row['Hora_de_Ingreso'] . "</td>		
			<td class='a'>" . $row['Tipo_de_Asistencia'] . "</td>
			<td class='a'>" . $row['Tiempo_de_Tardanza'] . "</td>
			</tr>
			";

}

$tabla_fin =  "";        



$tabla_json = $tabla1.$rows_tabla.$tabla_fin;



echo json_encode($tabla_json);

   ?>














