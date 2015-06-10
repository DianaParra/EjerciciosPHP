<?php
session_start();
$codigo=$_SESSION['permisos'];

if ($codigo==1) {

	echo "pulsa <a href='verlogs.php'>Aqui</a>para ver logs<br/>";
	echo "pulsa <a href='gestionusuario.php'>Aqui</a>para gestionar los usuarios <br/>";
	
}else{

	echo '
<html>
<head>
<meta http-equiv="REFRESH" content="0;url=index.php">
</head>
</html>
';
}


?>