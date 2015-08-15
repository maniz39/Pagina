<?php

////////////////////////////////////********Limites de PHP*******///////////////////////////////////////

ini_set("memory_limit","120M"); 
set_time_limit(10000);

////////////////////////////////////********CONEXIONES*********///////////////////////////////////////

function conexion_servidor_r($servidor="pcrescuecommx.ipagemysql.com",$nom_usuario="pcrescue",$cod_usuario="91Pc-r")
{
	if($link = mysqli_connect($servidor,$nom_usuario,$cod_usuario)){
		return $link;
	}else{
		die('no se conecto a mysql = '.mysqli_error());
	}
}


function conexion_bd_r($link,$bd="facturacion")
{
	if($bd1 = mysqli_select_db($link,$bd))
	{
		return $bd1;
	}
	else
	{
		if(crear_base_datos($link,$bd))
		{
			$bd1 = mysqli_select_db($link,$bd);
			return $bd1;
		}
		else
		{
			return false;
		}
	}
}
////////////////////////////////////********CREAR*********///////////////////////////////////////

function crear_base_datos($link,$bd)
{
	if(mysqli_query($link,"CREATE DATABASE ".$bd))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function crear_tabla($link,$tabla,$campos='')
{
	$sql="CREATE TABLE ".$tabla." (id INT(255) NOT NULL AUTO_INCREMENT, PRIMARY KEY(id)";
	if(is_array($campos) && $campos!='')
	{
		foreach ($campos as $datos)
		{
			$sql = $sql.",".$datos;
		}
	}
	$sql = $sql.")";
	
	if(mysqli_query($link,$sql))
	{
		return true;
	}
	else
	{
		return false;
		//print_r($sql);
		//die("No se creo la tabla ".mysqli_error());
	}
}


////////////////////////////////////********CONSULTA*********///////////////////////////////////////

function consulta_tabla_completa($link,$tabla,$col_ord='',$col_no_repet=''){
	$arreglo = array();
	if($col_ord != ''){
		$con2 = "SELECT * FROM ".$tabla." ORDER BY ".$col_ord;
	}else{
		$con2 = "SELECT * FROM ".$tabla;
	}
	if($consulta = mysqli_query($link,$con2)){
		$num=0;
		while($con1 = mysqli_fetch_assoc($consulta)){
			foreach($con1 as $clave=>$valor){
				$arreglo[$num][$clave]=$valor;
			}
			$num=$num+1;
		}
		return $arreglo;
	}
	return false;
}


////////////////////////////////////********INSERTAR*********///////////////////////////////////////
function insertar_regisatro_tabla($link,$tabla , $arreglo)
{
	$con = "INSERT INTO ".$tabla." (";
	$n = 1;
	foreach ($arreglo as $clave=>$valor)
	{
		$con = $con.$clave;
		if($n < count($arreglo))
		{
			$con = $con.",";
			$n++;	
		}	
	}
	$con = $con.") VALUES (";
	$n = 1;
	foreach ($arreglo as $clave=>$valor)
	{
		$con = $con."'".$valor."'";
		if($n < count($arreglo))
		{
			$con = $con.",";
			$n++;	
		}	
	}
	$con = $con.")";
	if(mysqli_query($link,$con))
	{
		return true;
	}
	else
	{
		print_r($con);
		die("No se inserto el registro en ".$tabla);
	}
}

////////////////////////////////////********EDITAR*********///////////////////////////////////////

function editar_regisatro_tabla($link,$tabla,$arreglo,$arreglo_id,$tipo_and_or="AND")
{
	$con = "UPDATE ".$tabla." SET ";
	$n = 1;
	foreach ($arreglo as $clave=>$valor)
	{
		$con = $con.$clave."='".$valor."'";
		if($n < count($arreglo))
		{
			$con = $con." , ";
			$n++;	
		}	
	}
	$con = $con." WHERE ";
	$n = 1;
	foreach ($arreglo_id as $clave=>$valor)
	{
		$con = $con.$clave."='".$valor."'";
		if($n < count($arreglo_id))
		{
			$con = $con." ".$tipo_and_or." ";
			$n++;	
		}	
	}

	if($consulta = mysqli_query($link,$con))
	{
		return true;
	}
	else
	{
		print_r($con);
		die('');
		return false;
		//die("No se EDITO el registro en ".$tabla);
	}
}



////////////////////////////////////********ELIMINAR*********///////////////////////////////////////

function eliminar_regisatro_tabla($link,$tabla,$campo,$registro)
{
	if(mysqli_query($link,"DELETE FROM ".$tabla." WHERE ".$campo." = '".$registro."'"))
	{
		return true;
	}
	return false;
}

function eliminar_tabla($link,$tabla)
{
	if(mysqli_query($link,"DROP TABLE ".$tabla))
	{
		return true;
	}
	return false;
}

////////////////////////////////////********BUSQUEDA*********///////////////////////////////////////

function busqueda_tabla_en_columna($link,$tabla,$columna,$dato,$col_ord='id',$tipo = '')
{
	if($consulta = mysqli_query($link,"SELECT * FROM ".$tabla." WHERE ".$columna." = '".$dato."' ORDER BY ".$col_ord." ".$tipo))
	{
		$num=0;
		while($con1 = mysqli_fetch_assoc($consulta)){
			foreach($con1 as $clave=>$valor){
				$arreglo[$num][$clave] = $valor;	
			}
			$num = $num+1;
		}
		return $arreglo;
	}
	else
	{
		return false;
	}
}

function busqueda_tabla_en_columnas_ralativa($link,$tabla,$dato,$col_ord='id')
{
	$columnas = busqueda_columnas_tabla($link,$tabla);
	$consulta = "SELECT * FROM ".$tabla." WHERE ";
	$ban = 1;
	foreach($columnas as $valor)
	{
		$consulta = $consulta.$valor." LIKE '%".$dato."%'";
		if($ban < count($columnas))
		{
			$consulta = $consulta.' OR ';
		}
		$ban=$ban+1;
	}
	$consulta = $consulta.' ORDER BY '.$col_ord;
	
	if($consulta = mysqli_query($link,$consulta))
	{
		$num=0;
		while($con1 = mysqli_fetch_assoc($consulta)){
			foreach($con1 as $clave=>$valor){
				$arreglo[$num][$clave] = $valor;	
			}
			$num = $num+1;
		}
		return $arreglo;
	}
	else
	{
		return false;
	}
}


function busqueda_columnas_tabla($link,$tabla)
{
	if($query=mysqli_query($link,'SHOW COLUMNS FROM '.$tabla))
	{
		$v=0;
		while($row=mysqli_fetch_assoc($query))
		{	
			$columnas[$v] = $row['Field'];
			$v = $v + 1;
		} 
		return $columnas;
	}	
	else
	{
		return false;
	}
}

///////////////////////////////**********GUARDAR IMAGEN*************//////////////

function gurdar_imagen($file,$directorio,$nombre)
{
	$tmp_name = $file['tmp_name'];
	$tipo_img = $file['type'];
	$tipo_img = explode('/',$tipo_img);
	$tipo_img = ".".$tipo_img[count($tipo_img)-1];
	
	if(move_uploaded_file($tmp_name,$directorio.'/'.$nombre.$tipo_img))
	{ 
		return $directorio.'/'.$nombre.$tipo_img;
	}else{
		return false; 
	}	
}


//////////////////////////////////*********LOGIN***********//////////////////////////

function cuenta_ip_activa($ip)
{
	if($consulta = busqueda_tabla_en_columna('login','ip',$ip))
	{
		return $consulta;
	}
	return false;
}

function login($nom_usuario,$cod_usuario)
{
	if($nom_usuario && $cod_usuario)
	{		
		$tabla = "login";
		if(!$consulta = consulta_tabla_completa($tabla))
		{
			$col = busqueda_columnas_tabla('lista_usuarios');
			$campos[0] = 'ip LONGTEXT';
			$campos[1] = 'fecha_hora LONGTEXT';
			$cont=2;
			foreach($col as $clave=>$valor)
			{
				if($clave != 'id')
				{	
					$campos[$cont]=$valor." LONGTEXT";
					$cont=$cont+1;
				}
			}			
			if(crear_tabla($tabla,$campos))
			{
				$consulta = consulta_tabla_completa($tabla);
			}
			else
			{
				//print_r($campos);
				//die("No se creo la tabla ".mysql_error());
			}
		}	
		
		$ban=0;
		foreach($consulta as $clave=>$valor)
		{
			if($valor["nom_usuario"] == $nom_usuario && $valor["ip"] == IP() && $valor["cod_usuario"] == $cod_usuario)
			{
				$ban=1;
			}			
		}
		
		if($ban==0)
		{			
			if($consulta = busqueda_tabla_en_columna("lista_usuarios","nom_usuario",$nom_usuario))
			{
				$ban2=0;
				foreach ($consulta as $col1)
				{
					if($col1['cod_usuario'] == $cod_usuario)
					{
						$ban2=1;
					}
				}	
				if($ban2 == 1)
				{
					$arreglo['ip'] = IP();
					$arreglo['fecha_hora'] = fecha_hora();
					foreach ($consulta as $col1)
					{
						foreach ($col1 as $clave=>$valor)
						{		
							if($clave!="ip" && $clave!="fecha_hora" && $clave!="id")
							{
								$arreglo[$clave] = $valor;
							}
						}
					}	
					if(insertar_regisatro_tabla($tabla,$arreglo))
					{
						return true;
					}
					else
					{
						print_r($arreglo);
						die("No se inserto el registro en ".$tabla);
					}
				}
				else
				{
					return false;
				}
			}		
			else
			{
				return false;
			}	
		}
		else if($ban == 1)
		{
			return true;
		}
		else
		{
			die("ban = ".$ban);
		}
	}
	else
	{
		return false;
	}
}

function comprobar_permiso_pagina($np="",$nom_usuario,$cod_usuario)
{
	if($np == "")
	{		
		if($np = busqueda_tabla_en_columna("lista_paginas","url",PAGINA()))
		{
			foreach ($consulta as $valor)
			{
				$np = $valor["id"];
			}
		}
		else
		{
			die("No existe la pagina ".PAGINA());
		}
	}
	
	$permiso = "";
	$tipo = "";
	if($consulta = busqueda_tabla_en_columna("lista_paginas","id",$np))
	{
		foreach ($consulta as $valor)
		{
			if($valor["id"] == $np) 
			{
				$permiso = $valor["permiso"];
				$tipo = $valor["tipo"];
			}
		}
	}
	
	if($permiso != '')
	{
		if($consulta = busqueda_tabla_en_columna("login","nom_usuario",$nom_usuario))
		{
			foreach ($consulta as $valor)
			{
				if($valor[$permiso] == 1 && $valor['ip'] == IP() && $valor['cod_usuario'] == $cod_usuario && ($valor['tipo'] == $tipo || $valor['tipo'] = "administrador"))
				{
					return true;
				}
			}
		}
	}
	else
	{
		return true;
	}
	return false;
}

function PAGINA()
{
	$pagina = str_replace('/','',$_SERVER["REQUEST_URI"]);
	$pagina = str_replace('%20',' ',$pagina);
	return $pagina;
}

function IP() {
	if (!empty($_SERVER['HTTP_CLIENT_IP']))
		return $_SERVER['HTTP_CLIENT_IP'];
		
	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	
	return $_SERVER['REMOTE_ADDR'];
}

function fecha_hora()
{
	return date("d-m-Y H:i:s");
}


?>