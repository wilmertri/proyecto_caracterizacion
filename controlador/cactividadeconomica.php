<?php
	include("modelo/mactividadeconomica.php"); 
		$ins= new Mactividadeconomica(); // instanciar el nombre del modelo actividad economica
		
		$numpercar	= isset($_POST["numpercar"]) ? $_POST["numpercar"]:null; // personas a cargo 
		$ocuperact	= isset($_POST["ocuperact"]) ? $_POST["ocuperact"]:null; // ocupacion actual
		$trabper	= isset($_POST["trabper"]) ? $_POST["trabper"]:null; // en que trabaja
		$ingmenper	= isset($_POST["ingmenper"]) ? $_POST["ingmenper"]:null; // ingresos mensuales -- falta definir variable
		//$ingresosn= isset($_POST["ingresosn"]) ? $_POST["ingresosn"]:null; // fuente ingresos 
		//$= isset($_POST[""]) ? $_POST[""]:null; // otro cual, esta por definir - no hay variable
		//$= isset($_POST[""]) ? $_POST[""]:null; // fuente ingresos externa - Recibe ayuda a traves de alguno de los siguientes programas sociales - no hay variable
		//$= isset($_POST[""]) ? $_POST[""]:null; // oficios en los que tiene experiencia laboral - no hay variable
		//$= isset($_POST[""]) ? $_POST[""]:null; // ha emprendido algun negocio
		//$= isset($_POST[""]) ? $_POST[""]:null; // que tipo de negocio es
		//$negactper= isset($_POST["negactper"]) ? $_POST["negactper"]:null; // esta activo el negocio
		//$= isset($_POST[""]) ? $_POST[""]:null; // duracion del negocio - aunque se tiene pensado que sea desplegable - sin variable		
		//$actu= 	isset($_POST["actu"]) ? $_POST["actu"]:null; // esta variable es para que me llame actualizar datos y si no esta me llama insertar
		$id			= isset($_GET["id"]) ? $_GET["id"]:null;
		
		$ocuperact1 = $ins->get_ocupacion();
		//$dato1= $ins->seleps1($pr);
		$datosactividad = $ins->ver_datos_actividad($id);
		
		if ($ocuperact) 
		{
			$ins->actu_datos_actividad($numpercar, $ocuperact, $trabper, $ingmenper, $id);
		}
		/*if($numpercar && $ocuperact && $actperact && $ && $ingresosn && $ && $ && $ && $ && $ && $negactper && $ && $actu) // && es un Y  
			{
				$ins->updeps($numpercar,$ocuperact,$actperact,$,$ingresosn,$,$,$,$,$,$negactper,$);  // actualizar datos
			}	
		if($numpercar && $ocuperact && $actperact && $ && $ingresosn && $ && $ && $ && $ && $ && $negactper && $  && !$actu) // insertar datos // cuando es ! es para negar  
			{
				$ins->inseps($numpercar,$ocuperact,$actperact,$,$ingresosn,$,$,$,$,$,$negactper,$); 
			}
		*/
?>			