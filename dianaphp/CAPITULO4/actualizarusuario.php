<?php 
session_start();

 $conexion= new PDO('sqlite:favoritos.db');

$usuarioantiguo=$_SESSION['usuario'];

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];

$tituloantiguo=$_SESSION['titulo'];

$consultar="UPDATE usuarios SET
 usuario='".$usuario."',
 contraseña='".$contraseña."',
 nombre='".$nombre."',
 apellido='".$apellido."',
 edad='".$edad."' WHERE usuario='".$usuarioantiguo."'";

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