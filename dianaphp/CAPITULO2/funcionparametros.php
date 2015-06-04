<?php
//una tabla de multiplicar
function mitabla($numero)
{
	for ($i=0; $i <=10 ; $i++) { 
		
		echo $numero."x".$i."=".$numero*$i."<br>";
	}
}
//todas las tablas de multiplicar

for ($z=0; $z <=10 ; $z++) { 

echo "tabla de ".$z."<br>";
mitabla($z);

}
?>