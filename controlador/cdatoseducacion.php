<?php
	include("modelo/meducacion.php"); 
	$ins= new Meducacion();
	
	$id	= isset($_GET['id']) ? $_GET['id']:NULL;

	$datoseducacion = $ins->ver_datos_educacion($id);
	
	if ($datoseducacion[0]['ultgracurper']) 
	{
		$verUltimogrado		= $ins->get_valor($datoseducacion[0]['ultgracurper']);
		$ultimoGrado		= $verUltimogrado[0]['nomval'];	
	}
	else
	{
		$ultimoGrado 		= "Sin registro";
	}
	if ($datoseducacion[0]['titobtper']) 
	{
		$verTitulo			= $ins->titulo_obtenido($datoseducacion[0]['titobtper']);
		$titulo				= $verTitulo[0]['nombreprof'];	
	}
	else
	{
		$titulo 			= "Sin registro";
	}
	if ($datoseducacion[0]['matriper']) 
	{
		$verMatricula		= $ins->get_valor($datoseducacion[0]['matriper']);
		$matricula			= $verMatricula[0]['nomval'];	
	}
	else
	{
		$matricula 			= "Sin registro";
	}

	if ($datoseducacion[0]['nomatriper']) 
	{
		$verNomatri			= $ins->asistencia_estudios($datoseducacion[0]['nomatriper']);
		$noMatri			= $verNomatri[0]['opcion'];	
	}
	else
	{
		$noMatri 			= "Sin registro";
	}
	if ($datoseducacion[0]['termcurant']) 
	{
		$verTermino		= $ins->get_valor($datoseducacion[0]['termcurant']);
		$termino			= $verTermino[0]['nomval'];	
	}
	else
	{
		$termino 		= "Sin registro";
	}
?>