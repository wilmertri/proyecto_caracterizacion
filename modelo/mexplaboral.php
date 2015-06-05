<?php
	include("controlador/conexion.php");
	include ("functions.php");
	class mexplaboral extends Funciones_generales{
		
		function mexplaboral() {}
		function insexpper($labexp, $desexp, $ingexp, $idpersona) {
			$sql = "INSERT INTO tbexplaboral (idpersona, labexp, desexp, ingexp) VALUES ('".$idpersona."','".$labexp."','".$desexp."','".$ingexp."');";
			$this -> cons($sql);
		}
		function updexpper($codexp, $labexp, $desexp, $ingexp) {
			$sql = "UPDATE tbexplaboral SET labexp = '".$labexp."', desexp = '".$desexp."', ingexp = '".$ingexp."' WHERE codexplab = '".$codexp."';";
			$this -> cons($sql);
		}
		function delexpper($codexp) {
			$sql = "DELETE FROM tbexplaboral WHERE codexplab = '".$codexp."';";
			$this -> cons($sql);
		}
		function selexpper() {
			$sql = "SELECT * FROM tbexplaboral;";
			return $this->SeleccionDatos($sql);
		}
		function selexpper1($codexp) {
			$sql = "SELECT * FROM tbexplaboral WHERE codexplab= '".$codexp."';";
			return $this->SeleccionDatos($sql);
		}
		function selexpper2($idpersona) {
			$sql = "SELECT * FROM tbexplaboral WHERE idpersona= '".$idpersona."';";
			return $this->SeleccionDatos($sql);
		}
	}
?>