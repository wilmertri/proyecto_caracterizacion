<?php
	include ("modelo/mdespyaban.php")  
	$ins new Mdespyaban();
	
	$id				= isset($_GET['id']) ? $_GET['id']:NULL;
	
	$datosdesoyaban			=$ins->consulta_datos_despyaban($id);
	
	if ($datosdesoyaban[0]['lugexpulper'])
	{
	