<?php 
session_start();

 $conexion= new PDO('sqlite:favoritos.db');
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contraseña'];

$titulo=$_GET['titulo'];
$direccion=$_GET['direccion'];
$categoria=$_GET['categoria'];
$comentario=$_GET['comentario'];
$valoracion=$_GET['valoracion'];


$consultar="SELECT * FROM favoritos WHERE usuario='".$usuario."' AND contraseña='".$contrasena."' AND titulo='".$titulo."' AND direccion='".$direccion."' AND categoria='".$categoria."' AND comentario='".$comentario."' AND valoracion='".$valoracion."'";
$resultado=$conexion-> query($consultar);

echo '

<table border=1 width=100%>
<tr>
<td>titulo</td>
<td>direccion</td>
<td>categoria</td>
<td>comentario</td>
<td>valoracion</td>
<td></td>
</tr>

';
foreach ($resultado as $fila) {
	
	echo "
	<tr><form action='actualizarfavorito.php' method='post'>
	<td><input type='text' name='titulo' value='".$fila['titulo']."'></td>
	<td><input type='text' name='direccion' value='".$fila['direccion']."'></td>
	
<td><select  name='categoria'>
<option value='salud'>salud</option>
<option value='trabajo'>trabajo</option>
<option value='hobby'>hobby</option>
<option value='personal'>personal</option>
<option value='otros'>otros</option>
<option value='".$fila['categoria']."' selected>".$fila['categoria']."</option></select>
</td>
	<td><input type='text' name='comentario' value='".$fila['comentario']."'></td>
	<td><input type='text' name='valoracion' value='".$fila['valoracion']."'></td>

	<td><td><input type='submite'</td>
</form>
</tr>

	";
}
  echo "</table>";

$_SESSION['titulo']=$titulo;


$conexion = NULL;
?>