<?php 
	@$start= $_GET['start'];
	@$personaje= $_GET['pr'];
	@$verbo=$_GET['verb'];
	function wrote($personaje,$verbo){
		echo "El $personaje se rie cuando $verbo";
	}
	if ($start==3.141592) {
		wrote($personaje,$verbo);
	}
 ?>