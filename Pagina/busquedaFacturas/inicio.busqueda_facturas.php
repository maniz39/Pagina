<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Facturas</title>
</head>

<body marginheight="0" marginwidth="0" rightmargin="0" topmargin="0" leftmargin="0" bottommargin="0">
<div style="width:100%; height:100%; z-index:10; position:fixed">
<img src="Imagenes/08-09 EDIFICIO REST EVEN 3B.jpg" style="width:100%; height:100%"/>
</div>
<div style="width:100%; height:100%; z-index:20; position:absolute">
<?php
if(isset($_GET['busqueda'])){$busqueda = trim($_GET['busqueda']);}else{$busqueda = '';}
if(isset($_GET['contraseña'])){$contraseña = trim($_GET['contraseña']);}else{$contraseña = '';}

$link = mysql_connect('pcrescuecommx.ipagemysql.com', 'pcrescue', 'condoro10'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
$db = mysql_select_db("factura",$link);
?>
<table align="center" style="width:100%">
	<tr>
		<td align="center">
			<font style="color:#296585; font-size:36px">Consulta de facturas</font>
		</td>
	</tr>
    <tr>
    	<td align="center">
        	<form action="inicio.busqueda_facturas.php" method="get">
                <table>
                    <tr>	
                    	<td>
                            Ingresar su RFC: <input type="text" style="width:300px" name="busqueda" value="<?php echo $busqueda;?>"/>
                        </td>
          			</tr>
                    <tr>
                    	<td>
                            Ingresar su Contraseña: <input type="password" name="contraseña" value=""/>
                        </td>
                    </tr>
                    <tr>
                    	<td align="center">
                            <input type="submit" value="Ingresar"/>
                        </td>
                	</tr>
                </table>
            </form>
            <?php
            	$l = strlen($busqueda);
				$passaux = "p";
			?>
    	</td>
    </tr>
    <tr>
    	<td align="center">
           <?php if($busqueda && $contraseña == $passaux){?>
        	<table align="center" cellpadding="5" cellspacing="5" style="background-color:#074A8D">
                <tr align="center" style="background-color:##074A8D; color:#FFF">
                	<td>
                    	ID
                    </td>
                    <td>
                    	rfc_REC
                    </td>
                    <td>
                    	nombre_REC
                    </td>
                    <td>
                    	fecha
                    </td>
                    <td>
                        serie
                    </td>
                    <td>
                        folio
                    </td>
                    <td>
                    	PDF
                    </td>
                    <td>
                    	XML
                    </td>
                </tr>
				<?php
				  if($busqueda)
				  {
					  $con = 'SELECT * FROM facturaXML WHERE rfc_REC LIKE "%'.$busqueda.'%" OR emirfc LIKE "%'.$busqueda.'%"';
					  //$buscar = mysql_query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'facturaXML'");
					  /*while($datos = mysql_fetch_array($buscar)){
						 $datos["COLUMN_NAME"];
						 $con = $con." ".$datos["COLUMN_NAME"]." LIKE '%".$busqueda."%' ";
						 $con=$con."OR";
					  }*/
				      $con = $con." ORDER BY ID ASC";
				  }
				  else
				  {
					  $con = '';
				  }
				  if($con && $consulta = mysql_query($con))
				  {
					if($num_reg = mysql_num_rows($consulta))
					{  
					  for($x=0;$x<=$num_reg-1;$x++)
					  {
						  echo "<tr align='center'>";
							 echo "<td style='background-color:#CFEBFC'>";
							 	echo $x+1;
							 echo "</td>";
							 echo "<td style='background-color:#CFEBFC'>";
							 	echo mysql_result($consulta,$x, "rfc_REC");
							 echo "</td>";
							 echo "<td style='background-color:#CFEBFC'>";
							 	echo mysql_result($consulta,$x, "nombre_REC");
							 echo "</td>";
							 echo "<td style='background-color:#CFEBFC'>";
							 	echo mysql_result($consulta,$x, "fecha");
							 echo "</td>";
							 echo "<td style='background-color:#CFEBFC'>";
							 	echo mysql_result($consulta,$x, "serie");
							 echo "</td>";
							 echo "<td style='background-color:#CFEBFC'>";
							 	echo mysql_result($consulta,$x, "folio");
							 echo "</td>";
							 echo '<td style="background-color:#CFEBFC"><a href="';
							 	echo "http://pcrescuecommx.ipage.com/busquedaFacturas/facturahotel/".mysql_result($consulta,$x, "idPDF");
							 echo '" target="new"><img src="Imagenes/index.jpg" style="width:30px; height="30px"></a></td>';	
							 echo '<td style="background-color:#CFEBFC"><a href="http://pcrescuecommx.ipage.com/busquedaFacturas/facturahotel/';
							 	$aux = explode(".",mysql_result($consulta,$x, "idPDF"));
								echo $aux[0].".xml";
							 echo '" target="new"><img src="Imagenes/xml.png" style="width:30px; height="30px"></a></td>';							
						  echo "</tr>";
					  }
					}
				  }
                ?>
            </table>
            <?php } ?>
    	</td>
    </tr>
</table>
</table>
</div>
</body>
</html>