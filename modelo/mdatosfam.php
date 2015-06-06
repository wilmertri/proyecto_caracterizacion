<?php
	include("controlador/conexion.php");
	include("functions.php");
	class mdatosfam extends Funciones_generales{
	
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

		function selper() {
			$sql = "SELECT * FROM tbdatosfamiliaper;";
			return $this->SeleccionDatos($sql);
		}
		
		function selper1($doc) {
			$sql = "SELECT * FROM tbdatosfamiliaper WHERE numdocfam= '".$doc."';";
			return $this->SeleccionDatos($sql);
		}
		
		function selper2($docper) {
			$sql = "SELECT * FROM tbdatosfamiliaper WHERE numdocper= '".$docper."';";
			return $this->SeleccionDatos($sql);
		}
		
		function valor($val){
			$sql = "SELECT codval,nomval FROM tbvalor WHERE codpar='".$val."';";
			return $this->SeleccionDatos($sql);
		}

		function valor2($val) {
			$sql = "SELECT codval,nomval FROM tbvalor WHERE codval = '".$val."';";
			return $this->SeleccionDatos($sql);
		}

	}
	
?>