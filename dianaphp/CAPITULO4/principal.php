<?php 

session_start();


echo "tu usuario es:";
echo $_SESSION['usuario'];
echo "<br>tu contraseña es:";
echo $_SESSION['contraseña'];

//crear conexion
 $conexion= new PDO('sqlite:favoritos.db');


//establecer consulta

$consultar="SELECT * FROM favoritos WHERE usuario='diana' AND contraseña='123'";

//ejecutar consulta 
$resultado=$conexion-> query($consultar);
//imprimir consulta

echo "<table border=1 width=100>
<tr>
<td> titulo</td>
<td>direccion</td>
<td>categoria</td>
<td>comentario</td>
<td>valoracion</td>
<td></td>
</tr>
";

foreach ($resultado as $fila) {
	
	echo "<tr><td>".$fila['titulo']."</td><td>".$fila['direccion']."</td><td>".$fila['categoria']."</td><td>".$fila['comentario']."</td><td>".$fila['valoracion']."</td><td><a href = 'eliminrfavorito.php?titulo=".$fila['titulo']."&direccion=".$fila['direccion']."&categoria=".$fila['categoria']."&comentario=".$fila['comentario']."&valoracion=".$fila['valoracion']."'>Eliminar</a>
	</td><td><a href = 'formularioactualizar.php?titulo=".$fila['titulo']."&direccion=".$fila['direccion']."&categoria=".$fila['categoria']."&comentario=".$fila['comentario']."&valoracion=".$fila['valoracion']."'>Actualizar</a></td></tr>";
}

//añadir registro
echo "
<tr>
<form action='crearfavorito.php' method='POST'>
<td><input type='text' name='titulo'></td>
<td><input type='text' name='direccion'></td>
<td><select  name='categoria'>
<option value='salud'>salud</option>
<option value='trabajo'>trabajo</option>
<option value='hobby'>hobby</option>
<option value='personal'>personal</option>
<option value='otros'>otros</option>
</td>
<td><input type='text' name='comentario'></td>
<td><input type='text' name='valoracion'></td>
<td><input type='submit' ></td><td></td>
</form>
</tr>

";
echo "</table>";
//cerrar conexion

$conexion=NULL;


?>