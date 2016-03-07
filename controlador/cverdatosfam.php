<?php

	include ("modelo/mdatosfam.php");

	$datosfamper = new mdatosfam();

	$id 	= isset($_GET["id"]) ? $_GET["id"]:NULL;
	$idf	= isset($_GET["idf"]) ? $_GET["idf"]:NULL;


	$dato1 	= $datosfamper->selper1($idf);
	$familiares = $datosfamper->seleccionar_familiares_persona($id);

	function getValorFam($valor_fam, $datosfamper)
	{
		$nomvalor = $datosfamper->datos_valor($valor_fam);
		return $nomvalor[0]['nomval'];
	}


	function getNombre($familiares)
	{
		$nombre = "";

		$nombre = $familiares[0]['pnomfam'] . " " . $familiares[0]['papefam'];

		return $nombre;
	}


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

	if ($dato1[0]['fecnacfam']) 
	{
		$fechanac	= $dato1[0]['fecnacfam'] . " Edad: " . $datosfamper->calcular_edad($dato1[0]['fecnacfam']) ;
	}
	else
	{
		$fechanac	= "Sin registro";
	}

	if ($dato1[0]['genfam']) 
	{
		$genfam	= getValorFam($dato1[0]['genfam'], $datosfamper);
	}
	else
	{
		$genfam	= "Sin registro";
	}

	if ($dato1[0]['geslanfam']) 
	{
		$geslanfam	= getValorFam($dato1[0]['geslanfam'], $datosfamper);
	}
	else
	{
		$geslanfam	= "Sin registro";
	}

	if ($dato1[0]['nivescfam']) 
	{
		$nivescfam	= getValorFam($dato1[0]['nivescfam'], $datosfamper);
	}
	else
	{
		$nivescfam	= "Sin registro";
	}

	if ($dato1[0]['ultgracurfam']) 
	{
		$ultgracurfam 	= $dato1[0]['ultgracurfam'];
	}
	else
	{
		$ultgracurfam 	= "Sin registro";
	}

	if ($dato1[0]['ocuactfam']) 
	{
		$ocupacionActual	= getValorFam($dato1[0]['ocuactfam'], $datosfamper);
	}
	else
	{
		$ocupacionActual	= "Sin registro";
	}

	if ($dato1[0]['etniaper']) 
	{
		$etnia		= getValorFam($dato1[0]['etniaper'], $datosfamper);
	}
	else
	{
		$etnia	= "Sin registro";
	}

	if ($dato1[0]['parperfam']) 
	{
		$parentesco		 = getValorFam($dato1[0]['parperfam'], $datosfamper);
	}
	else
	{
		$parentesco	= "Sin registro";
	}




