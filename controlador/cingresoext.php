<?php
	include ("modelo/mingresoext.php");
	$ins = new mingresoext();
	$codingext = isset($_POST["codingext"]) ? $_POST["codingext"]:NULL;
	$tipingext = isset($_POST["tipodeingreso"]) ? $_POST["tipodeingreso"]:NULL;
	$ingext = isset($_POST["ingresoendinero"]) ? $_POST["ingresoendinero"]:NULL;
	$desingext = isset($_POST["descdeldinero"]) ? $_POST["descdeldinero"]:NULL;
	$idpersona	= isset($_POST["idpersona"]) ? $_POST["idpersona"]:NULL;
	$actu = isset($_POST["actu"]) ? $_POST["actu"]:NULL;
    $id = isset($_GET["id"]) ? $_GET["id"]:NULL;
	$cod = isset($_GET["cod"]) ? $_GET["cod"]:NULL;
	//$dato = $ins->selingext();
	$dato1 = $ins->selingext2($id);
	$dato2 = $ins->selingext1($cod);
	$tipoingreso = $ins->seltip();
	
	// Actualizar datos
	if($codingext && $tipingext && $ingext && $desingext && $actu) {
		$ins -> updingext($codingext, $tipingext, $ingext, $desingext);
	}
	// Insertar datos
	if($tipingext && $ingext && $desingext && $id && !$actu) {
		$ins -> insingext($tipingext, $ingext, $desingext, $id);
	}
?>
