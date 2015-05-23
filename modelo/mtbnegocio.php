<?php
	include("controlador/conexion.php");
	include ("functions.php");
	class mtbnegocio extends Funciones_generales{
		function mtbnegocio() {}
		function insneg($labneg, $tipneg, $durneg, $dirneg, $idpersona) {
			$sql = "INSERT INTO tbnegocio (idpersona, labneg, tipneg, durneg, dirneg) VALUES ('".$idpersona."','".$labneg."','".$tipneg."','".$durneg."','".$dirneg."');";
			$this -> cons($sql);
		}
		function updneg($codnegper, $labneg, $tipneg, $durneg, $dirneg) {
			$sql = "UPDATE tbnegocio SET labneg = '".$labneg."',tipneg = '".$tipneg."' , durneg = '".$durneg."', dirneg = '".$dirneg."' WHERE codnegper = '".$codnegper."';";
			$this -> cons($sql);
		}
		function delneg($codnegper) {
			$sql = "DELETE FROM tbnegocio WHERE codnegper = '".$codnegper."';";
			$this -> cons($sql);
		}
		function selneg() {
			$sql = "SELECT * FROM tbnegocio;";
			return $this->SeleccionDatos($sql);
		}
		function selneg1($idpersona) {
			$sql = "SELECT * FROM tbnegocio WHERE idpersona = '".$idpersona."';";
			return $this->SeleccionDatos($sql);
		}
		function selneg2($codneg) {
			$sql = "SELECT * FROM tbnegocio WHERE codnegper = '".$codneg."';";
			return $this->SeleccionDatos($sql);
		}
	}
?>