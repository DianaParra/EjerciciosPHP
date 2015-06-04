<?php

 $conexion= new PDO('sqlite:biblioteca.db') or die('ha sido imposible establecer la conexion');

$consulta= "UPDATE  discos SET artistas='h2' WHERE artistas='quein'";

$resultado=$conexion-> query($consulta);

$conexion =NULL;




?>