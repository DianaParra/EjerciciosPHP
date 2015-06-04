<?php

$conexion=mysql_connect("localhost","Diana","Diana");

if (!$conexion) {
	
	die('no se a podido conecta '.mysql_error());


}

mysql_select_db("agenda",$conexion);

mysql_query("INSERT INTO miagenda(nombre,apellido,edad,telefono)  VALUES ('Lorena','diaz',20,9834702234)");
mysql_close($conexion);

?>
