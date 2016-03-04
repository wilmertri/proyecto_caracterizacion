<?php
	include ("modelo/mdiscper.php");
	$ins = new mdiscper();
	
	$iddisc 	= isset($_POST["iddisc"]) ? $_POST["iddisc"]:NULL;
	$disc	 	= isset($_POST["clasdis"]) ? $_POST["clasdis"]:NULL;
	$numdoc		= isset($_POST["numdoc"]) ? $_POST["numdoc"]:NULL;
	$desc		= isset($_POST["desc"]) ? $_POST["desc"]:NULL;
	$actu 		= isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$idd 		= isset($_GET["idd"]) ? $_GET["idd"]:NULL;
	$id 		= isset($_GET["id"]) ? $_GET["id"]:NULL;
	$datfam		= isset($_GET["famper"]) ? $_GET["famper"]:NULL;

	//$dato = $ins->selcladis();
	//$dato1 = $ins->selcladis1($id);
	$dato1 = $ins->seldisper1($idd);
	$tipodis = $ins->seltipdis();

	//$tipo = $ins->valor(12);
	//$clase = $ins->valor(13);
	
	// Actualizar datos
	if($iddisc && $disc && $numdoc && $desc && $actu) 
	{
		$ins -> upddisper($iddisc,$disc,$numdoc,$desc);
	}
	// Insertar datos discapacidad persona
	if($disc && $id && $desc && !$actu && !$datfam) {
		$ins -> insdiscper($disc,$id,$desc);
	}

	// Insertar datos discapacidad familiar de persona
	if($disc && $id && $desc && $datfam && !$actu) {
		$ins -> insdiscper2($disc,$id,$desc);
	}
?>