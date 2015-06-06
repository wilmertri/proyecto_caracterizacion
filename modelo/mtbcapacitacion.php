<?php
	include("controlador/conexion.php");
	include ("functions.php");
	class Mcapacitacion extends Funciones_generales{
		 
		 function Mcapacitacion(){}
			function inscap($nomcap, $entcap, $titcapper, $opicapper, $newopicapper, $idpersona) 
			{	
				$sql =  "INSERT INTO tbcapacitacion (idpersona,nomcap,entcap,titcapper,opicapper,newopicapper) values ('".$idpersona."','".$nomcap."' , '".$entcap."' , '".$titcapper."','".$opicapper."' , '".$newopicapper."');";
				$this -> cons($sql);
			}
			
		function updcap ($codcapper,$nomcap,$entcap,$titcapper, $opicapper, $newopicapper)
			{
				$sql= "UPDATE tbcapacitacion SET nomcap='".$nomcap."' , entcap='".$entcap."' , titcapper='".$titcapper."', opicapper='".$opicapper."' , newopicapper='".$newopicapper."' where codcapper='".$codcapper."' ;";	
				$this-> cons($sql);
			}
		function delcap($codcapper) // CRUD - ESTO ES LA D= eliminar
			{
				$sql= "DELETE FROM tbcapacitacion WHERE codcapper='".$codcapper."';";
				$this-> cons($sql);
			}	
		function selcap() 
			{
				$sql= "SELECT * FROM tbcapacitacion;";
				return $this->SeleccionDatos($sql);
			}
		function selcap1($idpersona) 
			{
				$sql= "SELECT * FROM tbcapacitacion WHERE idpersona = '".$idpersona."';";
				return $this->SeleccionDatos($sql);
			}
		function selcap2($codcapper) 
			{
				$sql= "SELECT * FROM tbcapacitacion WHERE codcapper = '".$codcapper."';";
				return $this->SeleccionDatos($sql);
			}
	}		
?>		