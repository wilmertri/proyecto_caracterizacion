<?php
	include("modelo/meducacion.php");
	$ins= new meducacion(); // llamar la clase del archivo mdatosper se llama instanciar
		$ultgra= isset($_POST["ultgra"]) ? $_POST["ultgra"]:null; 
		$titobtper= isset($_POST["titobtper"]) ? $_POST["titobtper"]:null;
		$matriper= isset($_POST["matriper"]) ? $_POST["matriper"]:null;
		$nomatriper= isset($_POST["nomatriper"]) ? $_POST["nomatriper"]:null;
		$termcurant= isset($_POST["termcurant"]) ? $_POST["termcurant"]:null;
		$a_id			= isset($_GET['pr']) ? $_GET['pr']:NULL;
		$actu= 	isset($_POST["actu"]) ? $_POST["actu"]:null; // esta variable es para que me llame actualizar datos si no esta me llama insertar

		$ultgr  		= $ins->get_nivel_educativo_alcanzado();
		$titobtpe 		= $ins->get_titulo_obtenido();
		$matripe 		= $ins->get_matriculado();
		$nomatripe 		= $ins->get_asistencia_estudios();
		$termcuran 		= $ins->get_termino_curso_anterior();
		
		if($ultgra && $titobtper && $matriper && $nomatriper && $termcurant && $actu) // && es un Y  
			{
				$ins->updedu($a_id, $ultgra, $titobtper, $matriper, $nomatriper, $termcurant);  // actualizar datos
			}	
		
?>			 