<?php
	include("controlador/conexion.php");
	class mtbzona
	{
		 function mtbzona(){} // CRUD - ESTO ES LA C= CREAR
			function inszona($nomzona,$deszona) // Datos de cada campo
			{			//insper insertar persona
				$sql =  "INSERT INTO tbzona (nomzona,deszona) values ('".$nomzona."' , '".$deszona."');"; // es una sola linea
				$this -> cons($sql);
			}
			
		function updzona ($codzona,$nomzona,$deszona) // CRUD - ESTO ES LA U= actualizar
			{
				$sql= "UPDATE tbzona SET nomzona='".$nomzona."' , deszona='".$deszona."' where codzona='".$codzona."' ;";	
				$this-> cons($sql);
			}
		function delzona($codzona) // CRUD - ESTO ES LA D= eliminar
			{
				$sql= "DELETE FROM tbzona WHERE codzona='".$codzona."';";
				$this-> cons($sql);
			}	
		function cons($c)
			{
				$conexionBD= new conexion();   // llama toda la clase llamada conexion de conexion.php
				$conexionBD-> conectarBD(); // asi llame la clase debo especificar lo que deseo llamar en este caso conectarBD y ejecon
				$conexionBD-> ejecon($c,1); 
			}	
		function selzona() 
			{
				$sql= "SELECT * FROM tbzona;"; // para seleccionar todos los datos de la consulta sql se utiliza * , si quiero algo especifico llamo solo los datos ej: nombre etc
				$conexionBD= new conexion();
				$conexionBD-> conectarBD();
				$datos=$conexionBD-> ejecon($sql,0);
				return $datos;
			}
		function selzona1($codzona) 
			{
				$sql= "SELECT * FROM tbzona WHERE codzona='".$codzona."' ;"; 
				$conexionBD= new conexion();
				$conexionBD-> conectarBD()	;
				$datos=$conexionBD-> ejecon($sql,0);
				return $datos;
			}
	}		
?>