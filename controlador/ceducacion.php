<?php
	include("modelo/meducacion.php");
		$ins= new Meducacion(); // llamar la clase del archivo
		
		$ultgra		= isset($_POST["ultgra"]) ? $_POST["ultgra"]:null; 
		$titobtper	= isset($_POST["titobtper"]) ? $_POST["titobtper"]:null;
		$matriper	= isset($_POST["matriper"]) ? $_POST["matriper"]:null;
		$nomatriper = isset($_POST["nomatriper"]) ? $_POST["nomatriper"]:null;
		$termcurant = isset($_POST["termcurant"]) ? $_POST["termcurant"]:null;
		$id			= isset($_GET['id']) ? $_GET['id']:NULL;
		
		$ultgra1  	= $ins->get_nivel_educativo_alcanzado();
		$titobtper1 = $ins->get_titulo_obtenido();
		$matriper1 	= $ins->get_matriculado();
		$nomatriper1= $ins->get_asistencia_estudios();
		$termcurant1= $ins->get_termino_curso_anterior();
		
		$datoseducacion = $ins->ver_datos_educacion($id);
		
		if($ultgra)
			{
				$ins->actu_datos_educacion($ultgra, $titobtper, $matriper, $nomatriper, $termcurant, $id);  // actualizar datos
			}	
		
?>			 