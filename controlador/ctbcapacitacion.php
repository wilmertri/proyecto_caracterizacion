<?php
	include("modelo/mtbcapacitacion.php");
	$ins= new mtbcapacitacion(); // llamar la clase del archivo mdatosper se llama instanciar
		$codcapper= isset($_POST["codcapper"]) ? $_POST["codcapper"]:null; 
		$nomcap= isset($_POST["nomcap"]) ? $_POST["nomcap"]:null;
		$entcap= isset($_POST["entcap"]) ? $_POST["entcap"]:null;
		$titcap= isset($_POST["titcap"]) ? $_POST["titcap"]:null;
		$opicaper= isset($_POST["opicaper"]) ? $_POST["opicaper"]:null;
		$newopicaper= isset($_POST["newopicaper"]) ? $_POST["newopicaper"]:null;
		
		
		$numdoc	= isset($_POST["numdoc"]) ? $_POST["numdoc"]:NULL;
		$actu= 	isset($_POST["actu"]) ? $_POST["actu"]:null; // esta variable es para que me llame actualizar datos si no esta me llama insertar
		$id= isset($_GET["id"]) ? $_GET["id"]:null;
		$cod= isset($_GET["cod"]) ? $_GET["cod"]:null;
		$dato1= $ins->selcap1($id);
		$dato2 = $ins -> selcap2($cod);

		if($codcapper && $nomcap && $entcap && $titcap && $opicaper && $newopicaper &&$actu) // && es un Y  
			{
				$ins->updcap($codcapper,$nomcap,$entcap,$titcap,$opicaper,$newopicaper);  // actualizar datos
			}	
		if($nomcap && $entcap && $titcap && $opicaper && $newopicaper  && $id &&  !$actu) // insertar datos // cuando es ! es para negar  
			{
				$ins->inscap($nomcap,$entcap,$titcap,$opicaper,$newopicaper,$id); 
			}
?>			