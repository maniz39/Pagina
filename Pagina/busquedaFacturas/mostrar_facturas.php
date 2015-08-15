<?php
	include 'login0.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Facturas</title>
<style>
.tabla{
-webkit-box-shadow: 0px 0px 15px 6px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 15px 6px rgba(0,0,0,0.75);
box-shadow: 0px 0px 15px 6px rgba(0,0,0,0.75);
}
</style>
</head>

<body marginheight="0" marginwidth="0" rightmargin="0" topmargin="0" leftmargin="0" bottommargin="0">
<?php
	$con5 = busqueda_columnas_tabla($link,'facturaXML');
	$dato = '';
	foreach($con5 as $valor){
		$aux = explode('_rec_rfc',$valor);
		if(count($aux)>1){
			$dato = $valor;
		}
	}
	$con4 = busqueda_tabla_en_columna($link,'facturaXML',$dato,trim($rfc),'com_fecha','DESC');
?>
<br /><br />
	<table align="center" cellpadding="6" cellspacing="2" border="0" class="tabla">
		<tr style="background-color:#018367">
            <td align="center">
            	<font style="color:#FFFFFF; font-size:24px">ID</font>
            </td>
            <td align="center">
            	<font style="color:#FFFFFF; font-size:24px">Fecha</font>
            </td>
            <td align="center">
            	<font style="color:#FFFFFF; font-size:24px">Nombre</font>
            </td>
            <td align="center">
            	<font style="color:#FFFFFF; font-size:24px">PDF</font>
            </td> 
            <td align="center">
            	<font style="color:#FFFFFF; font-size:24px">XML</font>
            </td> 
            <td align="center">
            </td> 
		</tr>
	<?php 
		$con = 0;
		$color = '';
		foreach($con4 as $valor){ 
			$con = $con+1;
			if(($con % 2) == 0){$color='#EFDFB8';}else{$color='';} 
	?>
		<tr style="background-color:<?php echo $color; ?>">
			<?php 
				foreach($valor as $clave=>$valor2){			
					if($clave == 'id' || $clave == 'com_fecha' || $clave == 'dir_pdf' || $clave == 'com_rec_nombre'){
			?>
			<td align="center">
				<?php 
					if($clave == 'dir_pdf'){
						$pdf = '';
						$xml = '';						
						if($aux = explode('.pdf',$valor2)){
							$pdf = $aux[0].'.PDF';
							$xml =  $aux[0].'.XML';
							if(!file_exists($pdf)){
								$pdf = $aux[0].'.pdf';
							}
							if(!file_exists($xml)){
								$xml = $aux[0].'.xml';
							}
						}
				?>
                	<a href="<?php echo $pdf?>" target="new" download="<?php echo $pdf?>">
                		<img src="Imagenes/index.jpg" style="width:50px; height:60px"/>
                    </a>
                 </td>
                 <td align="center">
                 	<a href="<?php echo $xml?>" target="new" download="<?php echo $xml?>">
                		<img src="Imagenes/xml.png" style="width:50px; height:60px"/>
                    </a>
                <?php
					}else{
						echo $valor2; 
					}
				?>
            </td>
			<?php }} ?>
            <td>
            	<a href="https://www.consulta.sat.gob.mx/sicofi_web/moduloecfd_plus/validadorcomprobantes/Validador.asp" style="color:#000000" target="new">
                	Validar XML
                </a>
            </td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>