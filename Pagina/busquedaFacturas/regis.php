<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
include 'funciones_mysql.php';
$link = conexion_servidor_r();
$bd = conexion_bd_r($link);

function actualizar_lista_de_usuarios($link){
	if($con = consulta_tabla_completa($link,'facturaXML')){
		$con2 = busqueda_columnas_tabla($link,'usuarios');
		
		foreach($con2 as $valor){
			$aux = explode('_rec_',$valor);
			if(count($aux)>1){
				$arreglo[] = $valor;
			}
		}

		foreach ($con as $valor) {
			$arreglo2 = array();
			// un usuario

			foreach ($valor as $clave => $valor2) {
				$ban = 0;
				foreach($arreglo as $valor3){
					if($clave == $valor3){
						$ban = 1;
						$aux2 = explode('_rfc',$clave);
						if(count($aux2)>1){
							$arreglo2['usuario'] = strtoupper(trim($valor2));	
						}
					}
				}
				if($ban == 1){
					$arreglo2[$clave] = strtoupper(trim($valor2));
				}
			}
			$usuario_aux = strtoupper(trim($arreglo2['usuario']));
			if($usuario_aux != ''){
				$con3 = busqueda_tabla_en_columna($link,'usuarios','usuario',$usuario_aux);
				if(!$con3){
					if(insertar_regisatro_tabla($link,'usuarios',$arreglo2)){		
					}
				}
			}
		}

	}

}

actualizar_lista_de_usuarios($link);

$empresa = '';
$rfc = '';
$email = '';
$contra = '';
$pais = '';
$estado = '';
$municipio = '';
$colonia = '';
$calle = '';
$next = '';
$nint = '';
$tel = '';

foreach( $_POST as $clave=>$valor){
	$$clave = strtoupper(trim($valor));
}
$porciento = 70;
$ban = 0;
if($con = busqueda_tabla_en_columna($link,'usuarios','com_rec_rfc',$rfc)){
	$ban = $ban + 1;//1
	foreach($con as $valor){
		foreach($valor as $clave=>$valor2){
			$valor2 = strtoupper(trim($valor2));
			if($clave == 'com_rec_nombre'){
				similar_text($valor2,$empresa,$por);
				if($por > $porciento){
					$ban = $ban + 1;//2
				}				
			}
			/*
			if($clave == 'com_rec_dom_pais'){
				similar_text($valor2,$pais,$por);
				if($por > $porciento){
					$ban = $ban + 1;//3
				}				
			}
			if($clave == 'com_rec_dom_estado'){
				similar_text($valor2,$estado,$por);
				if($por > $porciento){
					$ban = $ban + 1;//4
				}				
			}
			if($clave == 'com_rec_dom_localidad'){
				similar_text($valor2,$municipio,$por);
				if($por > $porciento){
					$ban = $ban + 1;//5
				}				
			}
			if($clave == 'com_rec_dom_nointerior'){
				similar_text($valor2,$nint,$por);
				if($por > $porciento){
					$ban = $ban + 1;//6
				}				
			}
			if($clave == 'com_rec_dom_noexterior'){
				similar_text($valor2,$next,$por);
				if($por > $porciento){
					$ban = $ban + 1;//7
				}				
			}
			if($clave == 'com_rec_dom_calle'){
				similar_text($valor2,$calle,$por);
				if($por > $porciento){
					$ban = $ban + 1;//8
				}				
			}
			*/
		}
	}
}

