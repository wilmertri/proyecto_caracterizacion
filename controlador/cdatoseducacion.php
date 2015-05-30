<?php
	include("modelo/meducacion.php"); 
	$ins= new meducacion();
	
	$id	= isset($_GET['id']) ? $_GET['id']:NULL;

	$datoseducacion = $ins->ver_datos_educacion($id);
	
	if ($datoseducacion[0]['ultracurper']) 
	{
		$verUltimogrado	= $ins->get_valor($datoseducacion[0]['ultracurper']);
		$Ultimogrado		= $verUltimogrado[0]['nomval'];	
	}
	else
	{
		$Ultimogrado = "Sin registro";
	}
	if ($datoseducacion[0]['titobtper']) 
	{
		$verTitulo	= $ins->get_valor($datoseducacion[0]['titobtper']);
		$Titulo		= $verTitulo[0]['nomval'];	
	}
	else
	{
		$Titulo = "Sin registro";
	}
	if ($datoseducacion[0]['trabajoper']) 
	{
		$TrabajoPer	= $datoseducacion[0]['trabajoper'];
	}
	else
	{
		$TrabajoPer = "Sin registro";
	}

	if ($datoseducacion[0]['ingmenper']) 
	{
		$IngresoMensual	= $datoseducacion[0]['ingmenper'];
	}
	else
	{
		$IngresoMensual = "Sin registro";
	}   
?>