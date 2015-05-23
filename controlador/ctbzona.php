<?php
	include("modelo/mtbzona.php");
	$ins= new mtbzona(); // llamar la clase del archivo mcodeps se llama instanciar
		$codzona= isset($_POST["codzona"]) ? $_POST["codzona"]:null; 
		$nomzona= isset($_POST["nomzona"]) ? $_POST["nomzona"]:null;
		$deszona= isset($_POST["deszona"]) ? $_POST["deszona"]:null;
		$actu= 	isset($_POST["actu"]) ? $_POST["actu"]:null; // esta variable es para que me llame actualizar datos si no esta me llama insertar
		$id= isset($_GET["id"]) ? $_GET["id"]:null;
		$dato1= $ins->selzona1($id);

		if($codzona && $nomzona && $deszona && $actu) // && es un Y  
			{
				$ins->updzona($codzona,$nomzona,$deszona);  // actualizar datos
			}	
		if($nomzona && $deszona && !$actu) // insertar datos // cuando es ! es para negar  
			{
				$ins->inszona($nomzona,$deszona); 
			}
?>			