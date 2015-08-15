<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="acción" content="2"; url="pc-rescue-and-careful.com/Pagina/index.php">
<title>Correo</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="carousel.css" rel="stylesheet">
 <script src="ie-emulation-modes-warning.js"></script> 
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!--CDN FONTAWESOME-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 <!--Css extras-->
 <link href="izquierda.css" rel="stylesheet">
</head>

<body>
<?php
/*Variables de informacion*/
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$correo = $_POST['correo'];
$fecha = date("Y-m-d H:m:s");

/*Cuerpo de correo*/
$para = 'maniz39@hotmail.com' . ',';
$para.= 'dios_zlz@hotmail.com';/*Agregar a los demas socios pero con el nuevo dominio*/

$titulo = 'Mensaje de contacto pagina web';
$mensaje = "
<html>
<head>
  <title>Correo de pagina web</title>
</head>
<body>
  <p >INFORMACION DE CLIENTE VIA WEB</p>
  <table bordercolor='#FFFFFF'#0099CC' border='1'>
    <tr>
      <th>Correo electronico</th><th>Fecha</th>
    </tr>
	<tr>
	<th>".$correo."</th><th>".$fecha."</th>
	</tr>
    <tr>
      <th>Nombre cliente</th><th>Telefono</th><th>Direcci&oacute;n</th>
    </tr>
    <tr>
      <td>".$nombre."</td><td>".$telefono."</td><td>".$direccion."</td>
    </tr>
	<tr>
	<th>Asunto</th>
	</tr>
	<tr>
	<th>".$asunto."</th>
	</tr>
  </table>
</body>
</html>

";

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($para,$titulo,$mensaje,$cabeceras);

?>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="ie10-viewport-bug-workaround.js"></script>
    <script src="http://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</body>
</html>