<?php
session_start();

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

 $conexion= new PDO('sqlite:favoritos.db');

 $consultar="SELECT * FROM usuarios";

 $resultado=$conexion-> query($consultar);

 foreach ($resultado as $fila) {

$usuariobd=$fila['usuario'];
$contraseñabd=$fila['contraseña'];
$permisosbd=$fila['permisos'];
if ($usuario==$usuariobd & $contraseña==$contraseñabd) {

$_SESSION['usuario']=$usuario;
$_SESSION['contraseña']=$contraseña;
$_SESSION['permisos']=$permisosbd;
echo '

<html>
<head>
<meta http-equiv="REFRESH" content="0;url=principal.php">
</head>
</html>


';
	
}else{


}


 }
 $conexion=NULL;

?>