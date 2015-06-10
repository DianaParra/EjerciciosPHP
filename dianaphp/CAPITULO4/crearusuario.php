<?php

session_start();

$contador = 0;

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];

 $conexion= new PDO('sqlite:favoritos.db');

$consultar="SELECT * FROM usuarios";

$resultado = $conexion-> query($consultar);

foreach ($resultado as $fila) {
	
	if ($fila['usuario']==$usuario) {

 $contador++;

	}else{}
}
$conexion=NULL;



if ($contador == 0) {
	

 $conexion= new PDO('sqlite:favoritos.db');

 $consultar=
"INSERT INTO usuarios values ('$usuario','$contraseña','$nombre','$apellido','$edad',3);

";

$resultado = $conexion-> exec($consultar);
 $conexion = NULL;

echo '
<html>
<head>
<meta http-equiv="REFRESH" content="0;url=gestionusuario.php">
</head>
</html>
';}else{

	echo "el nombre de usuario ya existe";
}
?>