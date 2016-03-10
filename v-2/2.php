<?php 
	@$initial= ($_GET['initial']==true);/* ya no es 1 es "yes"*/
	@$phrase= $_GET['phrase'];

	function prhasereverse($phrase){
		$dividirphrase = explode( " " , $phrase );/*exploro mi frase y la devuelvo dividida en un array*/
 		$contarphrase= count($dividirphrase); /*conte los espacios del array que me devolvio $ */	 
 		for ($i = $contarphrase-1 ; $i > -1 ; $i--) { 
 			echo $dividirphrase[$i] . " " ;
 		}
	}
	if ($initial) {
		prhasereverse($phrase);
	}

 ?>