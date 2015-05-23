<?php
	include("controlador/conexion.php");
	class mtbvereda
	{
		 function mtbvereda(){} // CRUD - ESTO ES LA C= CREAR
			function insver($nomver,$desubver) // Datos de cada campo
			{			//insper insertar persona
				$sql =  "INSERT INTO tbvereda (nomver,desubver) values ('".$nomver."' , '".$desubver."');"; // es una sola linea
				$this -> cons($sql);
			}
			
		function updver ($codver,$nomver,$desubver) // CRUD - ESTO ES LA U= actualizar
			{
				$sql= "UPDATE tbvereda SET nomver='".$nomver."' , desubver='".$desubver."' where codver='".$codver."' ;";	
				$this-> cons($sql);
			}
		function delver($codver) // CRUD - ESTO ES LA D= eliminar
			{
				$sql= "DELETE FROM tbvereda WHERE codver='".$codver."';";
				$this-> cons($sql);
			}	
		function cons($c)
			{
				$conexionBD= new conexion();   // llama toda la clase llamada conexion de conexion.php
				$conexionBD-> conectarBD(); // asi llame la clase debo especificar lo que deseo llamar en este caso conectarBD y ejecon
				$conexionBD-> ejecon($c,1); 
			}	
		function selver() 
			{
				$sql= "SELECT * FROM tbvereda;"; // para seleccionar todos los datos de la consulta sql se utiliza * , si quiero algo especifico llamo solo los datos ej: nombre etc
				$conexionBD= new conexion();
				$conexionBD-> conectarBD();
				$datos=$conexionBD-> ejecon($sql,0);
				return $datos;
			}
		function selver1($codver) 
			{
				$sql= "SELECT * FROM tbvereda WHERE codver='".$codver."' ;"; 
				$conexionBD= new conexion();
				$conexionBD-> conectarBD()	;
				$datos=$conexionBD-> ejecon($sql,0);
				return $datos;
			}
	}		
?>