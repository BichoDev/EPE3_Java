<?php
// Conectar a la base de datos (usando tus datos de conexión)
include("conexion.php");
$con = mysqli_connect($host, $user, $pw, $db) or die("Problemas al conectar");

// Recuperar datos del formulario
$nuevaInfo = $_POST['nueva_info'];

// Realizar la actualización en la base de datos (ajustar según tu estructura)
$actualizarQuery = "UPDATE tu_otra_tabla SET info = '$nuevaInfo' WHERE id = tu_otro_id";
mysqli_query($con, $actualizarQuery) or die(mysqli_error($con));

// Redirigir a alguna página de éxito
header("Location: exito_modificacion2.php");
?>