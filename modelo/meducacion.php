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
			
		function updedu ($idpersona,$ultgra,$titobtper,$matriper,$nomatriper,$termcurant) // CRUD - ESTO ES LA U= actualizar
			{
				$sql= "UPDATE tbdatospersona SET ultracurper='".$ultgra."' , titobtper='".$titobtper."' , matriper='".$matriper."',nomatriper='".$nomatriper."' , termcurant='".$termcurant."' where idpersona='".$idpersona."' ;";	
				$this-> cons($sql);
			}
		function deledu($codcapper) // CRUD - ESTO ES LA D= eliminar
			{
				$sql= "DELETE FROM tbcapacitacion WHERE codcapper='".$codcapper."';";
				$this-> cons($sql);
			}	
		function cons($c)
			{
				$conexionBD= new conexion();   // llama toda la clase llamada conexion de conexion.php
				$conexionBD-> conectarBD(); // asi llame la clase debo especificar lo que deseo llamar en este caso conectarBD y ejecon
				$conexionBD-> ejecon($c,1); 
			}	   
		
	}		
?>		