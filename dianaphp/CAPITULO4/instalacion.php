<?php
//crea tabla de favoritos-----------


//conexion---------------

 $conexion= new PDO('sqlite:favoritos.db') or die('ha sido imposible establecer la conexion');

//crear tablas ----------------

$consultar='

CREATE TABLE favoritos(

	usuario char(43) not null,
	contraseña char(40) not null,
	titulo char(48) not null,
	direccion char(100) not  null,
	categoria char(40),
    comentario char(200),
    valoracion int


)';


//insertar contenido en la tabla --------

$resultado=$conexion-> exec($consultar);

//cerrar la conexion

$conexion=NULL;

//CONTENIDO DE PRUEBA PARA LA TABLA FAVORITOS----------
//establecer

 $conexion= new PDO('sqlite:favoritos.db') or die('ha sido imposible establecer la conexion');

//reparar

$consultar=


"INSERT INTO favoritos values ('diana','123','google','www.youtube.com','tecnologia','bienvenidos aqui','10');

";

//insertar


$resultado=$conexion-> exec($consultar);

//cerrar

$conexion=NULL;

//crea tabla de usuarios------------
//conexion

 $conexion= new PDO('sqlite:favoritos.db') or die('ha sido imposible establecer la conexion');

//crear tablas 
$consultar='

CREATE TABLE usuarios(

	usuario char(43) not null,
	contraseña char(40) not null,
	nombre char(40) not null,
	apellido char(40) not null,
	edad char(40) not null,
	permisos int
	
	)';


//insertar contenido en la tabla 
$resultado=$conexion-> exec($consultar);

//cerrar la conexion
$conexion=NULL;

//CONTENIDO DE PRUEBA PARA LA TABLA FAVORITOS----------
//establecer

 $conexion= new PDO('sqlite:favoritos.db') or die('ha sido imposible establecer la conexion');
//reparar

$consultar=


"INSERT INTO usuarios values ('admin','1234','diana','parra','18',1);

";

//insertar

$resultado=$conexion-> exec($consultar);


//cerrar
$conexion=NULL;




//crea tabla de logs------------
//conexion

 $conexion= new PDO('sqlite:favoritos.db') or die('ha sido imposible establecer la conexion');

//crear tablas 
$consultar='


CREATE TABLE logs(

	utc int,
	anio int,
	mes int,
	dia int,
	hora  int,
	minuto int,
	segundo int, 
	ip char(50),
	navegador char(100),
	usuario char(40),
	contrasena char(40)
	
	)';


//insertar contenido en la tabla 
$resultado=$conexion-> exec($consultar);

//cerrar la conexion
$conexion=NULL;

//CONTENIDO DE PRUEBA PARA LA TABLA FAVORITOS----------
//establecer

 $conexion= new PDO('sqlite:favoritos.db') or die('ha sido imposible establecer la conexion');
//reparar

$consultar=


"INSERT INTO logs values (000000000,2015,02,07,21,03,00,'124.09.0','chrome','admin','1234');

";

//insertar

$resultado=$conexion-> exec($consultar);


//cerrar
$conexion=NULL;




?>