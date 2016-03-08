<?php 
	
	$for= $_GET['for'];

	for ($i=1; $i < 11  ; $i++) { 
		 echo "$for * $i =" . $i*$for . "<br>";
	}
 ?>