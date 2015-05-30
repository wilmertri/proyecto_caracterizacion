<?php
	include("modelo/meducacion.php");
		$ins= new meducacion(); // llamar la clase del archivo mdatosper se llama instanciar
		
		$ultgra= isset($_POST["ultgra"]) ? $_POST["ultgra"]:null; 
		$titobtper= isset($_POST["titobtper"]) ? $_POST["titobtper"]:null;
		$matriper= isset($_POST["matriper"]) ? $_POST["matriper"]:null;
		$nomatriper= isset($_POST["nomatriper"]) ? $_POST["nomatriper"]:null;
		$termcurant= isset($_POST["termcurant"]) ? $_POST["termcurant"]:null;
		$id			= isset($_GET['id']) ? $_GET['id']:NULL;
		
		$ultgr  		= $ins->get_nivel_educativo_alcanzado();
		$titobtpe 		= $ins->get_titulo_obtenido();
		$matripe 		= $ins->get_matriculado();
		$nomatripe 		= $ins->get_asistencia_estudios();
		$termcuran 		= $ins->get_termino_curso_anterior();
		
		$datoseducacion = $ins->ver_datos_educacion($id);
		
		if($ultgra)
			{
				$ins->actu_datos_educacion($ultgra, $titobtper, $matriper, $nomatriper, $termcurant, $id);  // actualizar datos
			}	
		
?>			 