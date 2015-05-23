<?php
	include("/controlador/conexion.php");
	class mtbhechosvict {
		function mtbhechosvict() {}
		function inshec($nomhec, $deshec) {
			$sql = "INSERT INTO tbhechosvict (nomhec, deshec) VALUES ('".$nomhec."','".$deshec."');";
			$this -> cons($sql);
		}
		function updhec($codhec, $nomhec, $deshec) {
			$sql = "UPDATE tbhechosvict SET nomhec = '".$nomhec."',deshec = '".$deshec."' WHERE codhec = '".$codhec."';";
			$this -> cons($sql);
		}
		function delhec($codhec) {
			$sql = "DELETE FROM tbhechosvict WHERE codhec = '".$codhec."';";
			$this -> cons($sql);
		}
		function cons ($c) {
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$conexionBD -> ejeCon($c, 1);
		}
		function selhec() {
			$sql = "SELECT * FROM tbhechosvict;";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function selhec1($codhec) {
			$sql = "SELECT * FROM tbhechosvict WHERE codhec = '".$codhec."';";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
	}
?>