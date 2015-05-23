  <?php
	include("controlador/conexion.php");
	include ("functions.php");
	class mprofesion extends Funciones_generales
	{
		 function mprofesion(){} // CRUD - ESTO ES LA C= CREAR
		 
		 function insprof ($nombreprof) 
		    $sql= "INSERT INTO tbprofesion(nombreprof) VALUES ('".$nombreprof."');";
			$this-> cons($sql);
			
		function updedu ($idprofesion,$nombreprof) // CRUD - ESTO ES LA U= actualizar
			{
				$sql= "UPDATE tbprofesion SET nombreprof='".$nombreprof."' WHERE idprofesion='".$idprofesion."';";
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