<?php
//include 'funciones_mysql.php';
$link = conexion_servidor_r("","jahs92","condoro10");
$bd = conexion_bd_r($link,"jeiudg");

if(isset($_POST['nom_usuario'])){$nom_usuario = $_POST['nom_usuario'];}else{$nom_usuario = '';}
if(isset($_POST['cod_usuario'])){$cod_usuario = $_POST['cod_usuario'];}else{$cod_usuario = '';}
if(isset($_POST['boton'])){$boton = $_POST['boton'];}else{$boton = '';}
if(isset($_POST['np'])){$np = $_POST['np'];}else{$np = '';}

if($con = cuenta_ip_activa(IP()))
{
	foreach($con as $valor)
	{
		foreach($valor as $clave=>$dato)
		{
			$$clave = $dato;
		}
	}
}
if($boton == 'Salir')
{
	?>
		<body>
			<form method="post" action="index.php" id="f3" target="_parent"> 
			</form>
		</body>
		<script type="application/javascript" language="javascript">
			document.getElementById('f3').submit();
		</script>
	<?php
}

$si_no = login($nom_usuario,$cod_usuario);

if($si_no)
{
	if(!comprobar_permiso_pagina($np,$nom_usuario,$cod_usuario))
	{
		?>
		<body>
			<form method="post" action="inicio administrador.php" id="f3"> 
				<?php
				foreach ($_POST as $clave=>$dato)
				{
				?>
					<input type="hidden" name="<?php echo $clave;?>" value="<?php echo $dato;?>"/>
				<?php
				}
				?>
				<input type="hidden" name="ver" value="2"/>
			</form>
		</body>
		<script type="application/javascript" language="javascript">
			document.getElementById('f3').submit();
		</script>
		<?php
	}
	else
	{
		if($con = cuenta_ip_activa(IP()))
		{
			foreach($con as $valor)
			{
				foreach($valor as $clave=>$dato)
				{
					$$clave = $dato;
				}
			}
		}
	}
}
else
{
	$nom_usuario = "";
	$cod_usuario = "";
	if(!comprobar_permiso_pagina($np,$nom_usuario,$cod_usuario))
	{
		?>
		<body>
			<form method="post" action="inicio administrador.php" id="f3"> 
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
			document.getElementById('f3').submit();
		</script>
		<?php
	}
}
/*else
{
	if($boton == 'Salir')
	{
		?>
		<body>
			<form method="post" action="inicio.php" id="f3"> 
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
			document.getElementById('f3').submit();
		</script>
		<?php	
	}
	elseif(($boton == 'Iniciar' && $nom_usuario != "" && $cod_usuario != ""))
	{
		if($consulta = busqueda_tabla_en_columna("lista_usuarios","nom_usuario",$usuario))
		{
			foreach ($consulta as $col)
			{
				foreach ($col as $clave=>$valor)
				{
					$$clave=$valor;
				}			
			}
		}
		else
		{
			
		}
	}
	else
	{
		?>
		<body>
			<form method="post" action="inicio administrador.php" id="f3"> 
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
			document.getElementById('f3').submit();
		</script>
		<?php	
	}
}
*/
?>