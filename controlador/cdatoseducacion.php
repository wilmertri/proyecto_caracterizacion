<?php
	include("modelo/meducacion.php"); 
	$ins= new meducacion();
	
	$id	= isset($_GET['id']) ? $_GET['id']:NULL;

	$datoseducacion = $ins->ver_datos_educacion($id);
	
	if ($datoseducacion[0]['ultgracurper']) 
	{
		$verUltimogrado	= $ins->get_nivel_educativo_alcanzado($datoseducacion[0]['ultgracurper']);
		$ultimoGrado		= $verUltimogrado[0]['nomval'];	
	}
	else
	{
		$ultimoGrado = "Sin registro";
	}
	if ($datoseducacion[0]['titobtper']) 
	{
		$verTitulo	= $ins->get_titulo_obtenido($datoseducacion[0]['titobtper']);
		$titulo		= $verTitulo[0]['nombreprof'];	
	}
	else
	{
		$titulo = "Sin registro";
	}
	if ($datoseducacion[0]['matriper']) 
	{
		$verMatricula	= $ins->get_valor($datoseducacion[0]['matriper']);
		$matricula		= $verMatricula[0]['nomval'];	
	}
	else
	{
		$matricula = "Sin registro";
	}

	if ($datoseducacion[0]['nomatriper']) 
	{
		$verNomatri	= $ins->get_asistencia_estudios($datoseducacion[0]['nomatriper']);
		$noMatri		= $verNomatri[0]['opcion'];	
	}
	else
	{
		$noMatri = "Sin registro";
	}
	if ($datoseducacion[0]['termcurant']) 
	{
		$verTerminoaño	= $ins->get_valor($datoseducacion[0]['termcurant']);
		$terminoAño		= $verTerminoaño[0]['nomval'];	
	}
	else
	{
		$terminoAño = "Sin registro";
	}
?>