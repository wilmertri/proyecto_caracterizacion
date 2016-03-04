<?php
	include("controlador/conexion.php");
	class mclasediscapacidad {
		
		function mclasediscapacidad() {}
		function inscladis($nomcladis,$tipdis) 
		{
			$sql = "INSERT INTO tbclasediscapacidad (nomclasedis, idtipodis) VALUES ('".$nomcladis."', '".$tipdis."');";
			$this -> cons($sql);
		}
		function updcladis($idclase, $nomcladis, $tipodis) 
		{
			$sql = "UPDATE tbclasediscapacidad SET nomclasedis = '$nomcladis', idtipodis = '$tipodis' WHERE idclase = '".$idclase."';";
			$this -> cons($sql);
		}
		function delcladis($idclase) {
			$sql = "DELETE FROM tbclasediscapacidad WHERE idclase = '".$idclase."';";
			$this -> cons($sql);
		}
		function cons ($c) {
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$conexionBD -> ejeCon($c, 1);
		}
		function selcladis() 
		{
			$sql = "SELECT * FROM tbclasediscapacidad;";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);

			$class_dis = [];
			for ($i=0; $i < count($datos); $i++) 
			{ 
				$class_dis[$i]['id']	= $datos[$i]['idclase'];
				$class_dis[$i]['name']	= $datos[$i]['nomclasedis']; 	
				$class_dis[$i]['tipe_dis']	= $datos[$i]['idtipodis']; 	
			}
			return $class_dis;
		}
		function selcladis1($idclase) 
		{
			$sql = "SELECT * FROM tbclasediscapacidad WHERE idclase= '".$idclase."';";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);

			$class_dis = [];
			for ($i=0; $i < count($datos); $i++) 
			{ 
				$class_dis['id']	= $datos[$i]['idclase'];
				$class_dis['name']	= $datos[$i]['nomclasedis']; 	
				$class_dis['tipe_dis']	= $datos[$i]['idtipodis']; 	
			}
			return $class_dis;
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