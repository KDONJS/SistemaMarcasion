<?php
	//Crear la conexión
	$srv="DESKTOP-9FG6RED\SQLEXPRESS";
	$opc=array("Database"=>"PortalCDG", "UID"=>"PortalCDG", "PWD"=>"password");
	$con=sqlsrv_connect($srv,$opc) or die(print_r(sqlsrv_errors(), true));
	$sql="SELECT * FROM [dbo].[demo_2];";
	$res=sqlsrv_query($con,$sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
	<table>
		<tr>
			<td>IdUsuario</td>
			<td>[C&eacute;dula]</td>
			<td>[Nombre]</td>
			<td>[Apellido]</td>
			<td>[Tel&eacute;fono]</td>
			<td>[Email]</td>
		</tr>
		<?php
		if(!$res)
		{?>
		<tr>
			<td colspan="6">No hay datos para mostrar</td>
		</tr>
		<?php
		}
		else
		{
			while($row=sqlsrv_fetch_array($res))
			{?>
			<tr>
				<td><?php echo $row['idUsuario'];?></td>
				<td><?php echo $row['Cedula'];?></td>
				<td><?php echo $row['Nombre'];?></td>
				<td><?php echo $row['Apellido'];?></td>
				<td><?php echo $row['Telefono'];?></td>
				<td><?php echo $row['Email'];?></td>
			</tr>
			<?php
			}
		}
		sqlsrv_close($con);
		?>
	</table>
</body>
</html>
