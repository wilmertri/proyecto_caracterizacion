<?php
	include("modelo/mtbeps.php");
	$ins= new mtbeps(); // llamar la clase del archivo mcodeps se llama instanciar
		$codeps= isset($_POST["codeps"]) ? $_POST["codeps"]:null; 
		$nomeps= isset($_POST["nomeps"]) ? $_POST["nomeps"]:null;
		$teleps= isset($_POST["teleps"]) ? $_POST["teleps"]:null;
		$actu= 	isset($_POST["actu"]) ? $_POST["actu"]:null; // esta variable es para que me llame actualizar datos si no esta me llama insertar
		$id= isset($_GET["id"]) ? $_GET["id"]:null;
		$dato1= $ins->seleps1($id);

		if($codeps && $nomeps && $teleps && $actu) // && es un Y  
			{
				$ins->updeps($codeps,$nomeps,$teleps);  // actualizar datos
			}	
		if($nomeps && $teleps && !$actu) // insertar datos // cuando es ! es para negar  
			{
				$ins->inseps($nomeps,$teleps); 
			}
?>			