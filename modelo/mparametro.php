<?php
	include ("controlador/conexion.php");


	class mparametro{
	
		function mparametro(){}
	
		function inspar($nompar){
			$sql = "INSERT INTO tbparametro (nompar) VALUES ('".$nompar."');";
			$this->cons($sql);
		}
	
		function insval($codval, $nomval, $codpar){
			$sql = "INSERT INTO tbvalor ( codval , nomval, codpar ) VALUES ('".$codval."', '".$nomval."', '".$codpar."');";
			$this->cons($sql);
		}
		function delpar($codpar){
			$sql = "DELETE FROM tbparametro WHERE codpar='".$codpar."';";
			$this->cons($sql);
		}
	
		function delval($codval){
			$sql = "DELETE FROM tbvalor WHERE codval='".$codval."';";
			$this->cons($sql);
		}
		function updpar($codpar, $nompar){
			$sql = "UPDATE tbparametro SET nompar='".$nompar."' WHERE codpar='".$codpar."';";
			$this->cons($sql);
		}
		function cons($c){
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$conexionBD->ejeCon($c,1);
		}
	
		function selpar(){
			$sql = "SELECT codpar, nompar FROM tbparametro;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$datos = $conexionBD->ejeCon($sql,0);
			return $datos;
		}
		function selval(){
			$sql = "SELECT val.codval, val.nomval, par.nompar FROM tbvalor AS val INNER JOIN tbparametro AS par ON val.codpar = par.codpar;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$datos = $conexionBD->ejeCon($sql,0);
			return $datos;
		}
		function selpar1($codpar){
			$sql = "SELECT codpar, nompar FROM tbparametro WHERE codpar='".$codpar."';";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$datos = $conexionBD->ejeCon($sql,0);
			return $datos;
		}
		function selval2($codval){
			$sql = "SELECT codval, nomval FROM tbvalor WHERE codval='".$codval."';";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$datos = $conexionBD->ejeCon($sql,0);
			return $datos;
		}
		function selval1(){
			$sql = "SELECT tbvalor.codval, tbvalor.nomval, tbvalor.codpar, tbparametro.nompar FROM tbvalor, tbparametro WHERE tbvalor.codpar= tbparametro.codpar;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$datos = $conexionBD->ejeCon($sql,0);
			return $datos;
		}
		
		function updval($codval, $nomval){
			$sql = "UPDATE tbvalor SET nomval='".$nomval."' WHERE codval='".$codval."';";
			$this->cons($sql);
		}
	}
?>