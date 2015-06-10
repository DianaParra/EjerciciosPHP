<?php

session_start();

$utc=date('U');
$anio=date('Y');
$mes=date('m');
$dia=date('d');
$hora=date('H');
$minuto=date('i');
$segundo=date('s');

$usuariolog=$_SESSION['usuario'];
$contraseñalog=$_SESSION['contraseña'];

@$ip = getenv(REMOTE_ADDR);
$navegador=$_SERVER["HTTP_USER_AGENT"];

 $conexion= new PDO('sqlite:favoritos.db');

  $consultar=
"INSERT INTO usuarios values ('$utc','$anio','$mes','$dia','$hora','$minuto','$segundo','$usuariolog','$contraseñalog','$ip','$navegador');

";


$resultado = $conexion-> exec($consultar);
 $conexion = NULL;


?>