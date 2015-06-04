<?php

@$tuip=getenv(remote_addr);

echo"tu ip es: ".$tuip;

echo "<br>";
$tunavegador = $_SERVER["http_user_agent"];

echo "y tu sistema operativo es :".$tunavegador;

?>