<?php
	include("modelo/mtbcapacitacion.php");
		$ins= new Mcapacitacion(); 
		
		$codcapper  = isset($_POST["codcapper"]) ? $_POST["codcapper"]:null; 
		$nomcap		= isset($_POST["nomcap"]) ? $_POST["nomcap"]:null;
		$entcap		= isset($_POST["entcap"]) ? $_POST["entcap"]:null;
		$titcapper	= isset($_POST["titcapper"]) ? $_POST["titcapper"]:null;
		$opicapper	= isset($_POST["opicapper"]) ? $_POST["opicapper"]:null;
		$idpersona	= isset($_POST["idpersona"]) ? $_POST["idpersona"]:NULL;
		$actu= 	isset($_POST["actu"]) ? $_POST["actu"]:null;
		$id= isset($_GET["id"]) ? $_GET["id"]:null;
		$cod= isset($_GET["cod"]) ? $_GET["cod"]:null;
		
		$dato1		= $ins->selcap1($id);
		$dato2 		= $ins -> selcap2($cod);

		if($codcapper &&$actu) 
			{
				$ins->updcap($codcapper,$nomcap,$entcap,$titcapper,$opicapper);  // actualizar datos
			}	
		if($nomcap && $entcap && $titcapper && $opicapper && $id &&  !$actu) // insertar datos  
			{
				$ins->inscap($nomcap,$entcap,$titcapper,$opicapper,$id); 
			}
?>			