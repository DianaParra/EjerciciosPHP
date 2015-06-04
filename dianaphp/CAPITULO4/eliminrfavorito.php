<?php

session_start();

 $conexion= new PDO('sqlite:favoritos.db');

 $usuario=$_SESSION['usuario'];
 $contraseña=$_SESSION['contraseña'];

 $titulo=$_GET['titulo'];
 $direccion=$_GET['direccion'];
 $categoria=$_GET['categoria'];
 $comentario=$_GET['comentario'];
 $valoracion=$_GET['valoracion'];

$consultar ="DELETE FROM favoritos WHERE usuario='".$usuario."' AND contraseña='".$contraseña."' AND titulo='".$titulo."' AND direccion='".$direccion."' AND categoria='".$categoria."' AND comentario='".$comentario."' AND valoracion='".$valoracion."'";

$resultado=$conexion-> query($consultar);

$conexion = NULL;


?>