<?php

session_start();
//crea variables
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contraseña'];

//var_dump($_SESSION);
//var_dump($_POST);

$addtitulo = $_POST['titulo'];
$adddireccion = $_POST['direccion'];
$addcategoria = $_POST['categoria'];
$addcomentario = $_POST['comentario'];
$addvaloracion = $_POST['valoracion'];

 $conexion= new PDO('sqlite:favoritos.db');
$consultar = 
"INSERT INTO favoritos VALUES
('$usuario','$contrasena','$addtitulo','$adddireccion','$addcategoria','$addcomentario','$addvaloracion')
 ";
//ejecuto la consulta
$resultado = $conexion-> exec($consultar);
//cerrar coneccion
$conexion =  NULL;
echo '

<html>
<head>
<meta http-equiv="REFRESH" content="0;url=principal.php">
</head>
</html>
';
?>