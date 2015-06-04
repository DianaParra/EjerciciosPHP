<?php 

$conexion=mysql_connect("localhost","Diana","Diana");

if (!$conexion) {
	
	die('no se a podido conecta '.mysql_error());


}

mysql_select_db("agenda",$conexion);

$peticion=mysql_query("SELECT*FROM miagenda WHERE nombre='ximena'");

while ($fila=mysql_fetch_array($peticion)) {
	
	echo $fila['nombre']."".$fila['apellido']."".$fila['edad']."".$fila['telefono'];
    echo "<br>";
}

mysql_close($conexion);
?>