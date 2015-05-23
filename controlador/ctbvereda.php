<?php
	include("modelo/mtbvereda.php");
	$ins= new mtbvereda(); // llamar la clase del archivo mcodeps se llama instanciar
		$codver= isset($_POST["codver"]) ? $_POST["codver"]:null; 
		$nomver= isset($_POST["nomver"]) ? $_POST["nomver"]:null;
		$desubver= isset($_POST["desubver"]) ? $_POST["desubver"]:null;
		$actu= 	isset($_POST["actu"]) ? $_POST["actu"]:null; // esta variable es para que me llame actualizar datos si no esta me llama insertar
		$id= isset($_GET["id"]) ? $_GET["id"]:null;
		$dato1= $ins->selver1($id);

		if($codver && $nomver && $desubver && $actu) // && es un Y  
			{
				$ins->updver($codver,$nomver,$desubver);  // actualizar datos
			}	
		if($nomver && $desubver && !$actu) // insertar datos // cuando es ! es para negar  
			{
				$ins->insver($nomver,$desubver); 
			}
?>			