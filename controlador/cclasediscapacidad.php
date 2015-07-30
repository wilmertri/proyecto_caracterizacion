<?php
	include ("modelo/mclasediscapacidad.php");
	$ins = new mclasediscapacidad();
	
	$idclase 	= isset($_POST["idclase"]) ? $_POST["idclase"]:NULL;
	$nomcladis 	= isset($_POST["nomcladis"]) ? $_POST["nomcladis"]:NULL;
	$tipdis 	= isset($_POST["tipodis"]) ? $_POST["tipodis"]:NULL;
	$numdoc		= isset($_POST["numdoc"]) ? $_POST["numdoc"]:NULL;
	$actu 		= isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$id 		= isset($_GET["id"]) ? $_GET["id"]:NULL;

	//$dato = $ins->selcladis();
	$dato1 = $ins->selcladis1($id);
	$tipodis = $ins->seltipdis();

	//$tipo = $ins->valor(12);
	//$clase = $ins->valor(13);
	
	// Actualizar datos
	if($idclase && $nomcladis && $actu) {
		$ins -> updcladis($idclase ,$nomcladis);
	}
	// Insertar datos
	if($nomcladis && $tipdis && !$actu) {
		$ins -> inscladis($nomcladis,$tipdis);
	}
?>