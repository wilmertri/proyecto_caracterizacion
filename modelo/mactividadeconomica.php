<?php
	/*
	 *	@author: 
	 *	@Version: 
	 */
	include ("controlador/conexion.php");
	include("functions.php");
	class Mactividadeconomica extends Funciones_generales {
            
                
		function Mactividadeconomica()
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
		 *	Función para obtener la ocupacion actual
	     */
	                     
		function get_ocupacion()
		{
			return $this->seleccionar_valores_de_parametro(31);
		}

		/*
		 *	Función para la actualización de los datos de la actividad economica de la persona
		 */
		function actu_datos_actividad($numpercar, $ocuperact, $trabper, $ingmenper, $idpersona)
		{
			$sql = "UPDATE tbdatospersona SET numpercar='$numpercar', ocuperact='$ocuperact', trabajoper='$trabper', ingmenper='$ingmenper' WHERE idpersona = '$idpersona'";
			$this->cons($sql);
		}

        /*
    	 *	Función para retornar los datos de la actividad economica	
         */

        function ver_datos_actividad($idpersona)
		{
			$sql = "SELECT numpercar, ocuperact, trabajoper, ingmenper FROM tbdatospersona WHERE idpersona = $idpersona";			
            return $this->SeleccionDatos($sql);
		}
		
	} 
?>