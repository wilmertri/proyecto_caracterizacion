<?php

	/*
		@author: Rubiel Sánches Torres
		@Version: V1.0
	*/

	include ("modelo/mtbsalud.php");

	$ins = new Mdatossalud();


	$a_sissal 		= isset($_POST['sissal']) ? $_POST['sissal']:NULL;
	$a_eps 			= isset($_POST['eps']) ? $_POST['eps']:NULL;
	$a_negser 		= isset($_POST['negser']) ? $_POST['negser']:NULL;
	$a_atevicper 	= isset($_POST['atevicper']) ? $_POST['atevicper']:NULL;
	$a_esqvacper 	= isset($_POST['esqvacper']) ? $_POST['esqvacper']:NULL;
	$a_conodoper	= isset($_POST['conodoper']) ? $_POST['conodoper']:NULL;
	// $a_dsc1 		= isset($_POST['dsc1']) ? $_POST['dsc1']:NULL;
	// $a_dsc2 		= isset($_POST['dsc2']) ? $_POST['dsc2']:NULL;
	$a_disconfarm 	= isset($_POST['disconfarm']) ? $_POST['disconfarm']:NULL;
	// $a_reh1 		= isset($_POST['reh1']) ? $_POST['reh1']:NULL;
	// $a_reh2 		= isset($_POST['reh2']) ? $_POST['reh2']:NULL;
	$a_comdiaper 	= isset($_POST['comdiaper']) ? $_POST['comdiaper']:NULL;
	$a_id			= isset($_GET['id']) ? $_GET['id']:NULL;
	$actu = isset($_POST["actu"]) ? $_POST["actu"]:NULL;

	$sissal 		= $ins->get_sistema_salud();
	$eps			= $ins->get_seleccionar_eps();
	$negser			= $ins->get_negar_servicio();
	$atevicper 		= $ins->get_atencion_salud();
	$esqvacper		= $ins->get_esquema_vacunacion();
	$conodoper		= $ins->get_control_odontologico();
	$comdiaper		= $ins->get_alimentos_dia();
	$disconfarm		= $ins->get_conflicto_armado();

	// var_dump($sissal);
	
	// Actualizar datos
	if($a_sissal && $actu) 
	{
		$ins ->actu_datos_salud($a_id, $a_sissal ,$a_eps, $a_negser, $a_atevicper, $a_esqvacper,$a_conodoper, $a_disconfarm, $a_comdiaper);
	}
?>