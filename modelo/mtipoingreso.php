<?php
include ("controlador/conexion.php");
include ("functions.php");
class mtipoingreso extends Funciones_generales{
	var $arr;
	function mtipoingreso(){}
	
	function instip($tiping){
		$sql = "INSERT INTO tbtipoingreso(tipoingreso) VALUES ('".$tiping."');";
		$this->cons($sql);
	}
	function deltip($idtip){
		$sql = "DELETE FROM tbtipoingreso WHERE idtipoingreso ='".$idtip."';";
		$this->cons($sql);
	}
	function updtip($idtip, $tiping){
		$sql = "UPDATE tbtipoingreso SET tipoingreso='".$tiping."' WHERE idtipoingreso='".$idtip."';";
		$this->cons($sql);
	}
	function seltip(){
		$sql = "SELECT idtipoingreso, tipoingreso FROM tbtipoingreso;";
		return $this->SeleccionDatos($sql);
	}
	function seltip1($idtip){
		$sql = "SELECT idtipoingreso, tipoingreso FROM tbtipoingreso WHERE idtipoingreso='".$idtip."';";
		return $this->SeleccionDatos($sql);
	}
}
?>