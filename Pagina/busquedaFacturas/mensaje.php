<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
<![endif]-->
<!--[if lt IE 8]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
<![endif]-->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
< ![endif]-->
<title>Modificación de Factura</title>
</head>

<body>
<?php
$compania=$_POST['compania'];
$calle=$_POST['calle'];
$ext=$_POST['ext'];
$int=$_POST['int'];
$colonia=$_POST['colonia'];
$hab=$_POST['hab'];
$cp=$_POST['cp'];
$ciudad=$_POST['ciudad'];
$estado=$_POST['estado'];
$pais=$_POST['pais'];
$email=$_POST['email'];
$rfc=$_POST['rfc'];
//$fecha=$_POST['fecha'];
$comentario=$_POST['comentario'];
//Solo comentario no es obligatorio
if (!$compania || !$calle || !$ext || !$int || !$colonia || !$hab || !$cp || !$ciudad || !$estado || !$pais || !$email || !$rfc )
{
	echo 'Verifique que los campos obligatorios del formulario fueron rellenados';
	foreach ($_POST as $clave=>$valor){
		echo '<br>';
		echo $clave.'='.$valor;		
	}
	//header("Location: modificacion.php");	
}
else
{
$para= 'cuentasxcobrartapatio@gmail.com'; 
$para.=',';
$para.='maniz39@hotmail.com';
$para.=',';
$para.='jahs91@hotmail.com';
$de ="Sistemas";
$asunto='Datos de correción de factura'; 

$mensaje = '
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
<![endif]-->
<!--[if lt IE 8]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
<![endif]-->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
< ![endif]-->
<link rel="shortcut icon" href="logos/favicon.png" />
<title>Facturas</title>
</head>

<body marginheight="0" marginwidth="0" rightmargin="0" topmargin="0" leftmargin="0" bottommargin="0">
<table>
<tr>
<td style="background-color:#018367; height:20px; width:auto;">
</td>
</tr>
<tr>
<td>
<a href="http://www.hotel-tapatio.com/">
<img src="http://pc-rescue-and-careful.com/busquedaFacturas/logos/hotel_el_ta
patio.gif" width="200" height="200" /></a>
</td>
</tr>
<tr>
<td style="background-color:#018367; height:20px; width:auto;">
</td>
</tr>
<div>
Los datos de facturaci&oacute;n son los siguientes:<br>
Su pais es: &nbsp; '.$pais.' <br>
Su estado es: &nbsp; '.$estado.' <br>
La ciudad es: &nbsp; '.$ciudad.' <br>
La colonia es: &nbsp; '.$colonia.' <br>
La calle es: &nbsp; '.$calle.'<br>
El numero interior es : &nbsp; '.$int.'<br>
El numero exterior es: &nbsp; '.$ext.'<br>
El codigo postal es: &nbsp;'.$cp.'<br>
La empresa es: &nbsp; '.$compania.'<br>
Su correo es: &nbsp; '.$email.'<br>
Su RFC es : &nbsp; '.$rfc.'<br>
La habitaci&oacute;n en la que se hospedo es: &nbsp; '.$hab.'<br>
Comentarios: &nbsp; '.$comentario.'<br>
</div>
<tr>
<td align="center">
<a href="http://www.hotelesroyal.com.mx/"><img src="http://pc-rescue-and-careful.com/busquedaFacturas/logos/royal.png" /></a>
<a href="http://www.radisson.com.mx/"><img src="http://pc-rescue-and-careful.com/busquedaFacturas/logos/radisson.png" /></a>
<a href="http://www.sevillapalace.com.mx/"><img src="http://pc-rescue-and-careful.com/busquedaFacturas/logos/sevilla-palace.png" /></a>
<a href="http://www.pedregalpalace.com.mx/"><img src="http://pc-rescue-and-careful.com/busquedaFacturas/logos/pedregal-palace.png" /></a>
<a href="http://www.hotel-tapatio.com/"><img src="http://pc-rescue-and-careful.com/busquedaFacturas/logos/tapatio.png" /></a>
<a href="http://www.corinto.com.mx/"><img src="http://pc-rescue-and-careful.com/busquedaFacturas/logos/corinto.png" /></a>
<a href="http://www.eldiplomatico.com.mx/"><img src="http://pc-rescue-and-careful.com/busquedaFacturas/logos/diplomatico.png" /></a>
<a href="http://www.sevilla.com.mx/"><img src="http://pc-rescue-and-careful.com/busquedaFacturas/logos/hotel-sevilla.png" /></a>
<a href="http://www.hotelbristol.com.mx/"><img src="http://pc-rescue-and-careful.com/busquedaFacturas/logos/bristol.png" /></a>
<a href="http://www.hotelsegovia.com.mx/"><img src="http://pc-rescue-and-careful.com/busquedaFacturas/logos/segovia.png" /></a>
<a href="http://www.liabeny.es/"><img src="http://pc-rescue-and-careful.com/busquedaFacturas/logos/liabeny.png" /></a>
</td>
</tr>
<td style="background-color:#ce6505; height:5px; width:auto">
</td>
<tr>
<td>
<div   id="footer" style="background-color:#018367; height:100px; width:auto;">
<div align="center" style="color:#FFF; font:"Times New Roman", Times, serif">
<a href="https://secure.internetpower.com.mx/portals/SevillaTapatio/portal/Secure/FindBoking.aspx" style="color:#FFF; text-decoration:none">
Modificar y Cancelar Reservas</a>&nbsp;&nbsp;<a href="http://www.hotel-tapatio.com/politicas-del-hotel" style="color:#FFF;text-decoration:none"> Politicas del Hotel</a> &nbsp; &nbsp;<a href="http://www.hotel-tapatio.com/aviso-de-privacidad" style="color:#FFF;text-decoration:none">Aviso de Privacidad</a> &nbsp; &nbsp; <a href="http://www.hotel-tapatio.com/empresas-y-agencias" style="color:#FFF;text-decoration:none">Empresa y Agencias</a> &nbsp; &nbsp;<a href="http://www.hotel-tapatio.com/mapa-del-sitio" style="color:#FFF;text-decoration:none"> Mapa de Sitio</a> &nbsp; &nbsp;<a href="http://booking.internetpower.com.mx/SevillaTapatio/hotel/comentarios.aspx?PropertyNumber=237&Asso=261" style="color:#FFF;text-decoration:none"> Comentarios</a>
</div>
<div align="center" style="color:#FFF">
<a href="" style="color:#FFF; text-decoration:none">Developed by Pc-source.com.mx</a>
</div>
</div>
</td>
</tr>
</table>
';
$cabecera  = 'MIME-Version: 1.0' . "\r\n";
$cabecera .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$cabecera .= 'From: Facturacion' . "\r\n";
$cabecera .= 'Cc: maniz39@hotmail.com' . "\r\n";
$cabecera .= 'Bcc: facturacion@.com' . "\r\n";

mail($para,$titulo,$mensaje,$cabecera);

echo "<script type=\"text/javascript\">alert(\"Su factura sera modificada en un lapso de 24 a 72 horas y podra encontrarla en nuestra nube, para cualquier duda o aclaracion comuniquese al (33)38372929\");</script>";
}

header('refresh:30; url=http://www.pc-rescue-and-careful.com/busquedafact/..');


?>
</body>
</html>