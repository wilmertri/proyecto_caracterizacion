<?php
	include("modelo/mtbopcionnomatricula.php");
	
	$ins= new Mopcionnomatricula(); // llamar la clase del archivo mdatosper se llama instanciar
		
		$idopcion 	 = isset($_POST["idopcion"]) ? $_POST["idopcion"]:null; 
		$opcion  	 = isset($_POST["opcion"]) ? $_POST["opcion"]:null;
		$actu		 = isset($_POST["actu"]) ? $_POST["actu"]:null; // esta variable es para que me llame actualizar datos si no esta me llama insertar
		$id			 = isset($_GET['id']) ? $_GET['id']:NULL;
        
		$dato1       = $ins->selopcion1($id);

		
		if($idopcion && $opcion && $actu ) // && es un Y  
			{
				$ins->updopcion($idopcion, $opcion);  // actualizar datos
			}	
		if($opcion && !$actu ) // && es un Y  
			{
				$ins->insopcion($opcion);  // insertar datos
			}
?>			 