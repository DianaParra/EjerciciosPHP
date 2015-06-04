<?php

 $conexion= new PDO('sqlite:biblioteca.db') or die('ha sido imposible establecer la conexion');

 $consultar='


CREATE TABLE discos (


	artistas char(20) not null,
	disco char(40),
	anio integer
)';


$resultado=$conexion-> exec($consultar);

?>