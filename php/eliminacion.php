<?php
// Conectar a la base de datos (usando tus datos de conexión)
include("conexion.php");
$con = mysqli_connect($host, $user, $pw, $db) or die("Problemas al conectar");

// Recuperar el ID a eliminar del formulario
$idEliminar = $_POST['id_eliminar'];

// Realizar la eliminación en la base de datos (ajustar según tu estructura)
$eliminarQuery = "DELETE FROM tu_tabla WHERE id = $idEliminar";
mysqli_query($con, $eliminarQuery) or die(mysqli_error($con));

// Redirigir a alguna página de éxito o a donde desees
header("Location: exito_eliminacion.php");
?>