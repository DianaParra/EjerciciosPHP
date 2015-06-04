<?php

$conexion= new PDO('sqlite:biblioteca.db');

$consultar =
"INSERT INTO discos('artistas','disco','anio') VALUES ('queen','queen',1997);
 INSERT INTO discos('artistas','disco','anio') VALUES ('queen','queenII',1987);
 INSERT INTO discos('artistas','disco','anio') VALUES ('h2','boy',1887);

";

$resultado=$conexion-> exec($consultar);
$conexion=NULL;
?>