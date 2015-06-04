<?php

$conexion= new PDO('sqlite:biblioteca.db') or die('ha sido imposible establecer la conexion');

$consulta= "DELETE FROM discos WHERE artistas='h2'";

$resultado=$conexion-> query($consulta);

$conexion =NULL;


?>