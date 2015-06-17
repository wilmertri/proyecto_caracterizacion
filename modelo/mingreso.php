<?php
	include("controlador/conexion.php");
	include ("functions.php");
	class mingreso extends Funciones_generales{
		
		//Función para obetner los nombres de los valores
        function get_valor($codval)
		{
			return $this->mostrar_nombre_valores($codval);
		}
                       
		//Función para obtener el tipo ingreso
		function get_tipo_ingreso()
		{
			return $this->seleccionar_valores_de_parametro(40);
		}

		
		function mingreso() {}
		function insingreso($tipoing, $ing, $idpersona) {
			$sql = "INSERT INTO tbingreso (idpersona, tipoing, ing) VALUES ('".$idpersona."','".$tipoing."','".$ing."');";
			$this -> cons($sql);
		}
		function updingreso($coding, $tipoing, $ing) {
			$sql = "UPDATE tbingreso SET tipoing = '".$tipoing."', ing = '".$ing."' WHERE coding = '".$coding."';";
			$this -> cons($sql);
		}
		function delingreso($coding) {
			$sql = "DELETE FROM tbingreso WHERE coding = '".$coding."';";
			$this -> cons($sql);
		}
		
		function selingreso() {
			$sql = "SELECT * FROM tbingreso;";
			return $this->SeleccionDatos($sql);
		}
		function selingreso1($coding) {
			$sql = "SELECT * FROM tbingreso WHERE coding= '".$coding."';";
			return $this->SeleccionDatos($sql);
		}
		function selingreso2($idpersona) {
			$sql = "SELECT * FROM tbingreso WHERE idpersona= '".$idpersona."';";
			return $this->SeleccionDatos($sql);
		}
	}
?>