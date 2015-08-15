<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
</head>

<body>
<?php
/*Se recuperan primero variables*/
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$contra = $_POST['contra'];
$correo = $_POST['email'];
$fecha = date("M-D-Y H:m:s");
$ip = $_SERVER['REMOTE_ADDR'];


/*Se realiza conexion con base*/
$host = "localhost";
	$user = "root";
	$password = "";
	$dataBase = "registro";
	
	$mysqli = new mysqli($host, $user, $password, $dataBase);
	
	if(mysqli_connect_errno())
	{
		echo "No se pudo conectar a la base de datos"; mysqli_connect_error();
		exit();
	}

$query=("INSERT INTO regis(nombre,apellido,correo,contrasena,fecha,ip)VALUES('$nombre','$apellido','$correo','$contra','$fecha','$ip')") or die("Algo malo sucedio  ");

$result= $mysqli -> query($query);

?>     
</body>
</html>