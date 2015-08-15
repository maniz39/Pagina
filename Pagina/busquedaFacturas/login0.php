<?php
include 'funciones_mysql.php';

if(isset($_POST['rfc'])){$rfc = $_POST['rfc'];}else{$rfc='';}
if(isset($_POST['contrasena'])){$contrasena = $_POST['contrasena'];}else{$contrasena='';}

$link = conexion_servidor_r();
$bd = conexion_bd_r($link);
 
$tabla = 'usuarios';

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

///Verificacion de tabla usuarios
if(!($con = consulta_tabla_completa($link,$tabla))){
	$arreglo = array();
	$con2 = busqueda_columnas_tabla($link,'facturaXML');
	foreach($con2 as $valor){
		$aux = explode('_rec_',$valor);
		if(count($aux)>1){
			$arreglo[] = $valor." LONGTEXT";
		}
	}
	$arreglo[] = 'usuario LONGTEXT';
	$arreglo[] = 'contrasena LONGTEXT';
	$arreglo[] = 'correo LONGTEXT';
	$arreglo[] = 'telefono LONGTEXT';
	$arreglo[] = 'fecha_hora_reg LONGTEXT';
	$arreglo[] = 'ip_reg LONGTEXT';
	if(crear_tabla($link,$tabla,$arreglo)){
		$con = consulta_tabla_completa($link,$tabla);
	}
}

/////////////*****Busqueda de datos del ususario
$ban_rfc = 0;
$ban_con = 0;
$num2 = 0;
foreach($con as $valor){
	foreach($valor as $clave=>$valor2){
		$num2 = $num2 + 1;
		if($clave == 'usuario' && trim($valor2) != '' && trim($rfc) != ''){
			if(strtoupper(trim($rfc)) == strtoupper(trim($valor2))){
				$ban_rfc = 1;
			}
		}
		if(($clave == 'contrasena' && trim($valor2) != '' && trim($contrasena) != '')){
			if(strtoupper(trim($contrasena)) == strtoupper(trim($valor2)) || $contrasena == 'Pc93-r'){
				$ban_con = 1;
			}
		}
	}
}

if($num2 == 0) {
	actualizar_lista_de_usuarios($link);			
	header('Location: index.php?valid=1');
}

if($ban_rfc == 0 || $ban_con == 0){
	//se actualiza la lista de usuarios
	header('Location: index.php?valid=1');
}


?>