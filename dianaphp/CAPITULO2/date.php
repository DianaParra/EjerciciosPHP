<?php

echo date("D");
echo "<br></br>";

echo date("d");
echo "<br>";

echo date("j");
echo "<br>";

echo date ("l");
echo "<br>";

echo date("n") ;
echo "<br>";

echo date("v");
echo "<br>";

echo date("z");
echo "<br>";

echo date("V");
echo "<br>";

echo date("F");
echo "<br>";

echo date("m") ;
echo "<br>";

echo date("M");
echo "<br>";

echo date("n");
echo "<br>";

echo date("t") ;
echo "<br>";

echo date("Y");
echo "<br>";

echo date("y");
echo "<br>";

echo date("L");
echo "<br>";

echo date("c");
echo "<br>";

echo date("U");
echo "<br>";

echo date("a");
echo "<br>";

echo date("A");
echo "<br>";

echo date("B");
echo "<br>";

echo date("g");
echo "<br>";

echo date("G");
echo "<br>";

echo date("h");
echo "<br>";

echo date("H");
echo "<br>";

echo date("i");
echo "<br>";

echo date("s");
echo "<br>";

echo date("u");
echo "<br>";

echo date("e");
echo "<br>";

echo date("I");
echo "<br>";

echo date("O");
echo "<br>";


function dametiempo(){

	switch (date("l")) {
		case 'monday':
		$dia="lunes";
			break;
		 case 'tuesday':
		$dia="martes";
			break;
			case 'wednesday':
		$dia="miercoles";
			break;
			case 'thurday':
		$dia="jueves";
			break;
			case 'friday':
		$dia="viernes";
			break;
			
		case 'saturday':
		$dia="sabado";
			break;
			case 'sunday':
		$dia="domingo";
		
			break;
	}

	switch (date("F")) {
		case 'january':
			$mes="enero";
			break;

			case 'febrary':
			$mes="febrero";
			break;

			case 'march':
			$mes="marzo";
				break;
		
		
	}
	echo "hoy es ".$dia.",".date("j").",".$mes." de ".date("Y");

}
dametiempo();
echo "<br>";
?>