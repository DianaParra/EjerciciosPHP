<?php

class saluda{


	function saludo(){

		echo "yo te saludo";
	}

	function adios(){

		echo "yo te digo adios ";

	}
}


class subsaluda extends saluda{

	var $atributo;
	function hola(){

		
	}
}


$instancia=new saluda();
$ins =$instancia->saludo();
?>