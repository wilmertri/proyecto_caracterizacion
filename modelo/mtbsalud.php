<?php
	/*
		@author: Rubiel Sánches Torres
		@Version: V1.0
	*/
	include ("controlador/conexion.php");
	include ("functions.php");
	class Mdatossalud extends Funciones_generales {
		
		function Mdatossalud()
		{
		}

		function get_valor($codval)
		{
			return $this->mostrar_nombre_valores($codval);
		}
				
		/*
			6: Si, No, No Sabe
		*/

		function get_sistema_salud()
		{
			return $this->seleccionar_valores_de_parametro(23);
		}

		function get_seleccionar_eps()        
		{
            $sql = "SELECT * FROM tbeps";
            return $this->SeleccionDatos($sql);
        }
		
		function get_negar_servicio()
		{
			return $this->seleccionar_valores_de_parametro(25);
		}

		function get_conflicto_armado()
		{
			return $this->seleccionar_valores_de_parametro(25);
		}

		function get_atencion_salud()
		{
			return $this->seleccionar_valores_de_parametro(25);
		}

		function get_esquema_vacunacion()
		{
			return $this->seleccionar_valores_de_parametro(25);
		}

		function get_control_odontologico()
		{
			return $this->seleccionar_valores_de_parametro(24);
		}

		function get_alimentos_dia()
		{
			return $this->seleccionar_valores_de_parametro(26);
		}


		/*
			Función para la actualización de los datos Salud
		*/
		function actu_datos_salud($idpersona, $sissal, $eps, $negser, $atevicper, $esqvacper, $conodoper, $disconfarm, $comdiaper)
		{
			$sql = "UPDATE tbdatospersona SET afiliacionsalud='$sissal', epsper='$eps', negserper='$negser', atesalposvicper='$atevicper', esqvacper='$esqvacper', conodoper='$conodoper', disconfarm='$disconfarm', comdiaper='$comdiaper'
						WHERE idpersona = '$idpersona'";
			$this->cons($sql);

			/* */ 
		}


		function ver_datos_salud($idpersona)
		{
			$sql = "SELECT afiliacionsalud, epsper, negserper, atesalposvicper, esqvacper, conodoper, disconfarm, comdiaper FROM tbdatospersona WHERE idpersona = '$idpersona'";
			return $this->SeleccionDatos($sql);
		}

		function cons ($sentencia_sql) 
		{
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$conexionBD -> ejeCon($sentencia_sql, 1);
		}
		function seleccionar_eps($eps)        
		{
            $sql = "SELECT `codeps`,`nomeps` FROM `tbeps` WHERE `codeps`= '".$eps."';";
            return $this->SeleccionDatos($sql);
        }
	} 
 ?>,