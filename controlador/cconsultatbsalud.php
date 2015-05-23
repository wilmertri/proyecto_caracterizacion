<?php
	include("modelo/mtbsalud.php"); 
	$ins= new Mdatossalud();
	
	$id	= isset($_GET['id']) ? $_GET['id']:NULL;

	$datossalud = $ins->ver_datos_salud($id);
	
	// var_dump($datossalud);
	// Sistema de Salud
	if ($datossalud[0]['afiliacionsalud']) 
	{
		$verAfiliacion		= $ins->get_valor($datossalud[0]['afiliacionsalud']);
		$afiliacionsalud = $verAfiliacion[0]['nomval'];
	}
	else
	{
		$afiliacionsalud = "Sin registro";
	}
	// ESP Registrada
	if ($datossalud[0]['epsper']) 
	{
		$vereps	= $ins->get_seleccionar_eps($datossalud[0]['epsper']);
		$epsper			= $vereps[0]['nomeps'];	
	}
	else
	{
		$epsper = "Sin registro";
	}
	//  Negacion Atencion
	if ($datossalud[0]['negserper']) 
	{
		$vernegserper		= $ins->get_valor($datossalud[0]['negserper']);
		$negserper = $vernegserper[0]['nomval'];
	}
	else
	{
		$negserper = "Sin registro";
	}
	if ($datossalud[0]['atesalposvicper']) 
	{
		$veratesalposvicper = $ins->get_valor($datossalud[0]['atesalposvicper']);
		$atesalposvicper = $veratesalposvicper[0]['nomval'];
	}
	else
	{
		$atesalposvicper = "Sin registro";
	}   
	if ($datossalud[0]['esqvacper']) 
	{
		$veresqvacper = $ins->get_valor($datossalud[0]['esqvacper']);
		$esqvacper= $veresqvacper[0]['nomval'];
	}
	else
	{
		$esqvacper = "Sin registro";
	}
	if ($datossalud[0]['conodoper']) 
	{
		$verconodoper = $ins->get_valor($datossalud[0]['conodoper']);
		$conodoper = $verconodoper[0]['nomval'];
	}
	else
	{
		$conodoper = "Sin registro";
	}
	if ($datossalud[0]['disconfarm']) 
	{
		$verdisconfarm = $ins->get_valor($datossalud[0]['disconfarm']);
		$disconfarm = $verdisconfarm[0]['nomval'];
	}
	else
	{
		$disconfarm = "Sin registro";
	}
	if ($datossalud[0]['comdiaper']) 
	{
		$vercomdiaper = $ins->get_valor($datossalud[0]['comdiaper']);
		$comdiaper = $vercomdiaper[0]['nomval'];
	}
	else
	{
		$comdiaper = "Sin registro";
	}

?>