<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:Formulario de registro:.</title>
</head>

<body>
<?php 
//Se declara hacia quien va el mensaje ademas de las variables y el mensaje  //que se recibira al llegar la informacion al correo.
$para = 'ventas@hotel-tapatio.com'; //Correo al cual se enviara el formulario
$asunto = 'Datos de cliente potencial';
$remitente = 'Pagina facturacion';//Mi pagina web formulario
$header .= "Content-Type: text/plain";
//Se comienzan a llamar a las variables del form
$nombre = $_POST['nombre'];
$correo = $_POST['Correo'];
$empresa = $_POST['empresa'];
$direccion = $_POST['direccion'];
$rfc = $_POST['rfc'];
$telefono = $_POST['telefono'];

//Termina llamada de varibles e inicia concatenacion para mensaje completo
$Mensaje = " El nombre del huesped" . $nombre ."\r\n" 
."Su correo es: ".$correo."\r\n"."La empresa a la que pertenece es:".$empresa."\r\n"."su direccion es:".$direccion."\r\n"."Y su telefono es:".$telefono."\r\n";

//Se anexa la informacion que llegara del correo ademas de que forzamos a que la codificacion del mensaje sea en texto plano.
mail($para,$asunto,$remitente, utf8_decode($Mensaje));
//Se reenvia mensaje indicandole a usuario que su informacion fue enviada exitosamente
echo "Mensaje Enviado satisfactoriamente";
?>
<?php

/*Abrir conexion con base de datos*/
$conexion=mysql_connect('pcrescuecommx.ipagemysql.com','pcrescuecommx','208535957'); 
if(!$conexion)
{
	die("No se pudo realizar la conexion contacte a su proovedor");
}
$seleccionar_db= mysql_select_db ("factura", $conexion);

if (!$seleccionar_db) {
die("No se pudo realizar la conexion a la base de datos AL SELEC".mysql_error());
}

//Inserccion de datos a DB
$insertar=mysql_query("INSERT INTO registro ( Nombre,Correo,Empresa,Direccion,Rfc,Telefono)
VALUES('{$nombre}','{$correo}','{$empresa}','{$direccion}','{$rfc}','{$telefono}')");

if (!$insertar) {
die("No se pudo realizar la inserccion".mysql_error());
}
else
echo("Inserccion de datos correcta");
/* Cerrar conexion a la BD */ 
mysql_close($conexion); 
exit;
?> 
</body>
</html>