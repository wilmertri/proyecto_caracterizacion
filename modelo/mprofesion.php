  <?php
	include("controlador/conexion.php");
	include ("functions.php");
	class mprofesion extends Funciones_generales
	{
		 function mprofesion(){} // CRUD - ESTO ES LA C= CREAR
		 
		 function insprof ($nombreprof) 
		    $sql= "INSERT INTO tbprofesion(nombreprof) VALUES ('".$nombreprof."');";
			$this-> cons($sql);
			
		function updprof ($idprofesion,$nombreprof) // CRUD - ESTO ES LA U= actualizar
			{
				$sql= "UPDATE tbprofesion SET nombreprof='".$nombreprof."' WHERE idprofesion='".$idprofesion."';";
				$this-> cons($sql);
			}
		function delprof($idprofesion) // CRUD - ESTO ES LA D= eliminar
			{
				$sql= "DELETE FROM tbprofesion WHERE idprofesion='".$idprofesion."';";
				$this-> cons($sql);
			}	
		function selprof() 
		{
			    $sql = "SELECT * FROM tbprofesion;";
				return $this->SeleccionDatos($sql);
		}
		
		function selprof1($idprofesion) 
		{
			    $sql = "SELECT * FROM tbprofesion WHERE idprofesion= '".$idprofesion"';";
				return $this->SeleccionDatos($sql);
		}
		
	}		
?>		