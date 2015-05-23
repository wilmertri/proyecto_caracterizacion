<?php
	/*
	 *	@author: Wilmer Fabian Triana
	 *	@Version: V1
	 */
	include ("controlador/conexion.php");
	include("functions.php");
	class Mdatosvivienda extends Funciones_generales {
            
                
		function Mdatosvivienda()
		{
                    
		}

        /*
		 *	Función para obetner los nombres de los valores	
	     */ 

        function get_valor($codval)
		{
			return $this->mostrar_nombre_valores($codval);
		}
                        
        /*
		 *	Función para obtener los tipos de vivienda
	     */
	                     
		function get_tipo_vivienda()
		{
			return $this->seleccionar_valores_de_parametro(5);
		}

		/*
		 *	Función para obtener los tipos de pisos	
	     */
		
		function get_tipo_pisos()
		{
			return $this->seleccionar_valores_de_parametro(17);
		}

		/*
		 *	Función para obtener los tipos de paredes	
	     */

		function get_tipo_paredes()
		{
			return $this->seleccionar_valores_de_parametro(18);
		}

		/*
		 *	Función para obtener los tipos de riesgos en la zona
	     */

		function get_tipo_riesgos()
		{
			return $this->seleccionar_valores_de_parametro(19);
		}

		/*
		 *	Función para obtener los tipos de techos	
	     */

		function get_tipo_techos()
		{
			return $this->seleccionar_valores_de_parametro(20);
		}

		/*
		 *	Función para obtener el tipo de relación que se tiene con la vivienda	
	     */

		function get_tipo_relacion_viv()
		{
			return $this->seleccionar_valores_de_parametro(21);
		}

		/*
		 *	Función para obtener los valores de estrato
	     */

		function get_estrato_vivienda()
		{
			return $this->seleccionar_valores_de_parametro(22);
		}

		/*
		 *	Función para la actualización de los datos de la vivienda de la persona
		 */
		function actu_datos_vivienda($tipovivienda, $tipoparedes, $tipopisos, $tipotechos, $zonariesgo, $tiporelacion, $numhabviv, $numhabhab, $numperhabviv, $estrato, $idpersona)
		{
			$sql = "UPDATE tbdatospersona SET tipvivper='$tipovivienda', tipparviv='$tipoparedes', tippisviv='$tipopisos', tiptecviv='$tipotechos', zonrieviv='$zonariesgo', tiprelviv='$tiporelacion', numhabviv='$numhabviv', numhabhab='$numhabhab', numperhabviv='$numperhabviv', estper='$estrato' WHERE idpersona = '$idpersona'";
			$this->cons($sql);
		}

        /*
    	 *	Función para retornar los datos de la vivienda	
         */

        function ver_datos_vivienda($idpersona)
		{
			$sql = "SELECT tipvivper, tipparviv, tippisviv, tiptecviv, zonrieviv, tiprelviv, numhabviv, numhabhab, numperhabviv, estper FROM tbdatospersona WHERE idpersona = $idpersona";			
            return $this->SeleccionDatos($sql);
		}

		/*
		 *	Función obtener los servicios basicos	
	     */

		function get_servicios_basicos()
		{
			$sql = "SELECT codservbas, desservbas FROM tbservibas ORDER BY desservbas;";
			return $this->SeleccionDatos($sql);
		}

		/*
		 *	Función obtener los id de los servicios basicos de una persona	
	     */

		function get_servicios_basicos_id($idpersona)
		{
			$sql = "SELECT numservbas FROM tbservper WHERE idpersona = '$idpersona';";
			return $this->SeleccionDatos($sql);
		}

		/*
		 *	Función obtener los nombres de los servicios basicos de una persona	
	     */

		function get_nombre_servicios_basicos($idservibas)
		{
			$sql = "SELECT desservbas FROM tbservibas WHERE codservbas = '$idservibas';";
			return $this->SeleccionDatos($sql);
		}

		/*
		 *	Función actualizar los servicios basicos	
	     */

		function actu_servicios_basicos($idpersona, $numservbas)
		{
			$sql= "INSERT INTO tbservper (idpersona, numservbas) VALUES ('".$idpersona."','".$numservbas."');";
			$this -> cons($sql);
		}
		
	} 
 