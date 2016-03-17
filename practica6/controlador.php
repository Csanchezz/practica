<?php 
	include ('config.php');
	include ('config_detalle.php');
	function indice_simple($indice_simple){
		foreach ($indice_simple as $key ) {
		$pag=$key['pag'];
	 	@$getvalue=$getvalue."<li>".$key['titulo']."<a href='contenido/$pag.php'>".$key['pag']."</a></li>";
	 	}
		return "<ul>".$getvalue."</ul>";
	}
	function indice_detallado($indice_detallado){		
		foreach ($indice_detallado as $first_array) {
			$page=$first_array['num'];
			@$none = $none. "<li>".$first_array['nombre']."..........<a href='contenido/$page.php'>".$first_array['num']."</a></li>";		
			if (isset($first_array['subtemas'])){
				$none=$none.indice_detallado($first_array['subtemas']);
			}
		}
		return "<ul>".$none."</ul>";
	}
	
 ?>