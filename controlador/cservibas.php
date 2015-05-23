<?php
	include ("modelo/mservibas.php");
	$ins = new mservibas();
	$codserv = isset($_POST["codserv"]) ? $_POST["codserv"]:NULL;
	$nomserv = isset($_POST["nomserv"]) ? $_POST["nomserv"]:NULL;
	$actu = isset($_POST["actu"]) ? $_POST["actu"]:NULL;
    $id = isset($_GET["id"]) ? $_GET["id"]:NULL;
	
	$dato1 = $ins->selper1($id);
	
	// Actualizar datos
	if($codserv && $nomserv && $actu) {
		$ins -> updper($codserv,$nomserv);
	}
	// Insertar datos
	if($nomserv && !$actu) {
		$ins -> insper($nomserv);
	}
?>
