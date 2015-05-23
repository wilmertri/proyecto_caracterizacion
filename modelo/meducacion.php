  <?php
	include("controlador/conexion.php");
	class meducacion
	{
		 function meducacion(){} // CRUD - ESTO ES LA C= CREAR
			
			
		function updedu ($idpersona,$ultgra,$titobt,$mat,$razest,$terest) // CRUD - ESTO ES LA U= actualizar
			{
				$sql= "UPDATE tbdatospersona SET ultracurper='".$ultgra."' , titobtper='".$titobt."' , matriper='".$mat."',nomatriper='".$razest."' , termcurant='".$terest."' where idpersona='".$idpersona."' ;";	
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