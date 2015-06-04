<?php

session_start();

$primeravariable="hola";

$_SESSION['segundavariable']="adios";

echo $primeravariable;
echo "<a src='destino.php'> voy al destino</a>";
?>
