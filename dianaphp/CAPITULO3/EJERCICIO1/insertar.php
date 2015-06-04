<?php

$conexion=mysql_connect("localhost","Diana","Diana");


mysql_select_db("agenda",$conexion);

$result = mysql_query("INSERT INTO miagenda (nombre,apellido,edad,telefono) VALUES ('ximena','valero',30,312123434)");


mysql_close($conexion);


?>