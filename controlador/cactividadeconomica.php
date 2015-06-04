<?php
	include("modelo/mactividadeconomica.php"); 
		$ins= new Mactividadeconomica(); // instanciar el nombre del modelo actividad economica
		
		$numpercar	= isset($_POST["numpercar"]) ? $_POST["numpercar"]:null; // personas a cargo 
		$ocuperact	= isset($_POST["ocuperact"]) ? $_POST["ocuperact"]:null; // ocupacion actual
		$trabper	= isset($_POST["trabper"]) ? $_POST["trabper"]:null; // en que trabaja
		$ingmenper	= isset($_POST["ingmenper"]) ? $_POST["ingmenper"]:null; // ingresos mensuales 
		$id			= isset($_GET["id"]) ? $_GET["id"]:null;
		
		$ocuperact1 = $ins->get_ocupacion();
		$datosactividad = $ins->ver_datos_actividad($id);
		
		if ($ocuperact) 
		{
			$ins->actu_datos_actividad($numpercar, $ocuperact, $trabper, $ingmenper, $id);
		}
?>			