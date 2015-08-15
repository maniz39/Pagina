<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.png" />
<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
<![endif]-->
<!--[if lt IE 8]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
<![endif]-->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
< ![endif]-->
<title>Facturas Hotel el Tapatio</title>
</head>
<body marginheight="0" marginwidth="0" rightmargin="0" topmargin="0" leftmargin="0" bottommargin="0">
<div style="background-color:#018367; height:20px; width:auto;">

</div>
<div>
<a href="http://www.hotel-tapatio.com/">
<img src="hotel_el_ta
patio.gif" width="200" height="200" /></a>

</div>
<div style="background-color:#018367; height:20px; width:auto;">

</div>
<?php

/*
function recorrerMatriz($matriz,$n){
		foreach($matriz as $clave=>$valor){
				if (is_array($valor)){ 
						echo 'Clave:'. $clave."->".$valor;
						echo '<br><br>';
						$n = $n.":".$clave;
						recorrerMatriz($valor,$n);
				}else{ 
						echo $n.":".$clave.': '.$valor;
						echo '<br>';
				}
	}
} 
*/
/*	
function objectToArray($object) {
    if(!is_object($object) && !is_array($object))
        return $object;

    return array_map('objectToArray', (array) $object);
}
*/


function arreglo($xml,$n,$data)
{
			//echo $n."Clave: ".($xml->getName())."<br>";		
			$name = $xml->getName();	
			$n=$n.$name[0].$name[1].$name[2]."_";
			$ban=0;
			foreach ($xml->attributes() as $clave2=>$valor2)
			{
				//echo $n.($xml->getName())."/Atributo: ".$clave2."=".$valor2."<br>";
				$data[$n.$clave2]=$valor2;
			}	
			foreach ($xml->getNamespaces() as $clave=>$valor)
			{
				//echo $n."--NAMESPACE: ".$clave."<br>";
				//$n=$n.$clave[0].$clave[1].$clave[2]."_";
				foreach ($xml->children($valor) as $clave3=>$valor3)
				{
					if(is_object($valor3))
					{
						$data = arreglo($valor3,$n,$data);
					}
				}
				$ban=1;
			}
			
			if($ban==0)
			{
				foreach ($xml as $clave3=>$valor3)
				{
						if(is_object($valor3))
						{
							//$n=$n.$clave3[0].$clave3[1].$clave3[2]."_";
							$data = arreglo($valor3,$n,$data);
						}
				}	
			}
	return $data;
}


function con_serv()
{
	/// LLAMANDO A BASE DE DATOS
	$link = mysql_connect('pcrescuecommx.ipagemysql.com', 'pcrescue', '93Pc-r'); 
	if (!$link) { 
		die('Could not connect: ' . mysql_error()); 
	} 
	return $link;
}

