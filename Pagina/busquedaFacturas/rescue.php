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
<title>recuperacion contraseña</title>
</head>

<body>
<?php
include('funciones_mysql.php');
conexion_servidor_r();
$rfc = $_POST['rfc'];
if(!$rfc)
{
	echo "Por favor rellene el campo solicitado";
	header('refresh:30;url:http://www.pc-rescue-and-careful.com/busquedaFacturas/recuperacion.php');
	exit;	
}
else
{	
		$db=mysqli_select_db('usuarios');
		$mail="SELECT correo FROM usuarios ";
		// Falta comparacion y busqueda de rfc y correo
		echo "Su contraseña sera enviada al correo:"."<br>".$mail;
	$de ="Facturacion_HotelelTapatio";
$asunto='Contraseña de plataforma de facturación'; 
//El mensaje mostrara la contraseña en la linea 50-53
$mensaje='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modificación de facturas.</title>
</head>

<body>
<div style="background-color:#018367; height:20px; width:auto;">

</div>
<div>
<a href="http://www.hotel-tapatio.com/">
<img src="hotel_el_ta
patio.gif" width="200" height="200" /></a>

</div>
<div style="background-color:#018367; height:20px; width:auto;">

</div>

Su contraseña es: <?php echo "$contrasena" ?>
<br>
Para cualquier duda o sugerencia marque al 38372929.<br>
Gracias por su preferencia y esperamos que vuelva pronto.

<div align="center">
<a href="http://www.hotelesroyal.com.mx/"><img src="logos/royal.png" /></a>
<a href="http://www.radisson.com.mx/"><img src="logos/radisson.png" /></a>
<a href="http://www.sevillapalace.com.mx/"><img src="logos/sevilla-palace.png" /></a>
<a href="http://www.pedregalpalace.com.mx/"><img src="logos/pedregal-palace.png" /></a>
<a href="http://wwww.hotel-tapatio.com/"><img src="logos/tapatio.png" /></a>
<a href="http://www.corinto.com.mx/"><img src="logos/corinto.png" /></a>
<a href="http://www.eldiplomatico.com.mx/"><img src="logos/diplomatico.png" /></a>
<a href="http://www.sevilla.com.mx/"><img src="logos/hotel-sevilla.png" /></a>
<a href="http://www.hotelbristol.com.mx/"><img src="logos/bristol.png" /></a>
<a href="http://www.hotelsegovia.com.mx/"><img src="logos/segovia.png" /></a>
<a href="http://www.liabeny.es/"><img src="logos/liabeny.png" /></a>
</div>
<div style="background-color:#ce6505; height:5px; width:auto">
</div>
<div   id="footer" style="background-color:#018367; height:100px; width:auto;">
<div align="center" style="color:#FFF; ">
<a href="https://secure.internetpower.com.mx/portals/SevillaTapatio/portal/Secure/FindBoking.aspx" style="color:#FFF; text-decoration:none">
Modificar y Cancelar Reservas</a>&nbsp;&nbsp;<a href="http://www.hotel-tapatio.com/politicas-del-hotel" style="color:#FFF;text-decoration:none"> Politicas del Hotel</a> &nbsp; &nbsp;<a href="http://www.hotel-tapatio.com/aviso-de-privacidad" style="color:#FFF;text-decoration:none">Aviso de Privacidad</a> &nbsp; &nbsp; <a href="http://www.hotel-tapatio.com/empresas-y-agencias" style="color:#FFF;text-decoration:none">Empresa y Agencias</a> &nbsp; &nbsp;<a href="http://www.hotel-tapatio.com/mapa-del-sitio" style="color:#FFF;text-decoration:none"> Mapa de Sitio</a> &nbsp; &nbsp;<a href="http://booking.internetpower.com.mx/SevillaTapatio/hotel/comentarios.aspx?PropertyNumber=237&Asso=261" style="color:#FFF;text-decoration:none"> Comentarios</a>
</div>
<div align="center" style="color:#FFF">
<a href="" style="color:#FFF; text-decoration:none">Developed by Pc-source.com.mx</a>
</div>
</div>
</body>
</html>';
$cabecera  = 'MIME-Version: 1.0' . "\r\n";
$cabecera .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$cabecera .= 'From: Facturacion' . "\r\n";
$cabecera .= 'Cc: maniz39@hotmail.com' . "\r\n";


mail($para,$titulo,$mensaje,$cabecera);
	
		
		
		
		
		
		header('refresh :40;url:http://www.pc-rescue-and-careful.com/busquedaFacturas/index.php');
		exit;
}

?>
</body>
</html>