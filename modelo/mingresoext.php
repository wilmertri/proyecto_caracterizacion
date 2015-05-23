<?php
	include("controlador/conexion.php");
	include ("functions.php");
	class mingresoext extends Funciones_generales{
		function mingresoext() {}
		function insingext($tipingext, $ingext, $desingext, $idpersona) {
			$sql = "INSERT INTO tbingresoext (idpersona, tipingext, ingext, desingext) VALUES ('".$idpersona."','".$tipingext."','".$ingext."','".$desingext."');";
			$this -> cons($sql);
		}
		function updingext($codingext, $tipingext, $ingext, $desingext) {
			$sql = "UPDATE tbingresoext SET tipingext='".$tipingext."',ingext ='".$ingext."',desingext='".$desingext."' WHERE codingext = '".$codingext."';";
			$this -> cons($sql);
		}
		function delingext($doc) {
			$sql = "DELETE FROM tbingresoext WHERE codingext = '".$codingext."';";
			$this -> cons($sql);
		}
		function selingext() {
			$sql = "SELECT codingext, tipingext, ingext, desingext FROM tbingresoext;";
			return $this->SeleccionDatos($sql);
		}
		function selingext1($codingext) {
			$sql = "SELECT * FROM tbingresoext WHERE codingext='".$codingext."' ;";
			return $this->SeleccionDatos($sql);
		}
		function selingext2($idpersona) {
			$sql = "SELECT * FROM tbingresoext WHERE idpersona='".$idpersona."' ;";
			return $this->SeleccionDatos($sql);
		}
		function seltip(){
			$sql = "SELECT idtipoingreso, tipoingreso FROM tbtipoingreso;";
			return $this->SeleccionDatos($sql);
		}
		function seltip1($val){
			$sql = "SELECT idtipoingreso, tipoingreso FROM tbtipoingreso WHERE idtipoingreso='".$val."';";
			return $this->SeleccionDatos($sql);
		}
	}
?>