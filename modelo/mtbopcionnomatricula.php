<?php
	include("controlador/conexion.php");
	include ("functions.php");
	class Mopcionnomatricula extends Funciones_generales{
		
		function Mopcionnomatricula() {}
		function insopcion($opcion) {
			$sql = "INSERT INTO tbopcionnomatricula (opcion) VALUES ('".$opcion."');";
			$this -> cons($sql);
		}
		function updopcion($idopcion, $opcion) {
			$sql = "UPDATE tbopcionnomatricula SET opcion = '".$opcion."' WHERE idtbopcionnomatricula = '".$idopcion."';";
			$this -> cons($sql);
		}
		function delopcion($idopcion) {
			$sql = "DELETE FROM tbopcionnomatricula WHERE idtbopcionnomatricula = '".$idopcion."';";
			$this -> cons($sql);
		}
		function selopcion() {
			$sql = "SELECT * FROM tbopcionnomatricula;";
			return $this->SeleccionDatos($sql);
		}
		function selopcion1($idopcion) {
			$sql = "SELECT * FROM tbopcionnomatricula WHERE idtbopcionnomatricula= '".$idopcion."';";
			return $this->SeleccionDatos($sql);
		}
	}
?>