<?php
	include ("modelo/mparametro.php");
	
	$ins = new mparametro();
	
	//Eliminar
	$del = isset($_GET["del"]) ? $_GET["del"]:NULL;
	if ($del){
		$ins->delpar($del);
	}
	
	$del2 = isset($_GET["del2"]) ? $_GET["del2"]:NULL;
	if ($del2){
		$ins->delval($del2);
	}
	$ed = isset($_GET["ed"]) ? $_GET["ed"]:NULL;
	$id = isset($_GET["id"]) ? $_GET["id"]:NULL;
	$prr = isset($_GET["prr"]) ? $_GET["prr"]:NULL;
	$codpar = isset($_POST["codpar"]) ? $_POST["codpar"]:NULL;
	$nompar = isset($_POST["nompar"]) ? $_POST["nompar"]:NULL;
	$codval = isset($_POST["codval"]) ? $_POST["codval"]:NULL;
	$nomval = isset($_POST["nomval"]) ? $_POST["nomval"]:NULL;
	$actu = isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	
	$dat5 = $ins->selpar1($id);
	$dat3 = $ins->selpar1($prr);
	$dat4 = $ins->selval2($id);
	
	//Actualizar Parametro
	if ($codpar && $nompar && $actu)
	{
		$ins->updpar($codpar,$nompar);
	}
	
	//Insertar Parametro
	if ($nompar  && !$actu)
	{
		$ins->inspar($nompar);
	}
	
	//Actualizar Valor
	if($codval && $nomval && $actu)
	{
		$ins->updval($codval, $nomval);
	}
	
	//Insertar Valor
	if ($nomval && $codpar && !$actu)
	{
		$ins->insval($codval, $nomval, $codpar);
	}
?>