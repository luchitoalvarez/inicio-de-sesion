<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
    <title>Sesion</title>
</head>
<body>
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-control="navbar">
                <span class="sr-only"> Botón que despliega la barra de navegacíon </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> Titulo </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li> <a href="#"><span class=" glyphicon glyphicon-th-list" aria-hidden="true">  </span> Creaciones</a></li>
                <li> <a href="#"><span class=" glyphicon glyphicon-star" aria-hidden="true">  </span> Faboritos</a></li>
                <li> <a href="#"><span class=" glyphicon glyphicon-education" aria-hidden="true">  </span> Comentar</a></li>             
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li> <a href="#"><span class=" glyphicon glyphicon-log-in" aria-hidden="true">  </span> Iniciar sesion</a> </li>

                <li> <a href="#"><span class=" glyphicon glyphicon-plus-sign" aria-hidden="true">  </span> Registro</a></li> 
            </ul>
        </div>
    </div>
</nav>
<?php
  include_once "registro.php";
?>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>