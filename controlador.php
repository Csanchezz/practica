<?php 
	include ('config.php');
	function descomprimir($indice){
		foreach ($indice as $key ) {
		$pag=$key['pag'];
	 	@$getvalue=$getvalue."<li>".$key['titulo']."<a href='contenido/$pag.php'>".$key['pag']."</a></li>";
	 }
		return "<ul>".$getvalue."</ul>";
	}
 ?>