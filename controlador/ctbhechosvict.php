<?php
	include ("/modelo/mtbhechosvict.php");
	$ins = new mtbhechosvict();
	$codhec = isset($_POST["codhec"]) ? $_POST["codhec"]:NULL;
	$nomhec = isset($_POST["nomhec"]) ? $_POST["nomhec"]:NULL;
	$deshec = isset($_POST["deshec"]) ? $_POST["deshec"]:NULL;
	$actu = isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$id =  isset($_GET["id"]) ? $_GET["id"]:NULL;
	
	$dato1 = $ins -> selhec1($id);
	
	// Actualizar datos
	if($codhec && $nomhec && $deshec && $actu) 
	{
		$ins -> updhec($codhec ,$nomhec, $deshec);
	}
	// Insertar datos
	if($nomhec && $deshec && !$actu) {
		$ins -> inshec($nomhec, $deshec);
	}
?>