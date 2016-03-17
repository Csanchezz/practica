<?php 
	@$funcion=$_GET['indice'];
	@$det_wich=$_GET['cual'];
	include ('controlador.php');
	if ($funcion==="detallado") {
		if ($det_wich==="normal") {
			echo indice_detallado($indice_detallado);
		} else {
			if ($det_wich==="loco") {
				echo indice_detallado($indice_loco);
			}
		}
		
		
	} else {
		if ($funcion==="simple") {
			echo indice_simple($indice_simple);
		}
	}
	
	

 ?>