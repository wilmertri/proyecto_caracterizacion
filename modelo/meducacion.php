  <?php
	include("controlador/conexion.php");
	include ("functions.php");
	class meducacion extends Funciones_generales
	{
		 function meducacion(){} // CRUD - ESTO ES LA C= CREAR
		
		function get_valor($codval)
		{
			return mostrar_nombre_valores($codval);
		}
		function get_nivel_educativo_alcanzado()
		   {
			return $this->seleccionar_valores_de_parametro(4);
		   }	
		function get_titulo_obtenido()
			{
			$sql = "SELECT * FROM tbprofesion";
			return $this->SeleccionDatos($sql);
			}
		
        function get_matriculado()
		   {
			return $this->seleccionar_valores_de_parametro(25);
		   }
		function get_asistencia_estudios()
			{
			$sql = "SELECT * FROM tbopcionnomatricula";
            return $this->SeleccionDatos($sql);
			}
		function get_termino_curso_anterior()
		   {
			return $this->seleccionar_valores_de_parametro(25);
		   }
			
		function actu_datos_educacion ($ultgra,$titobtper,$matriper,$nomatriper,$termcurant,$idpersona)
			{
				$sql= "UPDATE tbdatospersona SET ultgracurper='".$ultgra."' , titobtper='".$titobtper."' , matriper='".$matriper."',nomatriper='".$nomatriper."' , termcurant='".$termcurant."' where idpersona='".$idpersona."' ;";	
				$this-> cons($sql);
			}
		function ver_datos_educacion($idpersona)
			{
				$sql = "SELECT ultgracurper, titobtper, matriper, nomatriper, termcurant FROM tbdatospersona WHERE idpersona = $idpersona";			
            return $this->SeleccionDatos($sql);
			}		   
		
	}		
?>		