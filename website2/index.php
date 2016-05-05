<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
    <?php 
        include ('backend/controlador.php');
        include ('backend/config.php');
     ?>
    <title></title>
</head>
<body>
<nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Cambiar Navegacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Pruebas</a>
            </div>

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contenido</a></li>
                        <li><a href="#">Otros</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Opciones<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Abrir</a></li>
                                <li><a href="#">Cerrar</a></li>
                                <li><a href="#">Algo más</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Edicion</li>
                                <li><a href="#">Copiar</a></li>
                                <li><a href="#">Pegar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Carlos <b Class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Biografía</a></li>
                                <li><a href="#">Social</a></li>
                                <li><a href="#">Contacto</a></li>
                            </ul>
                        </li>
                    </ul>



                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control"></div>
                        <button type="submit" class="btn btn-default">Buscar</button>
                    </form>
                </div>
</nav>

<div class="col-sm-2" align="center">
    <div class="list-group">
        <p class="list-group-item active">Indice</p>
        <?php echo imprimir_indice($indice); ?>
    </div>          
</div>

    <?php echo contenido($indice); ?>
</body>
</html>