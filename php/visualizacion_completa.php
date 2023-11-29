<?php
// Conectar a la base de datos (usando tus datos de conexión)
include("conexion.php");
$con = mysqli_connect($host, $user, $pw, $db) or die("Problemas al conectar");

// Realizar consulta para obtener toda la información
$consultaCompleta = "SELECT * FROM tu_tabla";
$resultadoCompleto = mysqli_query($con, $consultaCompleta) or die(mysqli_error($con));

// Mostrar la información completa
while ($filaCompleta = mysqli_fetch_array($resultadoCompleto)) {
    echo "ID: " . $filaCompleta['id'] . ", Campo1: " . $filaCompleta['campo1'] . ", Campo2: " . $filaCompleta['campo2'] . "<br>";
}

// Puedes adaptar esto según la estructura de tu base de datos
?>