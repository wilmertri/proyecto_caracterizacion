<?php
	include ("modelo/mdiscapacidad.php");
	$ins = new mdiscapacidad();
	
	$idtipodis = isset($_POST["idtipodis"]) ? $_POST["idtipodis"]:NULL;
	$tipodis = isset($_POST["tipodis"]) ? $_POST["tipodis"]:NULL;
	$actu = isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$id =  isset($_GET["id"]) ? $_GET["id"]:NULL;

	
	$dato_type_disc = $ins -> seldisper1($id);
	
	// Actualizar datos
	if($idtipodis && $tipodis && $actu) 
	{
		$ins -> upddisper($idtipodis ,$tipodis);
	}
	// Insertar datos
	if($tipodis && !$actu) {
		$ins -> insdisper($tipodis);
	}
?>