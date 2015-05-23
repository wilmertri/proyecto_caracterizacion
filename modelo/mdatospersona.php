<?php
	include("controlador/conexion.php");
	include ("functions.php");
	class mdatospersona extends Funciones_generales{
		
		function mdatospersona() {}
		function get_valor($codval)
		{
			return $this->mostrar_nombre_valores($codval);
		}
		function get_documento()
		{
			return $this->seleccionar_valores_de_parametro(1);
		}
		function get_genero()
		{
			return $this->seleccionar_valores_de_parametro(2);
		}
		function get_estciv()
		{
			return $this->seleccionar_valores_de_parametro(3);
		}
		function get_etnia()
		{
			return $this->seleccionar_valores_de_parametro(10);
		}
		function get_estado_embarazo()
		{
			return $this->seleccionar_valores_de_parametro(11);
		}
		function get_hijos_a_cargo()
		{
			return $this->seleccionar_valores_de_parametro(24);
		}
		function get_relaciones()
		{
			return $this->seleccionar_valores_de_parametro(28);
		}
		function get_libreta_militar()
		{
			return $this->seleccionar_valores_de_parametro(27);
		}
		function get_exencion()
		{
			return $this->seleccionar_valores_de_parametro(25);
		}

		function insper($numficha,$docper, $tipdoc1, $lugexpdoc1, $pnom, $snom, $pape, $sape, $gen, $dir, $zon, $ver, $sec, $barfin, $tel, $telseg, $lugnac1, $fecnac, $estciv, $etnia, $ges, $hijosacargo, $relsexper, $libretmil, $tramlibretmil) {
			$sql = "INSERT INTO tbdatospersona ( numficha, numdocper, tipdocper, lugexpdocper, pnomper, snomper, papeper, sapeper, genper, dirper, zonper, verper, secper, barfinper, telper, telsegper, lugnacper, fecnacper, estcivper, etniaper, geslanper, hijosacargo, relsexper, libretmil, tramlibretmil ) VALUES ('".$numficha."','".$docper."','".$tipdoc1."','".$lugexpdoc1."','".$pnom."', 
			'".$snom."','".$pape."','".$sape."','".$gen."','".$dir."','".$zon."','".$ver."','".$sec."','".$barfin."',
			'".$tel."','".$telseg."','".$lugnac1."','".$fecnac."','".$estciv."','".$etnia."','".$ges."','".$hijosacargo."','".$relsexper."','".$libretmil."','".$tramlibretmil."');";
			$this->cons($sql);
		}
		function updper($idpersona, $numficha, $docper, $tipdoc1, $lugexpdoc1, $pnom, $snom, $pape, $sape, $gen, $dir, $zon, $ver, $sec, $barfin, $tel, $telseg, $lugnac1, $fecnac, $estciv, $etnia, $ges, $hijosacargo, $relsexper, $libretmil, $tramlibretmil) {
			$sql = "UPDATE tbdatospersona SET numficha ='".$numficha."',numdocper ='".$docper."',tipdocper ='".$tipdoc1."',lugexpdocper = '".$lugexpdoc1."',pnomper = '".$pnom."',
			snomper = '".$snom."',papeper = '".$pape."',sapeper = '".$sape."',genper = '".$gen."',dirper = '".$dir."',
			zonper = '".$zon."',verper = '".$ver."',secper = '".$sec."',barfinper = '".$barfin."',telper = '".$tel."', telsegper = '".$telseg."',lugnacper = '".$lugnac1."',fecnacper = '".$fecnac."',estcivper = '".$estciv."',etniaper = '".$etnia."',
			geslanper = '".$ges."',hijosacargo = '".$hijosacargo."', relsexper='".$relsexper."',libretmil = '".$libretmil."', tramlibretmil='".$tramlibretmil."' WHERE idpersona = '".$idpersona."';";
			$this -> cons($sql);
		}
		function delper($codp) {
			$sql = "DELETE FROM tbdatospersona WHERE idpersona = '".$idpersona."';";
			$this -> cons($sql);
		}
		function selper() {
			$sql = "SELECT * FROM tbdatospersona;";
			return $this->SeleccionDatos($sql);
		}
		function selper1($idpersona) {
			$sql = "SELECT * FROM tbdatospersona WHERE idpersona = '".$idpersona."';";
			return $this->SeleccionDatos($sql);
		}
		function valor($val) {
			$sql = "SELECT codval,nomval FROM tbvalor WHERE codpar = '".$val."';";
			return $this->SeleccionDatos($sql);
		}
		function valor2($val) {
			$sql = "SELECT codval,nomval FROM tbvalor WHERE codval = '".$val."';";
			return $this->SeleccionDatos($sql);
		}
		function selver() {
			$sql= "SELECT * FROM tbvereda;";
			return $this->SeleccionDatos($sql);
		}
		function selver2($val) {
			$sql = "SELECT codver,nomver FROM tbvereda WHERE codver = '".$val."';";
			return $this->SeleccionDatos($sql);
		}
		function selzona() {
			$sql= "SELECT * FROM tbzona;";
			return $this->SeleccionDatos($sql);
		}
		function selzona2($zona) {
			$sql = "SELECT codzona,nomzona FROM tbzona WHERE codzona = '".$zona."';";
			return $this->SeleccionDatos($sql);
		}
		function ubi($ubicacion) {
			$sql = "SELECT codubi,nomubi FROM tbubicacion WHERE codubi = '".$ubicacion."';";
			return $this->SeleccionDatos($sql);
		}
		
		function get_calcular_edad($fecnac)
		{
			return $this->calcular_edad($fecnac);
		}

	}
?>