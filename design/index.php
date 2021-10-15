
<?php
session_start();
include '../connection/server.php';   

if(isset($_SESSION['user'])) {

	include 'indexluis.php';

}else{
	echo '<script> window.location="../index.php"; </script>';
}

	?>
