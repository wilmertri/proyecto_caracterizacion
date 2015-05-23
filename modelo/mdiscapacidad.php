<?php
	include("controlador/conexion.php");
	class mdiscapacidad {
		
		function mdiscapacidad() {}
		function insdisper($tipodis) {
			$sql = "INSERT INTO tbtipodiscapacidad (nomtipodis) VALUES ('".$tipodis."');";
			$this -> cons($sql);
		}
		function upddisper($idtipodis, $tipdis) {
			$sql = "UPDATE tbtipodiscapacidad SET nomtipodis = '".$tipodis."' WHERE idtipodis = '".$idtipodis."';";
			$this -> cons($sql);
		}
		function deldisper($idtipodis) {
			$sql = "DELETE FROM tbtipodiscapacidad WHERE idtipodis = '".$idtipodis."';";
			$this -> cons($sql);
		}
		function cons ($c) {
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$conexionBD -> ejeCon($c, 1);
		}
		function seldisper() {
			$sql = "SELECT * FROM tbtipodiscapacidad;";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function seldisper1($idtipodis) {
			$sql = "SELECT * FROM tbtipodiscapacidad WHERE idtipodis= '".$idtipodis."';";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
	}
?>