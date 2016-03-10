<?php 
	@$initial= ($_GET['start']==true);/* ya no es 1 es true ==*/
	@$phrase= $_GET['phrase'];

	function prhasereverse($phrase){
		$dividirphrase = explode( " " , $phrase );/*exploro mi frase y la devuelvo dividida en un array*/
 		$contarphrase= count($dividirphrase); /*conte los espacios del array que me devolvio $ */	
 		echo "<table border=1>"; 
 		for ($i = 0 ; $i <= $contarphrase-1 ; $i++) { 
 			echo "<tr> <td>".$dividirphrase[$i] ."</td><td>". strlen($dividirphrase[$i]). "</td></tr>" ;
 		}
 		echo "</table>";
	}
	if ($initial) {
		prhasereverse($phrase);
	}

 ?>