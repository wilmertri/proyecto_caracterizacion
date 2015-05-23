<?php
	include("modelo/mprofesion.php");
	$ins= new mprofesion(); // llamar la clase del archivo mdatosper se llama instanciar
		$idprofesion= isset($_POST["idprofesion"]) ? $_POST["idprofesion"]:null; 
		$nombreprof= isset($_POST["nombreprof"]) ? $_POST["nombreprof"]:null;
		$id			= isset($_GET['id']) ? $_GET['id']:NULL;
		$actu= 	isset($_POST["actu"]) ? $_POST["actu"]:null; // esta variable es para que me llame actualizar datos si no esta me llama insertar
        $dato1= $ins->selprof1($id);


		
		if($idprofesion && $nombreprof && $actu ) // && es un Y  
			{
				$ins->updprof($idprofesion, $nombreprof);  // actualizar datos
			}	
		if($nombreprof && !$actu ) // && es un Y  
			{
				$ins->insprof($nombreprof);  // insertar datos
			}
?>			 