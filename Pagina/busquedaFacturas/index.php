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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54726337-1', 'auto');
  ga('send', 'pageview');

</script>
<link rel="shortcut icon" href="logos/favicon.png" />

<script type="text/javascript">
function validarForm(formulario) {
  if(formulario.rfc.value.length==0) { 
    formulario.rfc.focus();   
    alert('No has escrito tu RFC'); 
    return false; 
  }
  if(formulario.contrasena.value.length==0) { //comprueba que no esté vacío
    formulario.contrasena.focus();
    alert('No has escrito tu contraseña');
    return false;
  }
return true;
}
</script>
<title>Facturas</title>
</head>

<body marginheight="0" marginwidth="0" rightmargin="0" topmargin="0" leftmargin="0" bottommargin="0">
<div style="background-color:#018367; height:20px; width:auto;">

</div>
<div>
<a href="http://www.hotel-tapatio.com/">
<img src="logos/hotel_el_ta
patio.gif" width="200" height="200" style="text-decoration:none" /></a>

</div>
<div style="background-color:#018367; height:20px; width:auto;">

</div>
<br>
<br>
<form method="post" action="mostrar_facturas.php" onsubmit="return validarForm(this);">
<table align="center">
	<tr>
    	<td colspan="2" align="center">
         Inicio de sesi&oacute;n
        </td>
    </tr>
    <tr>
    	<td align="right">
        	RFC:
        </td>
        <td>
        	<input type="text" style="width:200px" name="rfc" maxlength="13" placeholder="Introduzca su RFC.."/>
        </td>
    </tr>
     <tr>
    	<td align="right">
        	Contraseña:
        </td>
        <td>
        	<input type="password" style="width:200px" name="contrasena" maxlength="20" placeholder="Introduzca su contraseña.."/>
        </td>
    </tr>
    <tr>
    	<td colspan="2" align="center">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	<input type="submit" value="Ingresar"/>
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Registrarse" onclick="location.href='registros.php'"/>
        </td>
    </tr>
    <tr>
    <td colspan="2" align="center">
  <a href="recuperacion.php"> Olvide mi contraseña </a> &nbsp; &nbsp; <a href="modificacion.php">Modificar factura</a>
</table>
</form>
<div align="center" style="color:#00F; text-decoration:none">
Si es la primera vez que usted utiliza nuestra plataforma le recomendamos ver el video de explicación.
<br />
<a href="#">Video</a>
</div>
<div align="right">
<a href="#"><img src="logos/android.jpg" style="width:50px; height:50px;"/></a>
<a href="#"><img src="logos/ios.jpg" style="width:50px; height:50px;" /></a>
</div>
<div align="center">
<a href="http://www.hotelesroyal.com.mx/"><img src="logos/royal.png" /></a>
<a href="http://www.radisson.com.mx/"><img src="logos/radisson.png" /></a>
<a href="http://www.sevillapalace.com.mx/"><img src="logos/sevilla-palace.png" /></a>
<a href="http://www.pedregalpalace.com.mx/"><img src="logos/pedregal-palace.png" /></a>
<a href="http://www.hotel-tapatio.com/"><img src="logos/tapatio.png" /></a>
<a href="http://www.corinto.com.mx/"><img src="logos/corinto.png" /></a>
<a href="http://www.eldiplomatico.com.mx/"><img src="logos/diplomatico.png" /></a>
<a href="http://www.sevilla.com.mx/"><img src="logos/hotel-sevilla.png" /></a>
<a href="http://www.hotelbristol.com.mx/"><img src="logos/bristol.png" /></a>
<a href="http://www.hotelsegovia.com.mx/"><img src="logos/segovia.png" /></a>
<a href="http://www.liabeny.es/"><img src="logos/liabeny.png" /></a>
</div>
<div style="position:fixed;bottom:0;z-index:999999; width:100%;">
<div style="background-color:#ce6505; height:5px; width:auto">
</div>
<div   id="footer" style="background-color:#018367; height:100px; width:auto;">
<div align="center" style="color:#FFF; font:'Times New Roman', Times, serif">
<a href="https://secure.internetpower.com.mx/portals/SevillaTapatio/portal/Secure/FindBoking.aspx" style="color:#FFF; text-decoration:none">
Modificar y Cancelar Reservas</a>&nbsp;&nbsp;<a href="http://www.hotel-tapatio.com/politicas-del-hotel" style="color:#FFF;text-decoration:none"> Politicas del Hotel</a> &nbsp; &nbsp;<a href="http://www.hotel-tapatio.com/aviso-de-privacidad" style="color:#FFF;text-decoration:none">Aviso de Privacidad</a> &nbsp; &nbsp; <a href="http://www.hotel-tapatio.com/empresas-y-agencias" style="color:#FFF;text-decoration:none">Empresa y Agencias</a> &nbsp; &nbsp;<a href="http://www.hotel-tapatio.com/mapa-del-sitio" style="color:#FFF;text-decoration:none"> Mapa de Sitio</a> &nbsp; &nbsp;<a href="http://booking.internetpower.com.mx/SevillaTapatio/hotel/comentarios.aspx?PropertyNumber=237&Asso=261" style="color:#FFF;text-decoration:none"> Comentarios</a>
</div>
<div align="center" style="color:#FFF">
<a href="" style="color:#FFF; text-decoration:none">Developed by Pc-source.com.mx</a>
</div>
</div>
</div>
</body>
</html>