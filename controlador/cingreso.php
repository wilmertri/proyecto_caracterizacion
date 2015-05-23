<?php
	include ("modelo/mingreso.php");
	$ins = new mingreso();
	
	$coding = isset($_POST["coding"]) ? $_POST["coding"]:NULL;
	$tipoing = isset($_POST["tipoing"]) ? $_POST["tipoing"]:NULL;
	$ing = isset($_POST["ing"]) ? $_POST["ing"]:NULL;
	$idpersona	= isset($_POST["idpersona"]) ? $_POST["idpersona"]:NULL;
	$actu = isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$id =  isset($_GET["id"]) ? $_GET["id"]:NULL;
	$cod = isset($_GET["cod"]) ? $_GET["cod"]:NULL;

	//$dato = $ins -> selexpper();
	$dato1 = $ins -> selingreso2($id);
	$dato2 = $ins -> selingreso1($cod);
	
	$tipoing1 = $ins->get_tipo_ingreso();
	
	// Actualizar datos
	if($coding && $tipoing && $ing && $actu) {
		$ins -> updingreso($coding ,$tipoing, $ing);
	}
	// Insertar datos
	if($tipoing && $ing && $id && !$actu) {
		$ins -> insingreso($tipoing, $ing, $id);
	}
?>