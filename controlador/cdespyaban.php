<?php
	include ("modelo/mdespyaban.php");
	$ins = new Mdespyaban();
	
	$municipio 		= isset($_POST["codubiexp"]) ? $_POST["codubiexp"]:NULL;
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
	$ubicacion	 	= isset($_POST["codubinac"]) ? $_POST["codubinac"]:NULL;
	$retorno 		= isset($_POST["razonderetorno"]) ? $_POST["razonderetorno"]:NULL;
	$medproteccion 	= isset($_POST["medidasdeproteccion"]) ? $_POST["medidasdeproteccion"]:NULL;
	$reciproteccion	= isset($_POST["recibiomedidasdeproteccion"]) ? $_POST["recibiomedidasdeproteccion"]:NULL;
	$indemnizacion 	= isset($_POST["harecibidoindemnizacion"]) ? $_POST["harecibidoindemnizacion"]:NULL;
	$observacion 	= isset($_POST["observaciones"]) ? $_POST["observaciones"]:NULL;
	$observacion    = strtoupper($observacion);
	$actu 			= isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$id 			= isset($_GET["id"]) ? $_GET["id"]:NULL;

	$dato1 = $ins->consulta_datos_despyaban($id);

	//var_dump($observacion);
	//Datos para seleccionar
	
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



	
	if ($id) {
		
		// 1
		if ($municipio == 0) 
		{
			$municipio = $dato1[0]['lugexpulper'];
		}

		if ($fechexpul == 0) 
		{
			$fechexpul = $dato1[0]['fecexpulper'];
		}

		if ($tpermanencia == "") 
		{
			$tpermanencia = $dato1[0]['tiepermun'];
		}

		if ($actorarmado == 0) 
		{
			$actorarmado = $dato1[0]['actperact'];
		}

		if ($ingaliment == 0) 
		{
			$ingaliment  = $dato1[0]['ingresoalimentos'];
		}

		if ($solicitud == 0) 
		{
			$solicitud  = $dato1[0]['solrupruv'];
		}
		
		if ($rinclusion == 0) 
		{
			$rinclusion  = $dato1[0]['razrupruv'];
		}

		if ($usopredio == 0) 
		{
			$usopredio = $dato1[0]['usopreddes']; //Uso del predio despues del despojo
		}

		if ($perbienes == 0) 
		{
			$perbienes = $dato1[0]['perbienper']; //Uso del predio despues del despojo
		}
				
		if ($tipobi == 0) 
		{
			$tipobi = $dato1[0]['tipbienper'];
		}
		
		if ($relabien == 0) 
		{
			$relabien = $dato1[0]['relbienper'];
		}
		
		if ($tipofam == 0) 
		{
			$tipofam = $dato1[0]['tipfamper'];
		}
		
		if ($ideal == 0) 
		{
			$ideal = $dato1[0]['iderupruv'];
		}
		
		if ($retorno == 0) 
		{
			$retorno = $dato1[0]['raznoret'];
		}
		
		if ($medproteccion == 0) 
		{
			$medproteccion = $dato1[0]['medprotper'];
		}

		if ($reciproteccion == 0) 
		{
			$reciproteccion = $dato1[0]['recprotper'];
		}

		if ($ubicacion == 0) 
		{
			$ubicacion = $dato1[0]['lugarrehubi'];
		}

		if ($indemnizacion == 0) 
		{
			$indemnizacion = $dato1[0]['indunivict'];
		}

		if ($observacion == "") 
		{
			$observacion = $dato1[0]['obsdesper'];
		}
		else
		{
			$observacion = $dato1[0]['obsdesper'] . " - " . $observacion;
		}
	}

	    echo	$municipio		.'<br />';	
	    echo 	$fechexpul 		.'<br />';
	/*
	
	echo 	$actorarmado	.'<br />';
	echo	$ingaliment 	.'<br />';
	echo	$tpermanencia	.'<br />';
	echo	$solicitud 		.'<br />';
	echo	$rinclusion 	.'<br />';
	echo	$usopredio 		.'<br />';
	echo	$perbienes 		.'<br />';
	echo	$tipobi 		.'<br />';
	echo	$relabien	 	.'<br />';
	echo	$tipofam 		.'<br />';
	echo	$ideal 			.'<br />';
	echo	$ubicacion	 	.'<br />';
	echo	$retorno 		.'<br />';
	echo	$medproteccion 	.'<br />';
	echo	$reciproteccion	.'<br />';
	echo	$indemnizacion 	.'<br />';
	*/
	echo 	$observacion 	.'<br />';
	
	if($municipio)
	{
		$ins->actu_datos_despyaban($municipio, $fechexpul, $actorarmado, $ingaliment, $tpermanencia, $solicitud, $rinclusion, $usopredio, $perbienes, $tipobi, $relabien, $tipofam, $ideal, $ubicacion, $retorno, $medproteccion, $reciproteccion, $indemnizacion, $observacion, $id);
	}
?>
