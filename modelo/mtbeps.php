<?php
	include("controlador/conexion.php");
	class mtbeps
	{
		 function mtbeps(){} // CRUD - ESTO ES LA C= CREAR
			function inseps($nomeps,$teleps) // Datos de cada campo
			{			//insper insertar persona
				$sql =  "INSERT INTO tbeps (nomeps,teleps) values ('".$nomeps."' , '".$teleps."');"; // es una sola linea
				$this -> cons($sql);
			}
			
		function updeps ($codeps,$nomeps,$teleps) // CRUD - ESTO ES LA U= actualizar
			{
				$sql= "UPDATE tbeps SET nomeps='".$nomeps."' , teleps='".$teleps."' where codeps='".$codeps."' ;";	
				$this-> cons($sql);
			}
		function deleps($codeps) // CRUD - ESTO ES LA D= eliminar
			{
				$sql= "DELETE FROM tbeps WHERE codeps='".$codeps."';";
				$this-> cons($sql);
			}	
		function cons($c)
			{
				$conexionBD= new conexion();   // llama toda la clase llamada conexion de conexion.php
				$conexionBD-> conectarBD(); // asi llame la clase debo especificar lo que deseo llamar en este caso conectarBD y ejecon
				$conexionBD-> ejecon($c,1); 
			}	
		function seleps() 
			{
				$sql= "SELECT * FROM tbeps;"; // para seleccionar todos los datos de la consulta sql se utiliza * , si quiero algo especifico llamo solo los datos ej: nombre etc
				$conexionBD= new conexion();
				$conexionBD-> conectarBD();
				$datos=$conexionBD-> ejecon($sql,0);
				return $datos;
			}
		function seleps1($codeps) 
			{
				$sql= "SELECT * FROM tbeps WHERE codeps='".$codeps."' ;"; 
				$conexionBD= new conexion();
				$conexionBD-> conectarBD()	;
				$datos=$conexionBD-> ejecon($sql,0);
				return $datos;
			}
	}		
?>				
			
			