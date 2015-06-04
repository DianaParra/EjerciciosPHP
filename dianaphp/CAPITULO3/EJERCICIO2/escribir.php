<?php

$archivo="text.txt";

$contenido="este es mi contenido";
$manejador=fopen($archivo,'w+');
fwrite($manejador, $contenido);
//a+ si añadimos texto al final 

?>
