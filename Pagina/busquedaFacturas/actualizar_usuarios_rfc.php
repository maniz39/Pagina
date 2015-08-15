<?php
$col_no_rep = 'com_rec_rfc';
if($con1 = consulta_tabla_completa($link,'facturaXML')){
	$ban = '';
	$num = 0;
	$usuarios = array();
	foreach($con1 as $valor){
		print_r($valor);echo '<br>';
	}
}else{
	die('No existi ninguna factura');
}

?>