<?php 
	echo @$funcion= $_GET['funcion'];
	@$for= $_GET['for'];
	@$longitud= $_GET['longitud'];
	@$phrase= $_GET['phrase'];
	include ('funciones.php');

	if ($funcion==="multiplicar") {
		echo resultado($for,$longitud);
	} elseif ($funcion==="contarfrase") {
			echo contarfrase($phrase);
	}	
		
 ?>