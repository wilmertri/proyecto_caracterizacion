<?php
	include("/controlador/conexion.php");
	class mtbfactoresvict {
		function mtbfactoresvict() {}
		function insfac($nomfactor, $desfactor) {
			$sql = "INSERT INTO tbfactoresvict (nomfactor, desfactor) VALUES ('".$nomfactor."','".$desfactor."');";
			$this -> cons($sql);
		}
		function updfac($codfac, $nomfactor, $desfactor) {
			$sql = "UPDATE tbfactoresvict SET nomfactor = '".$nomfactor."',desfactor = '".$desfactor."' WHERE codfac = '".$codfac."';";
			$this -> cons($sql);
		}
		function delfac($codfac) {
			$sql = "DELETE FROM tbfactoresvict WHERE codfac = '".$codfac."';";
			$this -> cons($sql);
		}
		function cons ($c) {
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$conexionBD -> ejeCon($c, 1);
		}
		function selfac() {
			$sql = "SELECT * FROM tbfactoresvict;";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function selfac1($codfac) {
			$sql = "SELECT * FROM tbfactoresvict WHERE codfac = '".$codfac."';";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
	}
?>