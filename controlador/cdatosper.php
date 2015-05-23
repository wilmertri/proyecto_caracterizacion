<?php

	include("modelo/mdatospersona.php");
	$ins = new mdatospersona();


	$id = isset($_GET["id"]) ? $_GET["id"]:NULL; 

	$datos = $ins->selper1($id);
 
 ?>