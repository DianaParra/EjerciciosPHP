<?php
session_start();

 $conexion= new PDO('sqlite:favoritos.db');

 $usuario=$_SESSION['usuario'];
 $contraseña=$_SESSION['contraseña'];

 $usuario=$_GET['usuario'];
 $contraseña=$_GET['contraseña'];
 $nombre=$_GET['nombre'];
 $apellido=$_GET['apellido'];
 $edad=$_GET['edad'];

$consultar ="DELETE FROM usuarios WHERE usuario='".$usuario."' AND contraseña='".$contraseña."' AND nombre='".$nombre."' AND apellido='".$apellido."' AND edad='".$edad."'";

$resultado=$conexion-> query($consultar);

$conexion = NULL;
echo '
<html>
<head>
<meta http-equiv="REFRESH" content="0;url=gestionusuario.php">
</head>
</html>
';

?>