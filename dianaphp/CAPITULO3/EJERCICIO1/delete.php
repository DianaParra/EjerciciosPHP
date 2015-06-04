<?php

$conexion=mysql_connect("localhost","Diana","Diana");

if (!$conexion) {
	
	die('no se a podido conecta '.mysql_error());


}

mysql_select_db("agenda",$conexion);

mysql_query("DELETE FROM  miagenda WHERE nombre='ximena' AND apellido='valero'");

mysql_close($conexion);
?>