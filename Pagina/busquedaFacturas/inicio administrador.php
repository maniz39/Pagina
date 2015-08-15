<?php
   if(isset($_POST['nom_usuario'])){$nom_usuario = $_POST['nom_usuario'];}else{$nom_usuario = '';}
   if(isset($_POST['cod_usuario'])){$cod_usuario = $_POST['cod_usuario'];}else{$cod_usuario = '';}
   if(isset($_POST['np'])){$np = $_POST['np'];}else{$np = '';}
   if(isset($_POST['ver'])){$ver = $_POST['ver'];}else{$ver = '';}

   
   //conexion servidor
   include 'funciones_mysql.php';
   $link = conexion_servidor_r();
   $bd = conexion_bd_r($link);
   
   //busqueda de pagina por numero
    $pagina = "";
	$permiso = "";
	if($consulta = busqueda_tabla_en_columna("lista_paginas","id",$np))
	{
		foreach ($consulta as $valor)
		{
			if($valor["id"] == $np) 
			{
				$pagina = $valor["url"];
				$permiso = $valor["permiso"];
			}
		}
	}
   
if($permiso != "" || $ver == '3' || $ver == '2' || $ver == '1')
{ 
	if($ver == "")
	{
	   ?>
       <form method="post" action="<?php echo $pagina;?>" id="f2">
         <?php
			foreach ($_POST as $clave=>$dato)
			{
			?>
            	<input type="hidden" name="<?php echo $clave;?>" value="<?php echo $dato;?>"/>
            <?php
			}
		 ?>
         <input type="hidden" name="boton" value="Iniciar"/>
       </form>
       <script type="application/javascript" language="javascript">
	 		document.getElementById('f2').submit();
	   </script>
       <?php
	}
	else
	{  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>inicio de cuentas administradores</title>
<style>
  .t1{
	  border-radius: 5px 5px 5px 5px;
	  border:none;
	  background: rgba(194,194,194,1);
background: -moz-linear-gradient(top, rgba(194,194,194,1) 0%, rgba(255,255,255,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(194,194,194,1)), color-stop(100%, rgba(255,255,255,1)));
background: -webkit-linear-gradient(top, rgba(194,194,194,1) 0%, rgba(255,255,255,1) 100%);
background: -o-linear-gradient(top, rgba(194,194,194,1) 0%, rgba(255,255,255,1) 100%);
background: -ms-linear-gradient(top, rgba(194,194,194,1) 0%, rgba(255,255,255,1) 100%);
background: linear-gradient(to bottom, rgba(194,194,194,1) 0%, rgba(255,255,255,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c2c2c2', endColorstr='#ffffff', GradientType=0 );
	 }
  .text{
	  
	  border-radius: 5px 5px 5px 5px;
	  
	  background: rgba(255,255,255,1);
background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(194,194,194,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,1)), color-stop(100%, rgba(194,194,194,1)));
background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(194,194,194,1) 100%);
background: -o-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(194,194,194,1) 100%);
background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(194,194,194,1) 100%);
background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(194,194,194,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#c2c2c2', GradientType=0 );
  }
  .text2{
	  background: rgba(194,194,194,1);
background: -moz-linear-gradient(top, rgba(194,194,194,1) 0%, rgba(255,255,255,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(194,194,194,1)), color-stop(100%, rgba(255,255,255,1)));
background: -webkit-linear-gradient(top, rgba(194,194,194,1) 0%, rgba(255,255,255,1) 100%);
background: -o-linear-gradient(top, rgba(194,194,194,1) 0%, rgba(255,255,255,1) 100%);
background: -ms-linear-gradient(top, rgba(194,194,194,1) 0%, rgba(255,255,255,1) 100%);
background: linear-gradient(to bottom, rgba(194,194,194,1) 0%, rgba(255,255,255,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c2c2c2', endColorstr='#ffffff', GradientType=0 );
  }
</style>

</head>

<body marginheight="0" leftmargin="0" marginwidth="0" bottommargin="0" rightmargin="0" topmargin="0" onLoad="document.f1.usuario.focus();">
<br /><br /><br />
<table align="center" border="0" cellpadding="5" cellspacing="0" width="500" class="text">
  <tr>
    <td align="center">
     <br />
     <font style=" font-size:36px">Iniciar sesión</font>
    </td>
  </tr>
  <tr>
    <td align="center">
      <form method="post" action="<?php echo $pagina; ?>" name="f1">
      <table style="color:#5B5B5B; font-size:20px">
       <tr>
        <td align="right">
         Usuario:
        </td>
        <td>
         <input type="text" size="20" name="nom_usuario" class="t1" value="<?php echo $nom_usuario;?>"/>
        </td>
       </tr>
       <tr>
        <td align="right">
         contraseña:
        </td>
        <td>
         <input type="password" size="20" name="cod_usuario" class="t1" value="<?php echo $cod_usuario;?>"/>
        </td>
       </tr>
       <tr>
        <td align="center" colspan="2">
         <input type="submit" value="Iniciar" name="boton"/>
         <input type="submit" value="Salir" name="boton"/>
         <?php
			foreach ($_POST as $clave=>$dato)
			{
				if($clave != "nom_usuario" && $clave != "cod_usuario" && $clave != "boton")
				{
			?>
            	<input type="hidden" name="<?php echo $clave;?>" value="<?php echo $dato;?>"/>
            <?php
				}
			}
		 ?>
        </td>
       </tr>          
      </table>
      </form>
      <font style="color:#F00">
        <?php if($ver == 1){echo "El usuario o contraseña son inválidos";}?>
        <?php if($ver == 2){echo "No tiene permiso para acceder a esta página";}?>
      </font>
      <br /><br />
      <form method="post" action="nuevo usuario.php">
      	<input type="submit" value="Registrar" style="width:150px"/>
      	<?php
			foreach ($_POST as $clave=>$dato)
			{
			?>
            	<input type="hidden" name="<?php echo $clave;?>" value="<?php echo $dato;?>"/>
            <?php
			}
		 ?>
      </form>
      <br /><br />
    </td>
  </tr>
</table>
</body>
</html>
<?php
	}
}
else
{
	?>
    <body>
        <form method="post" action="<?php echo $pagina;?>" id="f3"> 
            <?php
			foreach ($_POST as $clave=>$dato)
			{
			?>
            	<input type="hidden" name="<?php echo $clave;?>" value="<?php echo $dato;?>"/>
            <?php
			}
			?>
            <input type="hidden" name="pagina" value="<?php echo $pagina;?>"/>
        </form>
    </body>
    <script type="application/javascript" language="javascript">
	 	document.getElementById('f3').submit();
	</script>
    <?php
}
?>
