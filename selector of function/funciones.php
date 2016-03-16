<?php 

	function contarfrase($phrase){
		$dividirphrase = explode( " " , $phrase );/*exploro mi frase y la devuelvo dividida en un array*/
 		$contarphrase= count($dividirphrase); /*conte los espacios del array que me devolvio $ */	
 		 
 		for ($i = 0 ; $i < $contarphrase ; $i++) { 
 			@$countphrase= $countphrase . "<tr> <td>".$dividirphrase[$i] ."</td><td>". strlen($dividirphrase[$i]). "</td></tr>" ;
 			}

 		return "<table border=1>" . $countphrase."</table>";
		}

	function resultado($for,$longitud){
			for ($i=1; $i <= $longitud  ; $i++) { 
 	 			@$respuesta= $respuesta."<tr> <td>$for*$i=</td>"."<td>". $i*$for."</td>". "</tr>";

			}	 
			return "<table border=1>" . $respuesta."</table>";
		}

 ?>