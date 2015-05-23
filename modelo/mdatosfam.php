<?php
	include("controlador/conexion.php");
	class mdatosfam {
	
		function mdatosfam() {}
		function insper($docfam, $pnomfam, $snomfam, $papefam, $sapefam, $fnacfam, $genfam, $geslac, $nivesc, $ultgrac, $ocupact,$etnia, $parentfam, $numdocper) 
		{
			$sql = "INSERT INTO tbdatosfamiliaper (numdocfam, pnomfam, snomfam, papefam, sapefam, fecnacfam, genfam, geslanfam, nivescfam, ultgracurfam, ocuactfam, etniaper, parperfam, numdocper)
			VALUES ('".$docfam."','".$pnomfam."','".$snomfam."','".$papefam."','".$sapefam."','".$fnacfam."','".$genfam."','".$geslac."','".$nivesc."','".$ultgrac."','".$ocupact."','".$etnia."','".$parentfam."','".$numdocper."');";
			$this -> cons($sql);
		}
		function updper($docfam, $pnomfam, $snomfam, $papefam, $sapefam, $fnacfam, $genfam, $geslac, $nivesc, $ultgrac, $ocupact, $etnia,$parentfam) {
			$sql = "UPDATE  tbdatosfamiliaper SET  pnomfam = '".$pnomfam."', snomfam = '".$snomfam."', papefam = '".$papefam."',sapefam = '".$sapefam."', fecnacfam = '".$fnacfam."', genfam = '".$genfam."', geslanfam = '".$geslac."', nivescfam = '".$nivesc."',ultgracurfam = '".$ultgrac."', ocuactfam = '".$ocupact."', etniaper = '".$etnia."', parperfam = '".$parentfam."' WHERE numdocfam = '".$docfam."';";
			$this -> cons($sql);
		}
		function delper($docfam) {
			$sql = "DELETE FROM tbdatosfamiliaper WHERE numdocfam = '".$docfam."';";
			$this -> cons($sql);
		}
		function cons ($c) {
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$conexionBD -> ejeCon($c, 1);
		}
		function selper() {
			$sql = "SELECT * FROM tbdatosfamiliaper;";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function selper1($doc) {
			$sql = "SELECT * FROM tbdatosfamiliaper WHERE numdocfam= '".$doc."';";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function selper2($docper) {
			$sql = "SELECT * FROM tbdatosfamiliaper WHERE numdocper= '".$docper."';";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function valor($val){
			$sql = "SELECT codval,nomval FROM tbvalor WHERE codpar='".$val."';";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$datos = $conexionBD->ejeCon($sql,0);
			return $datos;
		}
		function valor2($val) {
			$sql = "SELECT codval,nomval FROM tbvalor WHERE codval = '".$val."';";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}

	}
	
?>