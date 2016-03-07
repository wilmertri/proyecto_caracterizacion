<?php
	include ("modelo/mdatosfam.php");
	$ins = new mdatosfam();
	
	$idfamper 		= isset($_POST["idfamper"]) ? $_POST["idfamper"]:NULL;
	$documento 		= isset($_POST["documento"]) ? $_POST["documento"]:NULL;
	$pnombre 		= isset($_POST["primernombre"]) ? $_POST["primernombre"]:NULL;
	$snombre 		= isset($_POST["segundonombre"]) ? $_POST["segundonombre"]:NULL;
	$papellido 		= isset($_POST["primerapellido"]) ? $_POST["primerapellido"]:NULL;
	$sapellido 		= isset($_POST["segundoapellido"]) ? $_POST["segundoapellido"]:NULL;
	$fnacimiento 	= isset($_POST["fechadenacimiento"]) ? $_POST["fechadenacimiento"]:NULL;
	$genero 		= isset($_POST["genero"]) ? $_POST["genero"]:NULL;
	$gestolac 		= isset($_POST["gestanteolactante"]) ? $_POST["gestanteolactante"]:NULL;
	$nescolaridad 	= isset($_POST["niveldeescolaridad"]) ? $_POST["niveldeescolaridad"]:NULL;
	$ultgradocur 	= isset($_POST["ultimogradocursado"]) ? $_POST["ultimogradocursado"]:NULL;
	$ocupacion 		= isset($_POST["ocupacion"]) ? $_POST["ocupacion"]:NULL;
	$etniaper 		= isset($_POST["etnia"]) ? $_POST["etnia"]:NULL;
	$discapasidad 	= isset($_POST["discapasidad"]) ? $_POST["discapasidad"]:NULL;
	$parentesco 	= isset($_POST["parentesco"]) ? $_POST["parentesco"]:NULL;
	$numdochogar 	= isset($_POST["numdochogar"]) ? $_POST["numdochogar"]:NULL;
	$estactual		= isset($_POST["estactual"]) ? $_POST["estactual"]:NULL;
	$actu 			= isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$id 			= isset($_GET["id"]) ? $_GET["id"]:NULL;
	$idf			= isset($_GET["idf"]) ? $_GET["idf"]:NULL;

	$dato	= $ins	->selper();
	$dato1 	= $ins	->selper1($id);
	$gest 	= $ins	->valor	(11);
	$gen 	= $ins	->valor	(2);
	$nesc 	= $ins	->valor	(4);
	$parent = $ins	->valor	(15);
	$etnia 	= $ins	->valor	(10);
	$discp 	= $ins	->valor	(12);
	$estactual = $ins ->valor(24);
	$ocup 	= $ins	->valor	(31);
	$sissal = $ins->get_sistema_salud();

	$datoact = $ins	->selper1($idf);
	
	if ($actu) {
		if ($genero==0) 
		{
			$genero = $datoact[0]['genfam'];
		}
		if ($gestolac==0) 
		{
			$gestolac = $datoact[0]['geslanfam'];
		}
		if ($nescolaridad==0) 
		{
			$nescolaridad = $datoact[0]['nivescfam'];
		}
		if ($etniaper==0) 
		{
			$etniaper = $datoact[0]['etniaper'];
		}
		if ($parentesco==0) 
		{
			$parentesco = $datoact[0]['parperfam'];
		}
		if ($ocupacion==0) 
		{
			$ocupacion = $datoact[0]['ocuactfam'];
		}
	}
	
	// Actualizar datos
	if($idfamper && $documento && $pnombre && $snombre && $papellido && $ultgradocur && $actu) 
	{
		$ins -> updper($idfamper, $documento , $pnombre , $snombre , $papellido , $sapellido , $fnacimiento , $genero , $gestolac, $nescolaridad , $ultgradocur , $ocupacion , $etniaper, $parentesco);
	}
	// Insertar datos
	if($documento && $pnombre && $papellido && $fnacimiento && $genero && $nescolaridad && $ultgradocur && $parentesco && $id && !$actu)
	{ 

		$ins-> insper($documento, $pnombre, $snombre, $papellido, $sapellido, $fnacimiento, $genero, $gestolac, $nescolaridad, $ultgradocur, $ocupacion, $etniaper, $parentesco, $id);
	}
?>

