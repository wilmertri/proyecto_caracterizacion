<?php
	include("modelo/mdatosvivienda.php");
	$ins = new Mdatosvivienda();
	
	$id				= isset($_GET['id']) ? $_GET['id']:NULL;

	$datosvivienda 		= $ins->ver_datos_vivienda($id);
	$idserviciosbasicos = $ins->get_servicios_basicos_id($id);

	for ($i=0; $i <count($idserviciosbasicos) ; $i++) 
	{ 
		$serviciosbasicos[] = $ins->get_nombre_servicios_basicos($idserviciosbasicos[$i]['numservbas']);	
	}
	

	if ($datosvivienda[0]['tipvivper']) 
	{
		$verTipoVivienda    = $ins->get_valor($datosvivienda[0]['tipvivper']);
		$TipoVivienda		= $verTipoVivienda[0]['nomval'];
	}
	else
	{
		$TipoVivienda	= "Sin registro";
	}

	if ($datosvivienda[0]['tippisviv']) 
	{
		$verTipoPisos		= $ins->get_valor($datosvivienda[0]['tippisviv']);
		$TipoPisos 			= $verTipoPisos[0]['nomval'];
	}
	else
	{
		$TipoPisos	= "Sin registro";
	}

	if ($datosvivienda[0]['tipparviv']) 
	{
		$verTipoParedes		= $ins->get_valor($datosvivienda[0]['tipparviv']);
		$TipoParedes 		= $verTipoParedes[0]['nomval'];
	}
	else
	{
		$TipoParedes = "Sin registro";
	}

	if ($datosvivienda[0]['tiptecviv']) 
	{
		$verTipoTechos		= $ins->get_valor($datosvivienda[0]['tiptecviv']);
		$TipoTechos 		= $verTipoTechos[0]['nomval'];	
	}
	else
	{
		$TipoTechos = "Sin registro";
	}
	
	if ($datosvivienda[0]['zonrieviv']) 
	{
		$verZonaRiesgo		= $ins->get_valor($datosvivienda[0]['zonrieviv']);
		$TipoRiesgo 		= $verZonaRiesgo[0]['nomval'];	
	}
	else
	{
		$TipoRiesgo = "Sin registro";
	}

	if ($datosvivienda[0]['numhabviv']) 
	{
		$CuartosTotales		= $datosvivienda[0]['numhabviv'];
	}
	else
	{
		$CuartosTotales = "Sin registro";
	}

	if ($datosvivienda[0]['numhabhab']) 
	{
		$CuartosDondeDuermen	= $datosvivienda[0]['numhabhab'];
	}
	else
	{
		$CuartosDondeDuermen = "Sin registro";
	}

	if ($datosvivienda[0]['numperhabviv']) 
	{
		$CantidadPersonasDuermen	= $datosvivienda[0]['numperhabviv'];
	}
	else
	{
		$CantidadPersonasDuermen = "Sin registro";
	}   

	if ($datosvivienda[0]['estper']) 
	{
		$verEstrato			= $ins->get_valor($datosvivienda[0]['estper']);
		$Estrato 			= $verEstrato[0]['nomval'];	
	}
	else
	{
		$Estrato = "Sin registro";
	}
	 