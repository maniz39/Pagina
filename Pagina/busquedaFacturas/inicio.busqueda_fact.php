<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Facturas</title>
</head>

<body marginheight="0" marginwidth="0" rightmargin="0" topmargin="0" leftmargin="0" bottommargin="0">
<div style="width:100%; height:100%; z-index:10; position:fixed; top:0px">
<img src="../Downloads/Blue Modern City Vector Illustration.jpg" style="width:100%; height:100%"/>
</div>
<div style="width:100%; height:100%; z-index:20; position:absolute">
<?php
function con_serv()
{
	/// LLAMANDO A BASE DE DATOS
	$link = mysql_connect('pcrescuecommx.ipagemysql.com', 'pcrescue', '91Pc-r'); 
	if (!$link) { 
		die('Could not connect: ' . mysql_error()); 
	} 
	return $link;
}
function con_bd($link,$bd)
{
	if(!$db = mysql_select_db($bd,$link))
	{
		if(!mysql_query("CREATE DATABASE ".$bd, $link))
		{
			die('BASE DE DATOS: ' . mysql_error());
		}
		else
		{
			con_bd($link,$bd);
		}
	}
	return $db;
}

function crear_tabla($tabla)
{
	$sql="CREATE TABLE ".$tabla." (id INT(255) NOT NULL AUTO_INCREMENT, PRIMARY KEY(id))";
	if(!mysql_query($sql))
	{
		die(mysql_error());
	}
}

$link = con_serv();
$bd = con_bd($link,"facturacion");

//jotadas de armando 
		if(!$query=mysql_query('SHOW COLUMNS FROM facturaXML'))
		{
			crear_tabla("facturaXML");
			if(!$query=mysql_query('SHOW COLUMNS FROM facturaXML'))
			{
				die(mysql_error());
			}
		}
		
		$v=0;
		while($row=mysql_fetch_assoc($query))
		{	
			$campo[$v] = strtolower(trim($row['Field']));
			$v = $v + 1;
		} 
//

$cam_bus;
$con=0;
for($x=0;$x<$v;$x++)
{
	//etiqueta rfc ...com_rec_rfc
	//etiqueta folio...
	//etiqueta fecha....com_fecha 
	$ban = explode("rfc",$campo[$x]);
	if(count($ban)>1)
	{
		$cam_bus[$con] = $campo[$x];
		$con = $con+1;
	}
}


if(isset($_GET['rfc'])){$rfc = trim($_GET['rfc']);}else{$rfc = '';}
if(isset($_POST['usuario'])){$usuario = trim($_POST['usuario']);}else{$usuario = '';}
//if(isset($_POST['fecha'])){$fecha = trim($_POST['fecha']);}else{$contraseña = '';}

 

?>
<table align="center" style="width:100%">
	<tr>
		<td align="center">
			<font style="color:#296585; font-size:36px">Usuario: <?php echo $usuario;?></font>
		</td>
    </tr>
    <tr>
		<td align="center">
			<font style="color:#296585; font-size:36px">RFC: <?php echo $rfc; ?></font>
		</td>
    </tr>
    <tr>
		<td align="center">
        <?php
			$conBD="SELECT * FROM facturaXML WHERE ";

			for($v=0;$v<$con;$v++)
			{
				$conBD = $conBD.$cam_bus[$v]." LIKE '%".$rfc."%'";
				if($v < $con-1)
				{
					$conBD = $conBD." OR ";
				}
			}
		?>
		  <table cellpadding="0" cellspacing="3" border="1">
            <?php	
				$res = mysql_query($conBD);
				
                while ($row = mysql_fetch_row($res))
                { 
					?>
					<tr>
                    <?php
      				 for($p=0;$p<count($row);$p++)
					 {
						 ?>
                         <td>
                         <textarea style="height:auto; width:100px">
                         <?php
						 echo $row[$p];
						 ?>
                         </textarea>
                         </td>
                         <?php
					 }
					?>
					</tr>
                    <?php
				}				
			?>             
          </table>	
		</td>
    </tr>
</table>
</table>
</div>
</body>
</html>