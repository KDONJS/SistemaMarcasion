<?php
	session_start();  //aqui ya lo estas validando en el login ... 
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
</head>
<body>
<?php
		
	require 'server.php';
			
		if(isset($_POST['login']))
			{
				$usuario = $_POST['user'];
				$pw = $_POST['pw'];
				$sql = " SELECT * FROM dbo.z_USUARIO WHERE [usuario]='$usuario'	AND [pw]='$pw' ";
				$params = array();
				$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
				$log = sqlsrv_query( $conn, $sql , $params, $options );
				$cantidad =  sqlsrv_num_rows($log);

			if (sqlsrv_num_rows($log)>0) 
				{
							$perfil_id='';								  
								while($row = sqlsrv_fetch_array( $log, SQLSRV_FETCH_ASSOC) ) 
									{
										$_SESSION["user"] = $row['usuario'];
										$_SESSION["usuario"] = $row['usuario'];
										$_SESSION["Apaterno"] = $row['Apaterno'];
										$_SESSION["Amaterno"] = $row['Amaterno'];
										$_SESSION["Nombres"] = $row['nombres'];								
										$_SESSION["cargo"] = $row['cargo'];
										$_SESSION["funcion"] = $row['funcion'];
										$_SESSION["nombre_perfil"] = $row['nombre_perfil'];
										$perfil_id = $row['id_perfil'];
									}

							$sql="SELECT b.nombre as nombre_nivel1, b.url as url_nivel1 ,b.nivel_1 AS id_nivel1,b.icono,b.frase ,
								c.nombre as nombre_nivel2, c.url as url_nivel2 ,c.nivel_2 as id_nivel2,c.icono as icono_nivel2,
								d.nombre as nombre_nivel3, d.url as url_nivel3 ,d.nivel_3 as id_nivel3,d.icono as icono_nivel3
								FROM[PortalCDG].[dbo].[z_PERMISOS] a 
								INNER JOIN   [PortalCDG].[dbo].[z_NIVEL_1] b 	ON 	a.nivel_1 = b.nivel_1 
								LEFT JOIN   [PortalCDG].[dbo].[z_NIVEL_2] c	ON 	a.nivel_2 = c.nivel_2 and b.nivel_1=c.nivel_1
								LEFT JOIN   [PortalCDG].[dbo].[z_NIVEL_3] d	ON 	a.nivel_1 =d.nivel_1 and a.nivel_3 = d.nivel_3 and c.nivel_2=d.nivel_2
								WHERE	a.id_perfil= '$perfil_id'   ORDER BY b.nivel_1,c.nivel_2,d.nivel_3";

							$params = array();
							$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );				
							$log2 = sqlsrv_query( $conn, $sql , $params, $options );				
							$menu = array();			

							while( $row = sqlsrv_fetch_array( $log2, SQLSRV_FETCH_ASSOC) ) 

							{

								array_push($menu, array(
													'id' => $row['id_nivel1']
													,'nombre'=>$row['nombre_nivel1']
													,'url'=>$row['url_nivel1']
													,'icono'=> $row['icono']
													,'frase'=> $row['frase']
													,'nombre_nivel2'=>$row['nombre_nivel2']
													,'url_nivel2'=>$row['url_nivel2']
													,'id_nivel2'=> $row['id_nivel2']
													,'icono_nivel2'=> $row['icono_nivel2']
													,'nombre_nivel3'=> $row['nombre_nivel3']
													,'url_nivel3'=> $row['url_nivel3']
													,'id_nivel3'=> $row['id_nivel3']
													,'icono_nivel3'=> $row['icono_nivel3']

													));
						  	}

							$_SESSION["menu"] = $menu;
			

					  	echo 'Iniciando sesión para '.$_SESSION["user"].' <p>';
						echo '<script> window.location="/design/index.php"; </script>';
				}
							else{
								echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
								echo '<script> window.location="/index.php"; </script>';
								}
		}
?>	
</body>
</html>