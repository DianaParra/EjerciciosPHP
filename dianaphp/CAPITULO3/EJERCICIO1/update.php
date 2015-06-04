<?php

$conexion=mysql_connect("localhost","Diana","Diana");

if (!$conexion) {
	
	die('no se a podido conecta '.mysql_error());


}
mysql_select_db("agenda",$conexion);

mysql_query("UPDATE miagenda SET edad=24 WHERE nombre='Lorena' AND apellido='diaz'");

mysql_close($conexion);

?>