<?php
	include("modelo/mactividadeconomica.php"); 
	$ins= new Mactividadeconomica();
	
	$id	= isset($_GET['id']) ? $_GET['id']:NULL;

	$datosactividad = $ins->ver_datos_actividad($id);
	
	if ($datosactividad[0]['numpercar']) 
	{
		$PersonasaCargo	= $datosactividad[0]['numpercar'];
	}
	else
	{
		$PersonasaCargo = "Sin registro";
	}
	if ($datosactividad[0]['ocuperact']) 
	{
		$verOcupacion	= $ins->get_valor($datosactividad[0]['ocuperact']);
		$Ocupacion		= $verOcupacion[0]['nomval'];	
	}
	else
	{
		$Ocupacion = "Sin registro";
	}
	if ($datosactividad[0]['trabajoper']) 
	{
		$TrabajoPer	= $datosactividad[0]['trabajoper'];
	}
	else
	{
		$TrabajoPer = "Sin registro";
	}

	if ($datosactividad[0]['ingmenper']) 
	{
		$IngresoMensual	= $datosactividad[0]['ingmenper'];
	}
	else
	{
		$IngresoMensual = "Sin registro";
	}   
?>