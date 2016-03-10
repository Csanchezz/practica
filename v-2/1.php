<?php 
	@$for= $_GET['for'];
	@$start= ($_GET['start']); /*or ($_GET['start']== 1);*/
	$n=1;
		function resultado($for,$n){
			for ($i=1; $i <= 10  ; $i++) { 
 	 	$respuesta="$for*$n=". $n*$for. "<br>";
		 echo $respuesta;
		 $n++; 
	}	 
	}
	/*ingresar primero $start con el valor de 1 para que empiece a funcionar*/

	if ($start==1) {
		resultado($for,$n);
	}
 ?>