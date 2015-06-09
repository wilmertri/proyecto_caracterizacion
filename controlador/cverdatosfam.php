<?php

	include ("modelo/mdatosfam.php");

	$datosfamper = new mdatosfam();

	$id 	= isset($_GET["id"]) ? $_GET["id"]:NULL;

	$dato1 	= $datosfamper->selper1($id);

	if ($dato1[0]['numdocfam']) 
	{
		//$verTipoVivienda    = $ins->get_valor($datosvivienda[0]['tipvivper']); --> Tipo de uso valor parametro
		$numdocfam	= $dato1[0]['numdocfam'];
	}
	else
	{
		$numdocfam	= "Sin registro";
	}

	if ($dato1[0]['pnomfam']) 
	{
		$pnomfam	= $dato1[0]['pnomfam'];
	}
	else
	{
		$pnomfam	= "Sin registro";
	}

	if ($dato1[0]['snomfam']) 
	{
		$snomfam	= $dato1[0]['snomfam'];
	}
	else
	{
		$snomfam	= "Sin registro";
	}

	if ($dato1[0]['papefam']) 
	{
		$papefam	= $dato1[0]['papefam'];
	}
	else
	{
		$papefam	= "Sin registro";
	}

	if ($dato1[0]['sapefam']) 
	{
		$sapefam	= $dato1[0]['sapefam'];
	}
	else
	{
		$sapefam	= "Sin registro";
	}

	if ($dato1[0]['fecnamfam']) 
	{
		$fechanac	= $dato1[0]['fecnamfam'] . " Edad: " . $datosfamper->calcular_edad($dato1[0]['fecnamfam']) ;
	}
	else
	{
		$fechanac	= "Sin registro";
	}

	if ($dato1[0]['genfam']) 
	{
		$verGenFam   = $ins->get_valor($dato1[0]['genfam']);
		$genfam	= $verGenFam[0]['nomval'];
	}
	else
	{
		$genfam	= "Sin registro";
	}

	if ($dato1[0]['geslanfam']) 
	{
		$verGesLanFam   = $ins->get_valor($dato1[0]['geslanfam']);
		$geslanfam	= $verGesLanFam[0]['nomval'];
	}
	else
	{
		$geslanfam	= "Sin registro";
	}

	if ($dato1[0]['nivescfam']) 
	{
		$verNivEsc   = $ins->get_valor($dato1[0]['nivescfam']);
		$nivescfam	= $verNivEsc[0]['nomval'];
	}
	else
	{
		$nivescfam	= "Sin registro";
	}

	if ($dato1[0]['ultgracurfam']) 
	{
		$ultgracurfam 	= $$dato1[0]['ultgracurfam'];
	}
	else
	{
		$ultgracurfam 	= "Sin registro";
	}

	if ($dato1[0]['ocuactfam']) 
	{
		$verOcupacionActual   = $ins->get_valor($dato1[0]['ocuactfam']);
		$ocupacionActual	= $verOcupacionActual[0]['nomval'];
	}
	else
	{
		$ocupacionActual	= "Sin registro";
	}

	if ($dato1[0]['etniaper']) 
	{
		$verEtnia   = $ins->get_valor($dato1[0]['etniaper']);
		$etnia		= $verEtnia[0]['nomval'];
	}
	else
	{
		$etnia	= "Sin registro";
	}

	if ($dato1[0]['parperfam']) 
	{
		$verParentesco   = $ins->get_valor($dato1[0]['parperfam']);
		$parentesco		 = $verParentesco[0]['nomval'];
	}
	else
	{
		$parentesco	= "Sin registro";
	}




