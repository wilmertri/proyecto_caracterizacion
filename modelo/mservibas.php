<?php
	include("controlador/conexion.php");
	class mservibas {
		function mservibas() {}
		function insper($descsb) {
			$sql = "INSERT INTO tbservibas (desservbas) VALUES ('".$descsb."');";
			$this -> cons($sql);
		}
		function updper($codsb, $descsb) {
			$sql = "UPDATE tbservibas SET desservbas = '".$descsb."' WHERE codservbas = '".$codsb."';";
			$this -> cons($sql);
		}
		function delper($doc) {
			$sql = "DELETE FROM tbservibas WHERE codservbas = '".$codsb."';";
			$this -> cons($sql);
		}
		function cons ($c) {
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$conexionBD -> ejeCon($c, 1);
		}
		function selper() {
			$sql = "SELECT * FROM tbservibas;";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function selper1($codsb) {
			$sql = "SELECT * FROM tbservibas WHERE codservbas= '".$codsb."';";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
	}
?>