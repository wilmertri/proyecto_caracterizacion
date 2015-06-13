<?php
	include ("modelo/mtbnegocio.php");
	$ins = new mtbnegocio();
	$codnegper = isset($_POST["codnegper"]) ? $_POST["codnegper"]:NULL;
	$labneg = isset($_POST["labneg"]) ? $_POST["labneg"]:NULL;
	$tipneg = isset($_POST["tipneg"]) ? $_POST["tipneg"]:NULL;
	$durneg = isset($_POST["durneg"]) ? $_POST["durneg"]:NULL;
	$dirneg = isset($_POST["dirneg"]) ? $_POST["dirneg"]:NULL;
	$negactper = isset($_POST["negactper"]) ? $_POST["negactper"]:NULL;
	$idpersona	= isset($_POST["idpersona"]) ? $_POST["idpersona"]:NULL;
	$actu = isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$cod = isset($_GET["cod"]) ? $_GET["cod"]:NULL;
	$id = isset($_GET["id"]) ? $_GET["id"]:NULL;
	$dato1 = $ins -> selneg1($id);
	$dato2 = $ins -> selneg2($cod);
	
	$durneg1 = $ins->get_duracion();
	$negactper1 = $ins->get_actividad();
	
	// Actualizar datos
	if($codnegper && $labneg && $tipneg && $durneg && $dirneg && $actu) 
	{
		$ins -> updneg($codnegper ,$labneg, $tipneg, $durneg, $dirneg, $negactper);
	}
	// Insertar datos
	if($id && $labneg && $tipneg && $durneg && $dirneg && !$actu) {
		$ins -> insneg($id, $labneg, $tipneg, $durneg, $dirneg, $negactper);
	}
?>