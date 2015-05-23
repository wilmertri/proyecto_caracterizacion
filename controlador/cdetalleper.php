<?php
	include ("modelo/mdatospersona.php");
	$ins = new mdatospersona();
	
	$id = isset($_GET["id"]) ? $_GET["id"]:NULL;

	$dato1 				= $ins->selper1($id);


	if ($dato1[0]['numficha']) 
	{
		$Ficha			= $dato1[0]['numficha'];
	}
	else
	{
		$Ficha			= "Sin registro";
	}

	if ($dato1[0]['numdocper']) 
	{
		$Doc			= $dato1[0]['numdocper'];
	}
	else
	{
		$Doc	= "Sin registro";
	}

	if ($dato1[0]['tipdocper']) 
	{
		$verTipDoc		= $ins->get_valor($dato1[0]['tipdocper']);
		$TipDoc 		= $verTipDoc[0]['nomval'];
	}
	else
	{
		$TipDoc = "Sin registro";
	}

	if ($dato1[0]['lugexpdocper']) 
	{
		$verExpDoc		= $ins->ubi($dato1[0]['lugexpdocper']);
		$ExpDoc 		= $verExpDoc[0]['nomubi'];	
	}
	else
	{
		$ExpDoc = "Sin registro";
	}
	
	if ($dato1[0]['pnomper']) 
	{
		$PrimerNom		= $dato1[0]['pnomper'];
	}
	else
	{
		$PrimerNom = "Sin registro";
	}

	if ($dato1[0]['snomper']) 
	{
		$SegundoNom		= $dato1[0]['snomper'];
	}
	else
	{
		$SegundoNom = "Sin registro";
	}

	if ($dato1[0]['papeper']) 
	{
		$PrimerApe	= $dato1[0]['papeper'];
	}
	else
	{
		$PrimerApe = "Sin registro";
	}

	if ($dato1[0]['sapeper']) 
	{
		$SegundoApe	= $dato1[0]['sapeper'];
	}
	else
	{
		$SegundoApe = "Sin registro";
	}   

	if ($dato1[0]['genper']) 
	{
		$verGenero			= $ins->get_valor($dato1[0]['genper']);
		$Genero			= $verGenero[0]['nomval'];	
	}
	else
	{
		$Genero = "Sin registro";
	}
	if ($dato1[0]['dirper']) 
	{
		$Direccion	= $dato1[0]['dirper'];
	}
	else
	{
		$Direccion	= "Sin registro";
	}

	if ($dato1[0]['zonper']) 
	{
		$verZona		= $ins->selzona2($dato1[0]['zonper']);
		$Zona 			= $verZona[0]['nomzona'];
	}
	else
	{
		$Zona	= "Sin registro";
	}

	if ($dato1[0]['verper']) 
	{
		$verVereda		= $ins->selver2($dato1[0]['verper']);
		$Vereda 		= $verVereda[0]['nomver'];
	}
	else
	{
		$Vereda = "Sin registro";
	}

	if ($dato1[0]['secper']) 
	{
		$Sector		= $dato1[0]['secper'];
	}
	else
	{
		$Sector = "Sin registro";
	}
	
	if ($dato1[0]['barfinper']) 
	{
		$BarrioFinca		= $dato1[0]['barfinper'];
	}
	else
	{
		$BarrioFinca = "Sin registro";
	}

	if ($dato1[0]['telper']) 
	{
		$Telefono		= $dato1[0]['telper'];
	}
	else
	{
		$Telefono = "Sin registro";
	}

	if ($dato1[0]['telsegper']) 
	{
		$SegundoTel	= $dato1[0]['telsegper'];
	}
	else
	{
		$SegundoTel = "Sin registro";
	}

	if ($dato1[0]['lugnacper']) 
	{
		$verLugarNac		= $ins->ubi($dato1[0]['lugnacper']);
		$LugarNac 		= $verLugarNac[0]['nomubi'];	
	}
	else
	{
		$LugarNac = "Sin registro";
	}   

	if ($dato1[0]['fecnacper']) 
	{
		$FechaNac		= $dato1[0]['fecnacper'];
	}
	else
	{
		$FechaNac = "Sin registro";
	}
	if ($dato1[0]['estcivper']) 
	{
		$verEstadoCiv		= $ins->get_valor($dato1[0]['estcivper']);
		$EstadoCiv 		= $verEstadoCiv[0]['nomval'];
	}
	else
	{
		$EstadoCiv = "Sin registro";
	}

	if ($dato1[0]['etniaper']) 
	{
		$verEtnia		= $ins->get_valor($dato1[0]['etniaper']);
		$Etnia 		= $verEtnia[0]['nomval'];	
	}
	else
	{
		$Etnia = "Sin registro";
	}
	
	if ($dato1[0]['geslanper']) 
	{
		$verGestante		= $ins->get_valor($dato1[0]['geslanper']);
		$Gestante 		= $verGestante[0]['nomval'];	
	}
	else
	{
		$Gestante = "Sin registro";
	}

	if ($dato1[0]['hijosacargo']) 
	{
		$verHijosCargo		= $ins->get_valor($dato1[0]['hijosacargo']);
		$HijosCargo 		= $verHijosCargo[0]['nomval'];	
	}
	else
	{
		$HijosCargo = "Sin registro";
	}

	if ($dato1[0]['relsexper']) 
	{
		$verRelaciones		= $ins->get_valor($dato1[0]['relsexper']);
		$Relaciones 		= $verRelaciones[0]['nomval'];	
	}
	else
	{
		$Relaciones = "Sin registro";
	}

	if ($dato1[0]['libretmil']) 
	{
		$verLibreta		= $ins->get_valor($dato1[0]['libretmil']);
		$Libreta 		= $verLibreta[0]['nomval'];	
	}
	else
	{
		$Libreta = "Sin registro";
	}   

	if ($dato1[0]['tramlibretmil']) 
	{
		$verTramiteLibreta			= $ins->get_valor($dato1[0]['tramlibretmil']);
		$TramiteLibreta 			= $verTramiteLibreta[0]['nomval'];	
	}
	else
	{
		$TramiteLibreta = "Sin registro";
	}
	if ($dato1) 
	{
		$edad = $ins->get_calcular_edad($dato1[0]['fecnacper']);
	}
	else
	{
		$edad = "Sin registro";
	}
	 