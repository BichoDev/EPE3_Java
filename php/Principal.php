<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Usuarios</title>
    <link href="http://localhost/Formulario_basededatos/Bootstrap_CR_JQ/css/Bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <style>
        

    </style>
</head>
<body>

<header>
    
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">INICIO</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="menu_dinamico.php" role="button" aria-expanded="false"">INGRESAR</a>
            <ul class="dropdown-menu" >
                <li><a class="dropdown-item" href="menu_dinamico.php"></a></li>
                <li><a class="dropdown-item" href="menu_dinamico.php">Another action</a></li>
                <li><a class="dropdown-item" href="menu_dinamico.php">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href=""Acceso_rol.php"">Separated link</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">CONSULTA</a>
        </li>
    </ul>
<br></br>
<br></br>
<br></br>
<br></br>


    <?php
    // Inicio de variables de sesión
    if (!isset($_SESSION)) {
        session_start();
    }
    echo 'Nombre: ' . $_SESSION['nombre'] . ' ' . $_SESSION['apellido'] . '<br>';
	
    echo 'Rol: ' . $_SESSION['cargo'];
	
	
    ?>
	</br>
   <a href="desconectar_usuario.php"> Cerrar Sesi&oacute;n</a>
   
</header>

<script src="http://localhost/Formulario_basededatos/Bootstrap_CR_JQ/js/bootstrap.min.js"></script>
</body>
</html>