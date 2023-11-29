archivo modificacion1.php
<?php
// Conectar a la base de datos (usando tus datos de conexión)
include("conexion.php");
$con = mysqli_connect($host, $user, $pw, $db) or die("Problemas al conectar");

// Recuperar datos del formulario
$nuevoCampo1 = $_POST['campo1'];
$nuevoCampo2 = $_POST['campo2'];

// Realizar la actualización en la base de datos (ajustar según tu estructura)
$actualizarQuery = "UPDATE tu_tabla SET campo1 = '$nuevoCampo1', campo2 = '$nuevoCampo2' WHERE id = tu_id";
mysqli_query($con, $actualizarQuery) or die(mysqli_error($con));

// Redirigir a alguna página de éxito
header("Location: exito_modificacion1.php");
?>