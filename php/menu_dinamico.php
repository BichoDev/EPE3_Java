<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cierre de Sesión</title>
    <link href="http://localhost/Formulario_basededatos/Bootstrap_CR_JQ/css/Bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
</head>
<body>
    <ul class="nav">
        <?php
        session_start();
        if ($_SESSION['nombre']) {
            session_destroy();
            echo '<script language="javascript">
                    alert("Su sesión ha terminado correctamente");
                    self.location="index.html";
                  </script>';
        } else {
            echo '<script language="javascript">
                    alert("No ha iniciado ninguna sesión, por favor registrarse");
                    self.location="index.html";
                  </script>';
            include("conexion.php");
            $con = mysqli_connect($host, $user, $pw, $db) or die("Problemas al conectar");
            session_start();
            
            if (!$_SESSION) {
                echo '<script language="javascript">
                        alert("Usuario no autentificado");
                        self.location="index.html";
                      </script>';
            }
            
            $id_usuario = $_SESSION['id_usuario'];
            $numrol = $_SESSION['rol'];
            $consulta = "SELECT * FROM Rol Where ro_id=$numrol";
            $res = mysqli_query($con, $consulta);
            $cant = mysqli_num_rows($res);

            while ($fila = mysqli_fetch_array($res)) {
                $RolDesc = $fila['ro_desc'];
                switch ($RolDesc) {
                    case 'Administrador':
                        echo '<li><a href="#">Ingresar</a>';
                        echo '<ul>';
                        echo '<li><a href="#">Presidente ANFP</a></li>';
                        echo '<li><a href="#">Club</a></li>';
                        echo '<li><a href="#">Pais</a></li>';
                        echo '<li><a href="#">Region</a></li>';
                        echo '</ul></li>'; // Cerrar la etiqueta <li> de Administrador
                        echo '<li><a href="#">Consultar</a></li>';
                        echo '<li><a href="#">Eliminar</a></li>';
                        echo '<li><a href="#">Modificar</a></li>';
                        break;
                }
            }
        }
        ?>
    </ul>
    <script src="http://localhost/Formulario_basededatos/Bootstrap_CR_JQ/js/bootstrap.min.js"></script>
</body>
</html>