<?php
// Conectar a la base de datos (usando tus datos de conexión)
include("conexion.php");
$con = mysqli_connect($host, $user, $pw, $db) or die("Problemas al conectar");

// Realizar consulta condicional
$consultaCondicional = "SELECT * FROM tu_tab