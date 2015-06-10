<?php 

session_start();


$codigo= $_SESSION['permisos'];

if ($codigo == 1) {
	
echo "tu usuario es:";
echo $_SESSION['usuario'];
echo "<br>tu contraseña es:";
echo $_SESSION['contraseña'];

//crear conexion
 $conexion= new PDO('sqlite:favoritos.db');


//establecer consulta

$consultar="SELECT * FROM usuarios";

//ejecutar consulta 
$resultado=$conexion-> query($consultar);
//imprimir consulta

echo "<table border=1 width=1>
<tr>
<td> usuario</td>
<td>contrase&ntilde;a</td>
<td>nombre</td>
<td>apellido</td>
<td>edad</td>
<td></td>
</tr>
";

foreach ($resultado as $fila) {
	
	echo "<tr><td>".$fila['usuario']."</td><td>".$fila['contraseña']."</td><td>".$fila['nombre']."</td><td>".$fila['apellido']."</td><td>".$fila['edad']."</td><td><a href = 'eliminarusuario.php?usuario=".$fila['usuario']."&contraseña=".$fila['contraseña']."&nombre=".$fila['nombre']."&apellido=".$fila['apellido']."&edad=".$fila['edad']."'>Eliminar</a>
	</td><td><a href = 'formularioactualizarusuario.php?usuario=".$fila['usuario']."&contraseña=".$fila['contraseña']."&nombre=".$fila['nombre']."&apellido=".$fila['apellido']."&edad=".$fila['edad']."'>Actualizar</a></td></tr>";
}

//añadir registro
echo "
<tr>
<form action='crearusuario.php' method='POST'>
<td><input type='text' name='usuario'></td>
<td><input type='text' name='contraseña'></td>
<td><input type='text' name='nombre'></td>
<td><input type='text' name='apellido'></td>
<td><input type='text' name='edad'></td>
<td><input type='submit'></td><td></td>;
</form>
</tr>

";
echo "</table>";
//cerrar conexion

$conexion=NULL;
}else{

	echo "tu no eres administrador";
}

?>