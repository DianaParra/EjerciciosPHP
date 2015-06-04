<?php

$conexion=mysql_connect("localhost","Diana","Diana");

//seleccionar BD
mysql_select_db("agenda".$conexion);

//realizo peticion
$peticion = mysql_query("SELECT * FROM miagenda");

var_dump($peticion);
//listo los elementos de la BD
while ($fila = mysql_fetch_array($peticion)) {
	
	echo $fila['nombre']."".$fila['apellido']."".$fila['edad']."".$fila['telefono'];
	echo "<br>";
}


//cerrar la conexion 
mysql_close($conexion);

?>