function cer_serv($link)
{
	if(!mysql_close($link))
	{
		die('close not : ' . mysql_error()); 
	}
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


$ftp_server = "ftp.pc-rescue-and-careful.com";
$ftp_user = "pcrescuecommx";
$ftp_pass = "91Pc-r";

// establecer una conexión o finalizarla
$conn_id = ftp_connect($ftp_server) or die("No se pudo conectar a $ftp_server"); 


// intentar iniciar sesión
if (ftp_login($conn_id, $ftp_user, $ftp_pass)) {
    echo "Conectado como $ftp_user@$ftp_server\n";
} else {
    echo "No se pudo conectar como $ftp_user\n";
}

echo "<br><br>";

$path="facturahotel";
$dir_handle = opendir($path) or die("No se pudo abrir $path");

$total=0;
while ($file = readdir($dir_handle))
{
	$tipo = explode(".",$file);	
	$lon = count($tipo);
	if(strtolower($tipo[$lon-1]) == "xml" )
	{
		$total = $total+1;
	}
}
closedir($dir_handle);

$path="facturahotel";
$dir_handle = opendir($path) or die("No se pudo abrir $path");

if(isset($_GET['archivo'])){$archivo = $_GET['archivo'];}else{$archivo=0;}

$ant=$archivo;
$archivo=0;

while ($file = readdir($dir_handle))
{
	$tipo = explode(".",$file);	
	$lon = count($tipo);
	if(strtolower($tipo[$lon-1]) == "xml"  && $archivo > $ant-1)
	{
	
		/////////////////////  Recuperacion de datos XML /////////////
		$url="facturahotel/".$file; 
		echo "-------------------------------------------------------------------------------------------------------------------------------";
		echo "<br><br>".$archivo.$url."<br><br>";
		
		if ($xml = simplexml_load_file($url)){
	
	
			$data="";
			$arreglo = arreglo($xml,"",$data);
			echo count($arreglo)."<br>";
	
			$q=0;		
	
			foreach ($arreglo as $clave=>$valor)
			{
				$data[$q][0]=strtolower(trim($clave));
				$data[$q][1]=$valor;
				$q=$q+1;
				//echo $clave."=".$valor."<br>";
			}
			$data[$q][0]="dir_pdf";
			$pdf = explode(".",$url);
			$lon3 = count($pdf);
			$pdft = "";
			for($h=0;$h<$lon3-1;$h=$h+1)
			{
				$pdft = $pdft.$pdf[$h];
			}
			$data[$q][1]=$pdft.".pdf";
			
			$q=$q+1;
			
			$n = $q;			
			
		
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
		
		/// LLAMANDO A BASE DE DATOS
		
		for($s=0;$s<=$n;$s=$s+1)
		{
			$ban=0;	 
			
			for($g=0;$g<=$v;$g=$g+1)
			{	
				if( strtolower(trim($campo[$g])) == strtolower(trim($data[$s][0])) )
				{
					//echo strtolower(trim($row['Field']))."<br>";
					$ban=1;
					$g=$v;
				}
			} 
			
			if($ban == 0 && strtolower(trim($data[$s][0])) )
			{
				$lon2 = strlen($data[$s][1])+100;
				if($query2 = mysql_query("ALTER TABLE facturaXML ADD ".strtolower(trim($data[$s][0]))." VARCHAR(".$lon2.")") )
				{
					echo "se inserto la columna = ".strtolower(trim($data[$s][0]))."<br>";
					mysql_free_result($query2);
				}
				else
				{
					echo "No se inserto la columna = ".strtolower(trim($data[$s][0]))."<br>";
					die(mysql_error());
				}
			}
		}		
		mysql_free_result($query);
		
////////////GUARDADO EN LA BASE DE DATOS/////////////////	
				
				$con = "SELECT * FROM facturaXML WHERE"; 
				for($x=0;$x<$n;$x++)
				{
					$con = $con." ".$data[$x][0]."='".$data[$x][1]."' ";
					if($x<$n-1)
					{
						$con = $con."AND";
					}
				}
				echo $con."<br>";
				$consulta = mysql_query($con);
				$sql="";
				if(mysql_num_rows($consulta)<1)
				{
					$sql = "INSERT INTO facturaXML (";
					for($x=0;$x<$n;$x++)
					{
						$sql = $sql.$data[$x][0];
						if($x<$n-1)$sql=$sql.",";
					}
					$sql = $sql.") VALUES (";
					for($x=0;$x<$n;$x++)
					{
						$sql = $sql."'".$data[$x][1]."'";
						if($x<$n-1)$sql=$sql.",";
					}			
					$sql=$sql.")";
					if(mysql_query($sql))
					{				
					   ///// DATOS DE FACTURACION //////////
						echo "<br>se inserto = ".$sql;
					}
					else
					{
						echo "<br>no se pudeo = ".$sql;
						die('ERROR:' . mysql_error());
					}
				}else{echo "<br>ya esxiste un registro ".$file."<br>";}
				mysql_free_result($consulta);
				mysql_free_result($sql);
	 }
  }
  if(strtolower($tipo[$lon-1]) == "xml" )
  {
	  $archivo=$archivo+1;
  }
  if($archivo == $ant+1)
  {
	  break;
  }
}
closedir($dir_handle);
cer_serv($link);

if($archivo == $total)
{	
	echo '
	<script language="JavaScript" type="text/javascript">
	
	var pagina="http://pc-rescue-and-careful.com/busquedaFacturas/busqueda_facturas.php?archivo=0" 
	function redireccionar() 
	{
	location.href=pagina
	} 
	setTimeout ("redireccionar()", 100);
	
	</script>
	';
}
else
{
	echo '
	<script language="JavaScript" type="text/javascript">
	
	var pagina="http://pc-rescue-and-careful.com/busquedaFacturas/busqueda_facturas.php?archivo='.$archivo.'" 
	function redireccionar() 
	{
	location.href=pagina
	} 
	setTimeout ("redireccionar()", 100);
	
	</script>
	';
}
?>
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
<div align="center" style="color:#FFF; font:'Times New Roman', Times, serif">
<a href="https://secure.internetpower.com.mx/portals/SevillaTapatio/portal/Secure/FindBoking.aspx" style="color:#FFF; text-decoration:none">
Modificar y Cancelar Reservas</a>&nbsp;&nbsp;<a href="http://www.hotel-tapatio.com/politicas-del-hotel" style="color:#FFF;text-decoration:none"> Politicas del Hotel</a> &nbsp; &nbsp;<a href="http://www.hotel-tapatio.com/aviso-de-privacidad" style="color:#FFF;text-decoration:none">Aviso de Privacidad</a> &nbsp; &nbsp; <a href="http://www.hotel-tapatio.com/empresas-y-agencias" style="color:#FFF;text-decoration:none">Empresa y Agencias</a> &nbsp; &nbsp;<a href="http://www.hotel-tapatio.com/mapa-del-sitio" style="color:#FFF;text-decoration:none"> Mapa de Sitio</a> &nbsp; &nbsp;<a href="http://booking.internetpower.com.mx/SevillaTapatio/hotel/comentarios.aspx?PropertyNumber=237&Asso=261" style="color:#FFF;text-decoration:none"> Comentarios</a>
</div>
<div align="center" style="color:#FFF">
<a href="" style="color:#FFF; text-decoration:none">Developed by Pc-source.com.mx</a>
</div>
</div>
</body>
</html>
