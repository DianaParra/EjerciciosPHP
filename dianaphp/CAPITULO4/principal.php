<?php 

include("log.php");


echo "tu usuario es:";
echo $_SESSION['usuario'];
echo "<br>tu contraseña es:";
echo $_SESSION['contraseña'];

echo "<br>pulsa <a href='unlog.php'>aqiui</a>para cerrar tu secion<br/>";

//crear conexion
 $conexion= new PDO('sqlite:favoritos.db');


//establecer consulta

$consultar="SELECT * FROM favoritos WHERE usuario='".$_SESSION['usuario']."' AND contraseña='".$_SESSION['contraseña']."'";

//ejecutar consulta 
$resultado=$conexion-> query($consultar);
//imprimir consulta

echo "<table border=1 width=1>
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

/////////socializo///////////////////////////

function muestracategoria($damecategoria){

echo "algunos link  de la categoria ".$damecategoria."que quizas te puedan interesar";


 $conexion= new PDO('sqlite:favoritos.db');

$coonsultar="SELECT * FROM favoritos  WHERE usuario !='".$_SESSION['usuario']."'  AND categoria='".$damecategoria."' ORDER BY RAMDOM() LIMIT 3";

$resultado=$conexion-> query($consultar);


echo "<table border=1 width=1>
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
	
	echo "<tr><td>".$fila['titulo']."</td><td>".$fila['direccion']."</td><td>".$fila['categoria']."</td><td>".$fila['comentario']."</td><td>".$fila['valoracion']."</td><td></td><td></td></tr>";

}
echo"</table>";

$conexion=NULL;
}

muestracategoria("salud");
muestracategoria("trabajo");
muestracategoria("hobby");
muestracategoria("personal");
muestracategoria("otros");

?>