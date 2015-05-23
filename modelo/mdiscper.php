<?php
	include("controlador/conexion.php");
	class mdiscper {
		
		function mdiscper() {}
		function insdiscper($disc,$per,$desc) {
			$sql = "INSERT INTO tbdiscper (numdocper,idclasdis,descripcion) VALUES ('".$per."','".$disc."','".$desc."');";
			$this -> cons($sql);
		}
		function insdiscper2($disc,$per,$desc) {
			$sql = "INSERT INTO tbdiscperfam (numdocper,idclasdisc,descripcion) VALUES ('".$per."','".$disc."','".$desc."');";
			$this -> cons($sql);
		}
		function upddisper($iddisc,$disc,$per,$desc) {
			$sql = "UPDATE tbdiscper SET numdocper = '".$per."', idclasdis = '".$disc."', descripcion = '".$desc."' WHERE iddiscper = '".$iddisc."';";
			$this -> cons($sql);
		}
		function deldisper($iddisc) {
			$sql = "DELETE FROM tbdiscper WHERE iddiscper = '".$iddisc."';";
			$this -> cons($sql);
		}
		function cons ($c) {
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$conexionBD -> ejeCon($c, 1);
		}
		function seldisper() {
			$sql = "SELECT * FROM tbdiscper;";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function seldisper1($iddisc) {
			$sql = "SELECT * FROM tbdiscper WHERE iddiscper= '".$iddisc."';";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function seldisper2($numdoc) {
			$sql = "SELECT dp.iddiscper, dp.idclasdis,  dp.descripcion, cl.nomclasedis FROM tbdiscper as dp INNER JOIN tbclasediscapacidad as cl WHERE numdocper= '".$numdoc."' AND dp.idclasdis=cl.idclase;";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function seldisper3($numdoc) {
			$sql = "SELECT dp.iddiscperfam, dp.idclasdisc,  dp.descripcion, cl.nomclasedis FROM tbdiscperfam as dp INNER JOIN tbclasediscapacidad as cl WHERE numdocper= '".$numdoc."' AND dp.idclasdisc=cl.idclase;";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function seltipdis() {
			$sql = "SELECT * FROM tbtipodiscapacidad;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$datos = $conexionBD->ejeCon($sql, 0);
			return $datos;
		}
	}
?>