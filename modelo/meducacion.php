  <?php
	/*
	 *	@author: 
	 *	@Version: 
	 */
	include ("controlador/conexion.php");
	include ("functions.php");
	class Meducacion extends Funciones_generales{
		
		function Meducacion(){}
		
		/*
		 *	Función para obetner los nombres de los valores	
	     */ 
		function get_valor($codval)
		{
			return $this->mostrar_nombre_valores($codval);
		}
		
		/*
		 *	Función para obtener el nivel educativo
	     */
		function get_nivel_educativo_alcanzado()
		   {
			return $this->seleccionar_valores_de_parametro(4);
		   }
		
		/*
		 *	Función para obtener el titulo obtenido de la tabla tbprofesion
	     */
		function get_titulo_obtenido()
		{
			$sql = "SELECT * FROM tbprofesion";
			return $this->SeleccionDatos($sql);
		}
		
		/*
		 *	Función para obtener la opcion de matricula
	     */
        function get_matriculado()
		{
			return $this->seleccionar_valores_de_parametro(24);
		}
		
		/*
		 *	Función para obtener la opcion de nomatricula de la tabla tbopcionmatricula
	     */
		function get_asistencia_estudios()
		{
			$sql = "SELECT * FROM tbopcionnomatricula";
            return $this->SeleccionDatos($sql);
		}
		
		/*
		 *	Función para obtener curso anterior
	     */
		function get_termino_curso_anterior()
	    {
			return $this->seleccionar_valores_de_parametro(25);
		}
		
		/*
		 *	Función para la actualización de los datos de la educacion de la persona
		 */
		function actu_datos_educacion ($ultgra,$titobtper,$matriper,$nomatriper,$termcurant,$idpersona)
		{
			$sql = "UPDATE tbdatospersona SET ultgracurper='$ultgra', titobtper='$titobtper', matriper='$matriper', nomatriper='$nomatriper', termcurant='$termcurant' WHERE idpersona = '$idpersona'";
			$this-> cons($sql);
		}
		
		/*
    	 *	Función para retornar los datos de la educacion	
         */
		function ver_datos_educacion($idpersona)
		{
			$sql = "SELECT ultgracurper, titobtper, matriper, nomatriper, termcurant FROM tbdatospersona WHERE idpersona = $idpersona";			
            return $this->SeleccionDatos($sql);
		}		   
		
	}		
?>		