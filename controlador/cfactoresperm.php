<?php
	include ("modelo/mfactoresperm.php");

	$ins = new mtbfactoresvict();

	$codfac 	= isset($_POST["codfac"]) ? $_POST["codfac"]:NULL;
	$nomfactor 	= isset($_POST["nomfactor"]) ? $_POST["nomfactor"]:NULL;
	$actu 		= isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$id 		= isset($_GET["id"]) ? $_GET["id"]:NULL; 			//Id del factor para actualización
	$idper 		= isset($_GET["idper"]) ? $_GET["idper"]:NULL; 		//Id de la persona para ingreso de factor
	$idactu		= isset($_GET["idactu"]) ? $_GET["idactu"]:NULL; 	//Id de la persona para actualizar factor
	$factorper	= isset($_POST["factorperm"]) ? $_POST["factorperm"]:NULL;

	$titulo 	= "";
	$valid 		= 0;
	
	if (!$id && !$actu) 
	{
		$titulo = "Insertar";
	}
	else
	{
		$titulo = "Actualizar";
	}

	$dato1 		= $ins -> selfac1($id);
	$factores 	= $ins -> selfac();

	function nombrefact($idfac, $ins)
	{
		$nombrefactor = $ins->selfac1($idfac);
		return $nombrefactor[0]['nomfact'];
	}
	
	// Actualizar datos de factor de permanencia
	if($codfac && $nomfactor && $actu) 
	{
		$ins->updfac($codfac, $nomfactor);
		$id = NULL;

	}

	// Insertar datos de factor de permanencia
	if($nomfactor && !$actu) 
	{
		$ins->insfac($nomfactor);
		$valid = 1;
	}

	// Insertar datos de factor de permanencia de la persona
	if($factorper && $idper && !$actu) 
	{
		$ins->insfacxper($factorper, $idper);
		$valid = 1;
	}
?>