<?php
	include ("modelo/mdespyaban.php");
	$ins = new Mdespyaban();
	
	$munucipio 		= isset($_POST["codubi"]) ? $_POST["codubi"]:NULL;
	$fechexpul 		= isset($_POST["fechadeexpulsion"]) ? $_POST["fechadeexpulsion"]:NULL;
	$actorarmado 	= isset($_POST["actorarmado"]) ? $_POST["actorarmado"]:NULL;
	$ingaliment 	= isset($_POST["ingresoalimentos"]) ? $_POST["ingresoalimentos"]:NULL;
	$tpermanencia 	= isset($_POST["tieper"]) ? $_POST["tieper"]:NULL;
	$solicitud 		= isset($_POST["solicitud"]) ? $_POST["solicitud"]:NULL;
	$rinclusion 	= isset($_POST["razoninclusion"]) ? $_POST["razoninclusion"]:NULL;
	$usopredio 		= isset($_POST["usoprediodespues"]) ? $_POST["usoprediodespues"]:NULL;
	$perbienes 		= isset($_POST["perdidadebienes"]) ? $_POST["perdidadebienes"]:NULL;
	$tipobi 		= isset($_POST["tipodebien"]) ? $_POST["tipodebien"]:NULL;
	$relabien	 	= isset($_POST["relacionconelbien"]) ? $_POST["relacionconelbien"]:NULL;
	$tipofam 		= isset($_POST["tipodefamilia"]) ? $_POST["tipodefamilia"]:NULL;
	$ideal 			= isset($_POST["ideal"]) ? $_POST["ideal"]:NULL;
	$ubicacion	 	= isset($_POST["ubicacionreubicacion"]) ? $_POST["ubicacionreubicacion"]:NULL;
	$retorno 		= isset($_POST["razonderetorno"]) ? $_POST["razonderetorno"]:NULL;
	$medproteccion 	= isset($_POST["medidasdeproteccion"]) ? $_POST["medidasdeproteccion"]:NULL;
	$reciproteccion	= isset($_POST["recibiomedidasdeproteccion"]) ? $_POST["recibiomedidasdeproteccion"]:NULL;
	$indemnizacion 	= isset($_POST["harecibidoindemnizacion"]) ? $_POST["harecibidoindemnizacion"]:NULL;
	$observacion 	= isset($_POST["observaciones"]) ? $_POST["observaciones"]:NULL;
	$actu 			= isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$id 			= isset($_GET["id"]) ? $_GET["id"]:NULL;

	
	$factores_permanencia = $ins -> get_factores_permanencia();
	
	$respuesta_cerrada		= $ins -> get_respuesta_cerrada();
	$respuesta_cerrada_dos	= $ins -> get_respuesta_cerrada_dos();
	$solicitud_ 			= $ins -> get_solicitud();
	$razon_inclusion		= $ins -> get_razon_inclusion();
	$predio_perdido_por     = $ins -> get_predio_perdido_por();
	$tipo_inmueble			= $ins -> get_tipo_inmueble();
	$relacion_con_el_bien	= $ins -> get_relacion_con_el_bien(); 
	$tipo_de_familia		= $ins -> get_tipo_de_familia();
	$ideal_rupd				= $ins -> get_ideal_rupd();
	$razon_retorno			= $ins -> get_razon_retorno();

	
	
	if ($actu) {
		if ($actorarmado ==0) {
			$actorarmado = $dato1[0]['actperact'];
		}
		if ($ingaliment ==0) {
			$ingaliment  = $dato1[0]['ingresoalimentos'];
		}
		
		if ($solicitud ==0) {
			$solicitud  = $dato1[0]['solrupruv'];
		}
		if ($rinclusion ==0) {
			$rinclusion  = $dato1[0]['razrupruv'];
		}
		if ($usopredio ==0) {
			$usopredio = $dato1[0]['usopreddes'];
		}
		if ($tipobi ==0) {
			$tipobi = $dato1[0]['usopreddes'];
		}
		if ($relabien ==0) {
			$relabien = $dato1[0]['relbienper'];
		}
		if ($tipofam ==0) {
			$tipofam = $dato1[0]['tipfamper'];
		}
		if ($ideal ==0) {
			$ideal = $dato1[0]['iderupruv'];
		}
		
		if ($retorno ==0) {
			$retorno = $dato1[0]['raznoret'];
		}
		if ($medproteccion ==0) {
			$medproteccion = $dato1[0]['medprotper'];
		}
		if ($reciproteccion ==0) {
			$reciproteccion = $dato1[0]['recprotper'];
		}
		if ($indemnizacion=0) {
			$indemnizacion = $dato1[0]['indunivict'];
		}
	}
	
	if($munucipio)
		{
			$ins -> actu_datos_despyaban($munucipio, $fechexpul, $actorarmado, $ingaliment, $tpermanencia, $solicitud, $rinclusion, $usopredio, $perbienes, $tipobi, $relabien, $tipofam, $ideal, $ubicacion, $retorno, $medproteccion, $reciproteccion, $indemnizacion, $observacion, $id);
		}
?>
