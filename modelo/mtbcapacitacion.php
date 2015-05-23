<?php
	include("controlador/conexion.php");
	class mtbcapacitacion
	{
		 function mtbcapacitacion(){} // CRUD - ESTO ES LA C= CREAR
			function inscap($nomcap,$entcap,$titcap, $per) // Datos de cada campo
			{			//insper insertar persona
				$sql =  "INSERT INTO tbcapacitacion (numdocper,nomcap,entcap,titcap) values ('".$per."','".$nomcap."' , '".$entcap."' , '".$titcap."');"; // es una sola linea
				$this -> cons($sql);
			}
			
		function updcap ($codcapper,$nomcap,$entcap,$titcap) // CRUD - ESTO ES LA U= actualizar
			{
				$sql= "UPDATE tbcapacitacion SET nomcap='".$nomcap."' , entcap='".$entcap."' , titcap='".$titcap."' where codcapper='".$codcapper."' ;";	
				$this-> cons($sql);
			}
		function delcap($codcapper) // CRUD - ESTO ES LA D= eliminar
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
		function selcap() 
			{
				$sql= "SELECT * FROM tbcapacitacion;"; // para seleccionar todos los datos de la consulta sql se utiliza * , si quiero algo especifico llamo solo los datos ej: nombre etc
				$conexionBD= new conexion();
				$conexionBD-> conectarBD();
				$datos=$conexionBD-> ejecon($sql,0);
				return $datos;
			}
		function selcap1($numdoc) 
			{
				$sql= "SELECT * FROM tbcapacitacion WHERE numdocper = '".$numdoc."';";
				$conexionBD= new conexion();
				$conexionBD-> conectarBD()	;
				$datos=$conexionBD-> ejecon($sql,0);
				return $datos;
			}
		function selcap2($codcap) 
			{
				$sql= "SELECT * FROM tbcapacitacion WHERE codcapper = '".$codcap."';";
				$conexionBD= new conexion();
				$conexionBD-> conectarBD()	;
				$datos=$conexionBD-> ejecon($sql,0);
				return $datos;
			}
	}		
?>		