<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrie de Sesion</title>
    <link href="http://localhost/Formulario_basededatos/Bootstrap_CR_JQ/css/Bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
</head>

<?php
session_start();
if ($_SESSION['nombre'])
{

session_destroy();
echo '<script language = javascript>
alert("Su sesion ha terminado correctamente")
self.location="index.html"
</script>';

}else{

echo '<script language = javascript>
alert("No ha iniciado ninguna session, por favor registrarse")
self.location="index.html"
</script>';

}
?>

</html>