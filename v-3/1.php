<?php 
	@$start= ($_GET['start']); /*or ($_GET['start']== 1);*/
	@$longitud= $_GET['longitud'];
	@$for= $_GET['for'];

		function resultado($for,$longitud){
			for ($i=1; $i <= $longitud  ; $i++) { 
 	 			$respuesta="<tr> <td>$for*$i=</td>"."<td>". $i*$for."</td>". "</tr>";
		 		echo $respuesta;

			}	 
		}

	/*ingresar primero $start con el valor de 1 para que empiece a funcionar*/
	if ($start==true) {

		echo "<table border=1>";
		resultado($for,$longitud);
		echo "</table>";
	}
 ?>