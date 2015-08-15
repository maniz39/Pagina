<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:Facturacion Hotel Tapatio:.</title>
<link href="/assets/css/styles.css" type="text/css" rel="stylesheet" />

</head>

<body background="Blue Modern City Vector Illustration.jpg">
<?php
sesion_start();
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


function verifica($user,$password,$resultado)
{
$sql="SELECT * FROM Registro WHERE Nombre = '$user' and Email = '$password'";
	$rec = mysql_query($sql);
    $count = 0;

    while($row = mysql_fetch_object($rec))
    {
        $count++;
        $result = $row;
    }

    if($count == 1)
    {
        return 1;
    }

    else
    {
        return 0;
    }
}

if(!isset($_SESSION['userid']))
{
    if(isset($_POST['login']))
    {
        if(verifica($_POST['Nombre'],$_POST['Email'],$result) == 1)
        {
            $_SESSION['userid'] = $result->idusuario;
            header("location:www.pc-rescue-and-careful.com/busquedaFacturas/inicio.busqueda_fact.php");
        }
        else
        {
            echo '<div class="error">Su usuario es incorrecto, intente nuevamente o pongase en contacto con nosotros al siguiente numero 38372929.</div>';
        }
    }	

?>
<div style="height: 100px; width: 400px; background-color: #093; margin: 0 auto; text-align: center;" align="center">"Un lugar a la altura de tus sue&ntilde;os "
<div style="position: fixed; height: 400px; width: 400px; background-color: #ccc; z-index: 111111; margin: 0; text-align: center; opacity: 0.9;" align="center">
<p align="center">Si usted es primera vez que utiliza nuestro sistema de facturaci&oacute;n, por favor ingrese --&gt;<a href="registros.html">!aqui!</a> &lt;--&nbsp;para darse de alta y pueda checar sus futuras facturas.</p>
<form action="enviar.php" method="post">Raz&oacute;n Social<br /><br /> <input maxlength="13" name="user" size="30" type="text" placeholder="RFC" /><br /><br /> Correo Electronico<br /><br /> <input maxlength="20" name="password" size="30" type="password" placeholder="Contrase&ntilde;a" /> <br /><br /> <input name="login" type="submit" /> <br />
<p align="center">&nbsp;</p>
</form></div>
</div>
<?php
} else {
	echo 'Su usuario ingreso correctamente.';
	echo '<a href="logout.php">Logout</a>';
}
?>
</body>
</html>