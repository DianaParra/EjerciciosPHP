<html>

<body>
<table border="1" width="50%">
	<tr>
	<td>	

<form action="login.php" method="post">
<input type="text" name="usuario" value="introduce aqui tu nombre">

<td>
</tr>
<td>
<input type="text" name="contraseña" value="introduce aqui tu contrasena" width=50%>
</td>
</tr>
<td>
<input type="submit">
</tr>

</form>
</table>
no eres usuario todavia? PULSA <a href="formularioaltausuario.php">AQUI</a>
</body>
</html>

<?php


function muestracategoria($damecategoria){

echo "algunos link  de la categoria que quizas te puedan interesar";


 $conexion= new PDO('sqlite:favoritos.db');

$coonsultar="SELECT * FROM favoritos ORDER BY RAMDOM() LIMIT 3 ";

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