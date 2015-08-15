<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>


<body>
<?php
//Conexion
$link= mysql_connect('pcrescuecommx.ipagemysql.com','pcrescue','91Pc-r');
if (!$link)
{
	die('Could not connect:'.mysql_error());
}
$db_selected=mysql_select_db('facturacion',$link);
if(!$db_selected)
{
	die('Could not connect facturacion:'.mysql_error());
}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$empresa = $_POST['empresa'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$rfc = $_POST['rfc'];

$db= "INSERT INTO Registro (Nombre,Email,Empresa,Direccion,Telefono,Rfc)
VALUES('".$nombre."','".$correo."','".$empresa."','".$direccion."','".$telefono."','".$rfc."')";
// se insertan datos
$respuesta = mysql_query($db,$link) or die(mysql_error());
header("Location:www.pc-rescue-and-careful.com/busquedaFacturas/loguin.html");
 mysql_close($link);
?>
</body>
</html>