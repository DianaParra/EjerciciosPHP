<?php

	session_start();

	$usuario = $_SESSION['usuario'];
	$contrasena = $_SESSION['contraseña'];

	$titulo = $_GET['titulo'];
	$direccion = $_GET['direccion'];
	$categoria = $_GET['categoria'];
	$comentario = $_GET['comentario'];
	$valoracion = $_GET['valoracion'];


	$conexion = new PDO('sqlite:favoritos.db');

	
	$consulta = "SELECT * FROM favoritos WHERE usuario='".$usuario."' AND contraseña='".$contrasena."' AND titulo='".$titulo."' 
	AND direccion='".$direccion."' AND categoria='".$categoria."' AND comentario='".$comentario."' AND valoracion='".$valoracion."'";

	$resultado = $conexion-> query($consulta);
//echo $resultado;
	echo "

		<table border=1 width=100%>
			<tr>
				<td>Titulo</td>
				<td>Direccion</td>
				<td>Categoria</td>
				<td>Comentario</td>
				<td>Valoracion</td>
			</tr>

	";

	foreach ($resultado as $fila)	{

		echo "

		<tr>
			<form action='actualizarfavorito.php' method='POST'>

				<td><input type='text' name='titulo' value='".$fila['titulo']."'></td>
				<td><input type='text' name='direccion' value='".$fila['direccion']."'></td>

				<td>
					<select name='categoria'>
						<option value='salud'>Salud</option>
						<option value='trabajo'>Trabajo</option>
						<option value='hobby'>Hobby</option>
						<option value='personal'>Personal</option>
						<option value='otros'>Otros</option>
						<option value='".$fila['categoria']."' selected>".$fila['categoria']."</option>
					</select>
				</td>

				<td><input type='text' name='comentario' value='".$fila['comentario']."'></td>
				<td><input type='text' name='valoracion' value='".$fila['valoracion']."'></td>

				<td><input type='submit'</td>
			</form>
		</tr>

		";
	}

echo "</table>";

	$_SESSION['titulo']=$titulo;

	$conexion=NULL;


?>