if($ban == 2){
	$arreglo['contrasena'] = $contra;
	$arreglo['correo'] = $email;
	$arreglo['telefono'] = $tel;
	$arreglo['fecha_hora_reg'] = fecha_hora();
	$arreglo['ip_reg'] = IP();
	
	$arreglo2['com_rec_rfc'] = $rfc;
	
	if($con3 = busqueda_tabla_en_columna($link,'usuarios','com_rec_rfc',$rfc)){
		$con3 = $con3[0];
		$usuario2 = $con3['usuario'];
		$contra2 = $con3['contrasena'];
		if($usuario2 && $contra2){
			foreach($con3 as $clave=>$valor){
				$aux2 = explode('_rec',$clave);
				if(count($aux2)>1){
					$arreglo[$clave] = $valor;
				}
			}			
			$con4 = insertar_regisatro_tabla($link,'usuarios',$arreglo);			
		}else{
			$con4 = editar_regisatro_tabla($link,'usuarios',$arreglo,$arreglo2);
		}
	if($con4){
		
		////------->>>>Ahi esta tu mensaje pinche joto
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
<div style="background-color:#018367; height:20px; width:auto;">

</div>
<div>
<a href="http://www.hotel-tapatio.com/">
<img src="http://pc-rescue-and-careful.com/busquedaFacturas/logos/hotel_el_ta
patio.gif" width="200" height="200" /></a>

</div>
<div style="background-color:#018367; height:20px; width:auto;">

</div>
<?php echo "Su registro fue efectuado con exito."; ?>
<?php echo "Su contraseña es: &nbsp; $contra"; ?>

<div align="center">
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
</div>
<div style="background-color:#ce6505; height:5px; width:auto">
</div>
<div   id="footer" style="background-color:#018367; height:100px; width:auto;">
<div align="center" style="color:#FFF; font:"Times New Roman", Times, serif">
<a href="https://secure.internetpower.com.mx/portals/SevillaTapatio/portal/Secure/FindBoking.aspx" style="color:#FFF; text-decoration:none">
Modificar y Cancelar Reservas</a>&nbsp;&nbsp;<a href="http://www.hotel-tapatio.com/politicas-del-hotel" style="color:#FFF;text-decoration:none"> Politicas del Hotel</a> &nbsp; &nbsp;<a href="http://www.hotel-tapatio.com/aviso-de-privacidad" style="color:#FFF;text-decoration:none">Aviso de Privacidad</a> &nbsp; &nbsp; <a href="http://www.hotel-tapatio.com/empresas-y-agencias" style="color:#FFF;text-decoration:none">Empresa y Agencias</a> &nbsp; &nbsp;<a href="http://www.hotel-tapatio.com/mapa-del-sitio" style="color:#FFF;text-decoration:none"> Mapa de Sitio</a> &nbsp; &nbsp;<a href="http://booking.internetpower.com.mx/SevillaTapatio/hotel/comentarios.aspx?PropertyNumber=237&Asso=261" style="color:#FFF;text-decoration:none"> Comentarios</a>
</div>
<div align="center" style="color:#FFF">
<a href="" style="color:#FFF; text-decoration:none">Developed by Pc-source.com.mx</a>
</div>
</div>
</body>
</html>';/////////////////<<<<<--------------------------------------------aqui pinche maniz
		
		// Para enviar un correo HTML, debe establecerse la cabecera Content-type
		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		mail($email, 'Registro Hotel el Tapatio',$mensaje,$cabeceras);
	?>
    <body>
        <form method="post" action="index.php" id="f3"> 
        </form>
    </body>
    <script type="application/javascript" language="javascript">
        //alert("No es posible hacer su registro, ya que el porcentaje de datos proporcionado no cubren en nivel para la validación de su registro.");
		document.getElementById('f3').submit();
    </script>
    <?php
		
	}else{
		die('Error en la actualizacion de datos');
	}
	}
}else{
	?>
    <body>
        <form method="post" action="registros.php" id="f3"> 
            <?php
            foreach ($_POST as $clave=>$dato)
            {
            ?>
                <input type="hidden" name="<?php echo $clave;?>" value="<?php echo $dato;?>"/>
            <?php
            }
            ?>
            <input type="hidden" name="ver" value="1"/>
        </form>
    </body>
    <script type="application/javascript" language="javascript">
        alert("No es posible hacer su registro, ya que el porcentaje de datos proporcionado no cubren en nivel para la validación de su registro.");
		document.getElementById('f3').submit();
    </script>
    <?php
}

?>
</html>