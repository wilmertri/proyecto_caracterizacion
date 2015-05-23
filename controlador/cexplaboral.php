<?php
	include ("modelo/mexplaboral.php");
	$ins = new mexplaboral();
	
	$codexplab = isset($_POST["codexplab"]) ? $_POST["codexplab"]:NULL;
	$labexp = isset($_POST["labexp"]) ? $_POST["labexp"]:NULL;
	$desexp = isset($_POST["desexp"]) ? $_POST["desexp"]:NULL;
	$ingexp = isset($_POST["ingexp"]) ? $_POST["ingexp"]:NULL;
	$idpersona	= isset($_POST["idpersona"]) ? $_POST["idpersona"]:NULL;
	$actu = isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$id =  isset($_GET["id"]) ? $_GET["id"]:NULL;
	$cod = isset($_GET["cod"]) ? $_GET["cod"]:NULL;

	//$dato = $ins -> selexpper();
	$dato1 = $ins -> selexpper2($id);
	$dato2 = $ins -> selexpper1($cod);
	
	// Actualizar datos
	if($codexplab && $labexp && $desexp && $ingexp && $actu) {
		$ins -> updexpper($codexplab ,$labexp, $desexp, $ingexp);
	}
	// Insertar datos
	if($labexp && $desexp && $ingexp && $id && !$actu) {
		$ins -> insexpper($labexp, $desexp, $ingexp, $id);
	}
?>