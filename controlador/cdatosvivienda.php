<?php
	include("modelo/mdatosvivienda.php");
	$ins = new Mdatosvivienda();
	

	$tipovivienda 	= isset($_POST['tipviv']) ? $_POST['tipviv']:NULL;
	$matpar 		= isset($_POST['matpar']) ? $_POST['matpar']:NULL;
	$matpis 		= isset($_POST['matpis']) ? $_POST['matpis']:NULL;
	$mattec 		= isset($_POST['mattec']) ? $_POST['mattec']:NULL;  
	$zonrie			= isset($_POST['zonrie']) ? $_POST['zonrie']:NULL;
	$relviv			= isset($_POST['relviv']) ? $_POST['relviv']:NULL;
	$numhabviv		= isset($_POST['numhabviv']) ? $_POST['numhabviv']:NULL;
	$numhabhab		= isset($_POST['numhabhab']) ? $_POST['numhabhab']:NULL;
	$numperhabviv	= isset($_POST['numperhabviv']) ? $_POST['numperhabviv']:NULL;
	$serbas 		= isset($_POST['servibas']) ? $_POST['servibas']:NULL;
	$estrato		= isset($_POST['estrato']) ? $_POST['estrato']:NULL;
	$id				= isset($_GET['id']) ? $_GET['id']:NULL;
	$valid	= 0;


	$tipovivienda1 		= $ins->get_tipo_vivienda();
	$tipopisos			= $ins->get_tipo_pisos();
	$tipoparedes		= $ins->get_tipo_paredes();
	$tipotechos 		= $ins->get_tipo_techos();
	$tiporiesgos		= $ins->get_tipo_riesgos();
	$tiporelacion		= $ins->get_tipo_relacion_viv();
	$serviciosbasicos 	= $ins->get_servicios_basicos();
	$estratovivienda	= $ins->get_estrato_vivienda();

	$datosvivienda 	= $ins->ver_datos_vivienda($id);
	
	if ($tipovivienda) 
	{
		$ins->actu_datos_vivienda($tipovivienda, $matpar, $matpis, $mattec, $zonrie, $relviv, $numhabviv, $numhabhab, $numperhabviv, $estrato, $id);
		$valid = 1;
	}

	if($serbas)
	{
		 if(is_array($serbas))
         {
       		 // realizamos el ciclo
       		while(list($key,$value) = each($serbas)) 
        	{
				$ins->actu_servicios_basicos($id,$value);
       	 	}
   		 }
	}

 ?>