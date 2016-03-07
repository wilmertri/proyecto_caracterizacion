<?php
	include("controlador/conexion.php");
	include("functions.php");
	class mdatosfam extends Funciones_generales{
	
		
		function insper($docfam, $pnomfam, $snomfam, $papefam, $sapefam, $fnacfam, $genfam, $geslac, $nivesc, $ultgrac, $ocupact,$etnia, $parentfam, $numdocper) 
		{
			$sql = "INSERT INTO tbdatosfamiliaper (numdocfam, pnomfam, snomfam, papefam, sapefam, fecnacfam, genfam, geslanfam, nivescfam, ultgracurfam, ocuactfam, etniaper, parperfam, idpersona)
						VALUES ('".$docfam."','".$pnomfam."','".$snomfam."','".$papefam."','".$sapefam."','".$fnacfam."','".$genfam."','".$geslac."','".$nivesc."','".$ultgrac."','".$ocupact."','".$etnia."','".$parentfam."','".$numdocper."');";
			$this -> cons($sql);
		}
		
		function updper($id, $docfam, $pnomfam, $snomfam, $papefam, $sapefam, $fnacfam, $genfam, $geslac, $nivesc, $ultgrac, $ocupact, $etnia,$parentfam) 
		{
			$sql = "UPDATE  tbdatosfamiliaper SET pnomfam = '$docfam', pnomfam = '".$pnomfam."', snomfam = '".$snomfam."', papefam = '".$papefam."',sapefam = '".$sapefam."', fecnacfam = '".$fnacfam."', genfam = '".$genfam."', geslanfam = '".$geslac."', nivescfam = '".$nivesc."', ultgracurfam = '".$ultgrac."', ocuactfam = '".$ocupact."', etniaper = '".$etnia."', parperfam = '".$parentfam."' WHERE idfamiliaper = '".$id."';";
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
		
		function selper1($id) 
		{
			$sql = "SELECT * FROM tbdatosfamiliaper WHERE idfamiliaper= '".$id."';";
			return $this->SeleccionDatos($sql);
		}

		function seleccionar_familiares_persona($id)
		{
			$sql = "SELECT * FROM tbdatosfamiliaper WHERE idpersona= $id;";
			return $this->SeleccionDatos($sql);
		}

		
		function selper2($docper) 
		{
			$sql = "SELECT * FROM tbdatosfamiliaper WHERE numdocper= '".$docper."';";
			return $this->SeleccionDatos($sql);
		}
		
		function valor($val){
			$sql = "SELECT codval,nomval FROM tbvalor WHERE codpar='".$val."';";
			return $this->SeleccionDatos($sql);
		}

		function datos_valor($codval){
			$sql = "SELECT codval,nomval FROM tbvalor WHERE codval='".$codval."';";
			return $this->SeleccionDatos($sql);
		}

		function get_sistema_salud()
		{
			return $this->seleccionar_valores_de_parametro(23);
		}

	}
	
?>