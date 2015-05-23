<?php
	include ("modelo/mdatospersona.php");
	$ins = new mdatospersona();
	
	$idpersona = isset($_POST["idpersona"]) ? $_POST["idpersona"]:NULL;
	$numficha = isset($_POST["numficha"]) ? $_POST["numficha"]:NULL;
	$docper = isset($_POST["docper"]) ? $_POST["docper"]:NULL;
	$tipdoc1 = isset($_POST["tipdoc"]) ? $_POST["tipdoc"]:NULL;
	$lugexpdoc1 = isset($_POST["codubi"]) ? $_POST["codubi"]:NULL;
	$pnom = isset($_POST["pnom"]) ? $_POST["pnom"]:NULL;
	$snom = isset($_POST["snom"]) ? $_POST["snom"]:NULL;
	$pape = isset($_POST["pape"]) ? $_POST["pape"]:NULL;
	$sape = isset($_POST["sape"]) ? $_POST["sape"]:NULL;
	$gen = isset($_POST["gen"]) ? $_POST["gen"]:NULL;
	$dir = isset($_POST["dir"]) ? $_POST["dir"]:NULL;
	$zon = isset($_POST["zon"]) ? $_POST["zon"]:NULL;
	$ver = isset($_POST["ver"]) ? $_POST["ver"]:NULL;
	$sec = isset($_POST["sec"]) ? $_POST["sec"]:NULL;
	$barfin = isset($_POST["barfin"]) ? $_POST["barfin"]:NULL;
	$tel = isset($_POST["tel"]) ? $_POST["tel"]:NULL;
	$telseg = isset($_POST["telseg"]) ? $_POST["telseg"]:NULL;
	$lugnac1 = isset($_POST["codubinac"]) ? $_POST["codubinac"]:NULL;
	$fecnac = isset($_POST["fecnac"]) ? $_POST["fecnac"]:NULL;
	$estciv = isset($_POST["estciv"]) ? $_POST["estciv"]:NULL;
	$etnia1 = isset($_POST["etnia"]) ? $_POST["etnia"]:NULL;
	$ges = isset($_POST["ges"]) ? $_POST["ges"]:NULL;
	$hijosacargo = isset($_POST["hijosacargo"]) ? $_POST["hijosacargo"]:NULL;
	$relsexper = isset($_POST["relsexper"]) ? $_POST["relsexper"]:NULL;
	$libretmil = isset($_POST["libretmil"]) ? $_POST["libretmil"]:NULL;
	$tramlibretmil = isset($_POST["tramlibretmil"]) ? $_POST["tramlibretmil"]:NULL;
	$actu = isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$id = isset($_GET["id"]) ? $_GET["id"]:NULL;
	
	$dato 		= $ins->selper();
	$dato1 		= $ins->selper1($id);


	//echo "Tipdoc: " . $dato1[0]['tipdocper'];
	//echo "lugexp: " . $dato1[0]['lugexpdocper'];
	//Var_dump($dato1);
	//echo "Tipdoc: " . $dato1[0]['tipdocper'];
	//echo "lugexp: " . $dato1[0]['lugexpdocper'];
	
	$ver1 			= $ins->selver();
	$zona 			= $ins->selzona();
	$tipdoc 		= $ins->get_documento();
	$genper 		= $ins->get_genero();
	$estcivper 		= $ins->get_estciv();
	$etnia 			= $ins->get_etnia();
	$gestlact 		= $ins->get_estado_embarazo();
	$hijosacargo1 	= $ins->get_hijos_a_cargo();
	$relsexper1 	= $ins->get_relaciones();
	$libretmil1 	= $ins->get_libreta_militar();
	$tramlibretmil1 = $ins->get_exencion();
	
	
	if ($dato1) 
	{
		$edad = $ins->get_calcular_edad($dato1[0]['fecnacper']);
	}
	
	
	/*echo $docper." ".$tipdoc1." ".$lugexpdoc." ".$lugexpdoc1." ".$pnom." ".$snom." ".$pape." ".$sape." ".$gen." ".$dir." ".$zon;
	echo " ";
	echo $ver." ".$sec." ".$barfin." ".$tel." ".$telseg." ".$lugnac." ".$lugnac1." ".$fecnac." ";
	echo " ";
	echo $estciv;
	echo " ";
	echo $etnia1." ".$ges;
	echo " ";*/
	

	//$tipdocinfo = $ins -> seldoc();
	
	// Actualizar datos
	
	if($idpersona && $docper && /*$tipdoc1 && $lugexpdoc1 && $pnom && $pape && $gen && $dir && $zon && $barfin && $tel && $lugnac1 && $fecnac && $estciv && $etnia1 && $hijosacargo && $relsexper && */$actu) 
	{
		$ins -> updper($idpersona, $numficha, $docper, $tipdoc1, $lugexpdoc1, $pnom, $snom, $pape, $sape, $gen, $dir, $zon, $ver, $sec, $barfin, $tel, $telseg, $lugnac1, $fecnac, $estciv, $etnia1, $ges, $hijosacargo, $relsexper, $libretmil, $tramlibretmil);
	}
	
	// Insertar datos
	if($numficha &&$docper  && $tipdoc1 && $lugexpdoc1 && $pnom && $pape && $gen && $dir && $zon &&  $tel && $lugnac1 && $fecnac && $estciv && $etnia1 && $hijosacargo && $relsexper && !$actu) 
	{
		//$idpersona = $idpersona;
		$ins -> insper($numficha, $docper, $tipdoc1, $lugexpdoc1, $pnom, $snom, $pape, $sape, $gen, $dir, $zon, $ver, $sec, $barfin, $tel, $telseg, $lugnac1, $fecnac, $estciv, $etnia1, $ges, $hijosacargo, $relsexper, $libretmil, $tramlibretmil);
	}
?>
