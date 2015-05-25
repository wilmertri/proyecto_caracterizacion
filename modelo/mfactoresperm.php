<?php
	include("/controlador/conexion.php");
	include("functions.php");


	class mtbfactoresvict extends Funciones_generales{
		
		function mtbfactoresvict() {}

		/*
		 *	Función para insertar los factores de permanencia en el municipio
		 */

		function insfac($nomfactor) 
		{
			$sql = "INSERT INTO tbfactvive (nomfact) VALUES ('".$nomfactor."');";
			$this -> cons($sql);
		}

		function updfac($idfactor, $nomfactor) 
		{
			$sql = "UPDATE tbfactvive SET nomfact = '".$nomfactor."' WHERE idfactor = '".$idfactor."';";
			$this -> cons($sql);
		}

		/*
		 *	Función para consultar los factores de permanencia en el municipio
		 */

		function selfac() 
		{
			$sql = "SELECT * FROM tbfactvive;";
			return $this->SeleccionDatos($sql);
		}

		/*
		 *	Función para consultar un factor de permanencia segun su id
		 */

		function selfac1($codfac) 
		{
			$sql = "SELECT * FROM tbfactvive WHERE idfactor = '".$codfac."';";
			return $this->SeleccionDatos($sql);
		}

		/*
		 *	Función para insertar los factores de permanencia en el municipio de la persona
		 */

		function insfacxper($idfactor, $idpersona) 
		{
			$sql = "INSERT INTO tbperfac (idpersona, idfactores) VALUES ('$idpersona','$idfactor');";
			$this -> cons($sql);
		}

		/*
		 *	Función para consultar los factores de permanencia de la persona
		 */

		function selfacxper() 
		{
			$sql = "SELECT * FROM tbperfac;";
			return $this->SeleccionDatos($sql);
		}

		/*
		 *	Función para consultar un factor de permanencia segun su id
		 */

		function selfacxper1($codfac) 
		{
			$sql = "SELECT * FROM tbfactvive WHERE idfactor = '".$codfac."';";
			return $this->SeleccionDatos($sql);
		}

		/*
		 *	Función para consultar el nombre del factor de permanencia escogido por la persona
		 */

		function selfacxper2($codfac) 
		{
			$sql = "SELECT nomfact FROM tbfactvive WHERE idfactor = '".$codfac."';";
			return $this->SeleccionDatos($sql);
		}
	}
?>