<?php 
	@$m= $_GET['m'];
	$ne = explode( " " , $m );
 	 $contar= count($ne); 	 
 	for ($i = $contar-1 ; $i > -1 ; $i--) { 
 	echo $ne[$i] . " ";
 	}
 ?>