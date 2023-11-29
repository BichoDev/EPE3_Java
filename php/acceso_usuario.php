<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<h1><title>Datos Usuarios</title></h1>
<link href="http://localhost/Formulario_basededatos/Bootstrap_CR_JQ/css/Bootstrap.min.css" rel="stylesheet">
<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
</head>



<body>




// Coneccion y consulta a la base datos , para mostrar en la pagina
<?php
//menu dinamico
include("conexion.php");
$con=mysqli_connect($host,$user,$pw,$db) or die("Problemas al conectar");
//Iniciar Sessión
session_start();
//Validar si está ingresado con session correctamente
if (!$_SESSION){

echo '<script language = javascript>
alert("usuario no autentificado")
self.location="index.html"
</script>';

}
$id_usuario=$_SESSION['id_usuario'];
$usuario=$_POST['usu'];
$contrasena=$_POST['psw'];

$consulta="SELECT * FROM Usuario WHERE u_username='".
$usuario."' AND u_psw='".$contrasena."'";


$resultado= mysqli_query($con,$consulta) or die (mysql_error());
$fila = mysqli_fetch_array($resultado);

if (!$fila[0])
{

echo '<script language = javascript>
alert("Usuario o Password errado, por favor verifique.")
self.location="index.php"
</script>';

}else{
	$consulte="SELECT * FROM Rol ";
	$resultado= mysqli_query($con,$consulta) or die (mysql_error());
	$fila = mysqli_fetch_array($resultado);

$_SESSION['id_usuario']=$fila['u_id'];
$_SESSION['rol']=$fila['u_ro_id'];
$_SESSION['nombre']=$fila['u_nombre'];
$_SESSION['apellido']=$fila['u_apellidos'];
$_SESSION['cargo']=$fila['ro_desc'];
header("Location: principal.php");

}



?>


<script src="http://localhost/Formulario_basededatos/Bootstrap_CR_JQ/js/bootstrap.min.js"></script>

</body>
</html>