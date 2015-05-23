<?php
	include ("modelo/mdatosfam.php");
	$ins = new mdatosfam();
	
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
	$actu 			= isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$id 			= isset($_GET["id"]) ? $_GET["id"]:NULL;

	$dato	= $ins	->selper();
	$dato1 	= $ins	->selper1($id);
	$gest 	= $ins	->valor	(11);
	$gen 	= $ins	->valor	(2);
	$nesc 	= $ins	->valor	(4);
	$parent = $ins	->valor	(15);
	$etnia 	= $ins	->valor	(10);
	$discp 	= $ins	->valor	(12);
	
	if ($actu) {
		if ($genero==0) {
			$genero = $dato1[0]['genfam'];
		}
		if ($gestolac==0) {
			$gestolac = $dato1[0]['geslanfam'];
		}
		if ($nescolaridad==0) {
			$nescolaridad = $dato1[0]['nivescfam'];
		}
		if ($etnia==0) {
			$etnia = $dato1[0]['etniaper'];
		}
		if ($parentesco==0) {
			$parentesco = $dato1[0]['parperfam'];
		}
	}
	
	// Actualizar datos
	if($documento && $pnombre && $snombre && $papellido && $sapellido && $ultgradocur && $ocupacion  && $actu) {
		$ins -> updper($documento , $pnombre , $snombre , $papellido , $sapellido , $fnacimiento , $genero , $gestolac, $nescolaridad , $ultgradocur , $ocupacion , $etniaper, $parentesco);
	}
	// Insertar datos
	if($documento && $pnombre && $snombre && $papellido && $sapellido && $fnacimiento && $genero && $nescolaridad && $ultgradocur && $ocupacion && $etniaper && $parentesco && $id && !$actu)
	{ 
		$ins-> insper($documento, $pnombre, $snombre, $papellido, $sapellido, $fnacimiento, $genero, $gestolac, $nescolaridad, $ultgradocur, $ocupacion, $etniaper, $parentesco, $id);
	}
?>

