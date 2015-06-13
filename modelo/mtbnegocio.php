<?php
	include("controlador/conexion.php");
	include ("functions.php");
	class mtbnegocio extends Funciones_generales{
		function mtbnegocio() {}
		
		/*
		 *	Función para obetner los nombres de los valores	
	     */ 
		function get_valor($codval)
		{
			return $this->mostrar_nombre_valores($codval);
		}
                        
        /*
		 *	Función para obtener duracion del negocio
	     */                
		function get_duracion()
		{
			return $this->seleccionar_valores_de_parametro(39);
		}
		 /*
		 *	Función para obtener actividad del negocio
	     */ 
		function get_actividad()
		{
			return $this->seleccionar_valores_de_parametro(24);
		}
		
		function insneg($idpersona, $labneg, $tipneg, $durneg, $dirneg, $negactper) {
			$sql = "INSERT INTO tbnegocio (idpersona, labneg, tipneg, durneg, dirneg, negactper) VALUES ('".$idpersona."','".$labneg."','".$tipneg."','".$durneg."','".$dirneg."','".$negactper."');";
			$this -> cons($sql);
		}
		function updneg($codnegper, $labneg, $tipneg, $durneg, $dirneg, $negactper) {
			$sql = "UPDATE tbnegocio SET labneg = '".$labneg."',tipneg = '".$tipneg."' , durneg = '".$durneg."', dirneg = '".$dirneg."', negactper = '".$negactper."' WHERE codnegper = '".$codnegper."';";
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