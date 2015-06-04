<?php 

echo "<table border=> <tr> <td>disco </td><td>artistas</td><td>anio</td></tr>";


$conexion= new PDO('sqlite:biblioteca.db');

$consultar="SELECT * FROM discos WHERE artistas='queen' ORDER BY anio ";

$resultado=$conexion-> query($consultar);

foreach ( $resultado as $fila )
{
	echo "<tr><td>".$fila['disco']."</td><td>".$fila['artistas']."</td><td>".$fila['anio']."</td><td>";


	//echo $fila ['artistas']."".$fila['disco']."".$fila['anio']."<br>";

}


$conexion=NULL;



?>