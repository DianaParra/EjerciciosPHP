
<?php

$conexion=mysql_connect("localhost","Diana","Diana");

if (!$conexion) {
	# code...
	die('no se a podido conecta '.mysql_error());


}



if (mysql_query("CREATE DATABASE  Agenda",$conexion)) {

echo "se ha creado la base de datos  ";

}else{

	echo "no se ha podido crear la base de datos por el siguiente error".mysql_error();
}


//preparar peticion
mysql_select_db("Agenda",$conexion);
$sql = "CREATE TABLE miagenda
(
personaID int not null auto_increment,
PRIMARY KEY (personaID),
nombre varchar(14),
apellido varchar(15),
edad int,
telefono int
)";
//ejecuto la ejecucion 
mysql_query($sql,$conexion);

mysql_close($conexion);	

?>