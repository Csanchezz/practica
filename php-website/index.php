<?php
@$id=$_GET['id'];
@$val=$_GET['val'];
include 'backend/controller.php';
include 'backend/datos.php';
include 'backend/User.php';

/**
 * Crea el usuario con la función crearUsuario que está en controller.php
 * el primer parámetro es el array que está en datos.php
 * el segundo parámetro es el ID del usuario que se va a crear
 */
@$user = crearUsuario($array_users, $id);

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<title>Prueba</title>
</head>
<body>

	<nav class='navbar navbar-default'>
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-ex1-collapse'>
                    <span class='sr-only'>Cambiar Navegacion</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>
                <a href='#' class='navbar-brand'>Website!</a>
            </div>

                <div class='collapse navbar-collapse navbar-ex1-collapse'>
                    <ul class='nav navbar-nav'>
                        <li><a href="index.php">Home</a></li>
                        <li class='dropdown'><a href='#' class='dropdown-toggle' data-toggle='dropdown'>Opciones<b class='caret'></b></a>
                            <ul class='dropdown-menu'>
                                <?php echo BarraNavegacion($array_users); ?>
                            </ul>
                        </li>
                    </ul>
                 </div>
</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<?php
					/*
					  Imprime el índice en la barra lateral
					 */
					echo imprimirIndiceUsuarios($array_users);
					?>
				</div>
			</div>
			<div class="col-md-9">
				
				<?php 
					if ($val=="ya") {
						echo '<h1>'.$user->mostrarDato('nombre').' '. $user->mostrarDato('apellido').'</h1><br>';
						echo "<h4>Empresa: ".$user->mostrarDato('empresa')."<br></h4>";
						echo "<h4>Puesto: ".$user->mostrarDato('puesto')."<br></h4>";
						echo "<h4>Edad: ".$user->mostrarDato('edad')." Años</h4><br>";
						echo "<h4>Telefonos: ".$user->mostrarDato('telefono')."</h4><br>";						
					}

				 ?>
				

			</div>
		</div>
	</div>
</body>
</html>