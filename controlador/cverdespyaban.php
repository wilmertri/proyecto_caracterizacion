<?php
	include ("modelo/mdespyaban.php");  
	$ins = new Mdespyaban();
	
	$id	= isset($_GET['id']) ? $_GET['id']:NULL;
	
	$datosdesoyaban = $ins->consulta_datos_despyaban($id);


	$message_empty = "<strong> Sin registro </strong>";

	//Lugar de expulsión

	if ($datosdesoyaban[0]['lugexpulper']) 
	{
		$verLugarExpulsion	= $ins->getUbicacion($datosdesoyaban[0]['lugexpulper']);
		$LugarExpulsion = $verLugarExpulsion['ciudad'] . ' - ' . $verLugarExpulsion['departamento'];
	}
	else
	{
		$LugarExpulsion	= $message_empty;
	}

	//Fecha de expulsión

	if ($datosdesoyaban[0]['fecexpulper']) 
	{
		$FechaExpulsion		= $datosdesoyaban[0]['fecexpulper'];
	}
	else
	{
		$FechaExpulsion	= $message_empty;
	}

	//Tiempo de permanencia en el municipio

	if ($datosdesoyaban[0]['tiepermun']) 
	{
		$TiempoPermanencia	= $datosdesoyaban[0]['tiepermun'];
	}
	else
	{
		$TiempoPermanencia	= $message_empty;
	}

	//Algun actor armado ha impedido salir de un territorio

	if ($datosdesoyaban[0]['actperact']) 
	{
		$verActorArmado	= $ins->get_valor($datosdesoyaban[0]['actperact']);
		$ActorArmado 	= $verActorArmado[0]['nomval'];
	}
	else
	{
		$ActorArmado	= $message_empty;
	}

	//Algun actor armado ha impedido el ingreso de alimentos al territorio

	if ($datosdesoyaban[0]['ingresoalimentos']) 
	{
		$verIngresoAlimentos 	= $ins->get_valor($datosdesoyaban[0]['ingresoalimentos']);
		$IngresoAlimentos 		= $verIngresoAlimentos[0]['nomval'];
	}
	else
	{
		$IngresoAlimentos	= $message_empty;
	}

	//Solicitante de la inclusión en el RUPD/RUV

	if ($datosdesoyaban[0]['solrupruv']) 
	{
		$verSolicitanteInclusion 	= $ins->get_valor($datosdesoyaban[0]['solrupruv']);
		$SolicitanteInclusion 		= $verSolicitanteInclusion[0]['nomval'];
	}
	else
	{
		$SolicitanteInclusion	= $message_empty;
	}

	//Razón de la inclusión en el RUPD/RUV

	if ($datosdesoyaban[0]['razrupruv']) 
	{
		$verRazonInclusion 	= $ins->get_valor($datosdesoyaban[0]['razrupruv']);
		$RazonInclusion 		= $verRazonInclusion[0]['nomval'];
	}
	else
	{
		$RazonInclusion	= $message_empty;
	}

	//Predio perdido por un grupo armado

	if ($datosdesoyaban[0]['usopreddes']) 
	{
		$verPredioPerdido 	= $ins->get_valor($datosdesoyaban[0]['usopreddes']);
		$PredioPerdido 		= $verPredioPerdido[0]['nomval'];
	}
	else
	{
		$PredioPerdido	= $message_empty;
	}

	//Número de predios perdidos

	if ($datosdesoyaban[0]['perbienper']) 
	{
		$NumeroPrediosPerdidos 		= $datosdesoyaban[0]['perbienper'];
	}
	else
	{
		$NumeroPrediosPerdidos	= $message_empty;
	}

	//Tipo de bien inmueble perdido

	if ($datosdesoyaban[0]['tipbienper']) 
	{
		$verTipoPredioAbandono 		= $ins->get_valor($datosdesoyaban[0]['tipbienper']);
		$TipoPredioAbandono 		= $verTipoPredioAbandono[0]['nomval'];
	}
	else
	{
		$TipoPredioAbandono	= $message_empty;
	}

	//Relación con el bien de abandono

	if ($datosdesoyaban[0]['relbienper']) 
	{
		$verRelacionBienAbandono 		= $ins->get_valor($datosdesoyaban[0]['relbienper']);
		$RelacionBienAbandono			= $verRelacionBienAbandono[0]['nomval'];
	}
	else
	{
		$RelacionBienAbandono	= $message_empty;
	}

	//Tipo de Familia

	if ($datosdesoyaban[0]['tipfamper']) 
	{
		$verTipoFamilia 		= $ins->get_valor($datosdesoyaban[0]['tipfamper']);
		$TipoFamilia			= $verTipoFamilia[0]['nomval'];
	}
	else
	{
		$TipoFamilia	= $message_empty;
	}

	//Ideal de la Familia

	if ($datosdesoyaban[0]['iderupruv']) 
	{
		$verIdealFamilia 		= $ins->get_valor($datosdesoyaban[0]['iderupruv']);
		$IdealFamilia 			= $verIdealFamilia [0]['nomval'];
	}
	else
	{
		$IdealFamilia 	= $message_empty;
	}

	

	//Lugar en caso de rehubicación

	if ($datosdesoyaban[0]['lugarrehubi']) 
	{
		$verLugarReubicacion	= $ins->getUbicacion($datosdesoyaban[0]['lugarrehubi']);
		$LugarReubicacion = $verLugarReubicacion['ciudad'] . ' - ' . $verLugarReubicacion['departamento']; 
	}
	else
	{
		$LugarReubicacion	= $message_empty;
	}

	//Razon de no retorno

	if ($datosdesoyaban[0]['raznoret']) 
	{
		$verRazonNoRetorno 		= $ins->get_valor($datosdesoyaban[0]['raznoret']);
		$RazonNoRetorno 		= $verRazonNoRetorno[0]['nomval'];
	}
	else
	{
		$RazonNoRetorno 	= $message_empty;
	}


	//Medidas de proteccion

	if ($datosdesoyaban[0]['medprotper']) 
	{
		$verMedidasProteccion 	= $ins->get_valor($datosdesoyaban[0]['medprotper']);
		$MedidasProteccion 		= $verMedidasProteccion[0]['nomval'];
	}
	else
	{
		$MedidasProteccion 	= $message_empty;
	}

	//Indemnizacion

	if ($datosdesoyaban[0]['indunivict']) 
	{
		$verIndemnizacionUV 	= $ins->get_valor($datosdesoyaban[0]['indunivict']);
		$IndemnizacionUV 		= $verIndemnizacionUV[0]['nomval'];
	}
	else
	{
		$IndemnizacionUV	= $message_empty;
	}
	
	//Medidas de proteccion recibidas

	if ($datosdesoyaban[0]['recprotper']) 
	{
		$verMedidasProteccionRecibidas 	= $ins->get_valor($datosdesoyaban[0]['recprotper']);
		$MedidasProteccionRecibidas 	= $verMedidasProteccion[0]['nomval'];
	}
	else
	{
		$MedidasProteccionRecibidas 	= $message_empty;
	}
	//Observaciones

	if ($datosdesoyaban[0]['obsdesper']) 
	{
		$Observaciones	= $datosdesoyaban[0]['obsdesper'];
	}
	else
	{
		$Observaciones 	= $message_empty;
	}



	