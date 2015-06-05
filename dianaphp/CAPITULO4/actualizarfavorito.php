<?php 
session_start();

 $conexion= new PDO('sqlite:favoritos.db');

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contraseña'];

$titulo=$_POST['titulo'];
$direccion=$_POST['direccion'];
$categoria=$_POST['categoria'];
$comentario=$_POST['comentario'];
$valoracion=$_POST['valoracion'];

$tituloantiguo=$_SESSION['titulo'];

$consultar="UPDATE favoritos SET titulo='".$titulo."'direccion='".$direccion."' categoria='".$categoria."' comentario='".$comentario."'valoracion='".$valoracion."'";

$resultado=$conexion-> query($consultar);
$conexion = NULL;
echo '

<html>
<head>
<meta http-equiv="REFRESH" content="0;url=principal.php">
</head>
</html>
';



?>