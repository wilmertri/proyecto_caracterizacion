<?php
	//include("modelo/meducacion.php");
	//$ins= new meducacion(); // llamar la clase del archivo mdatosper se llama instanciar
		$ultgra= isset($_POST["ultgra"]) ? $_POST["ultgra"]:null; 
		$titobt= isset($_POST["titobt"]) ? $_POST["titobt"]:null;
		$mat= isset($_POST["mat"]) ? $_POST["mat"]:null;
		$razest= isset($_POST["razest"]) ? $_POST["razest"]:null;
		$terest= isset($_POST["terest"]) ? $_POST["terest"]:null;
		//$cap= isset($_POST["cap"]) ? $_POST["cap"]:null;
		
		
		$numdoc	= isset($_POST["numdoc"]) ? $_POST["numdoc"]:NULL;
		$actu= 	isset($_POST["actu"]) ? $_POST["actu"]:null; // esta variable es para que me llame actualizar datos si no esta me llama insertar
		$id= isset($_GET["id"]) ? $_GET["id"]:null;
		$cod= isset($_GET["cod"]) ? $_GET["cod"]:null;
		//"$dato1= $ins->seledu($id)";
		//$dato2 = $ins -> selcap2($cod);

		if($ultgra && $titobt && $mat && $razest && $terest &&$cap) // && es un Y  
			{
				$ins->updedu($ultgra,$titobt,$mat,$razest,$terest,$cap);  // actualizar datos
			}	
		
?>			