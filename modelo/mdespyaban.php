<?php
	/*
		@author: Andrea liliana Socha 
		@version: V1
	*/
	include ("controlador/conexion.php");
	include ("functions.php");
	class Mdespyaban extends Funciones_generales {
		
		
		function Mdespyaban()
		{

		}
		
		
		function get_valor($codval)
		{
			return $this->mostrar_nombre_valores($codval);
		}
		
		function get_respuesta_cerrada()
		{
			return $this->seleccionar_valores_de_parametro(24);
		}
		
		function get_respuesta_cerrada_dos()
		{
			return $this->seleccionar_valores_de_parametro(25);
		}
		
		function get_solicitud()
		{
			return $this->seleccionar_valores_de_parametro(32);
		}
		
		function get_razon_inclusion()
		{
			return $this->seleccionar_valores_de_parametro(33);
		}
		
		function get_predio_perdido_por()
		{
			return $this->seleccionar_valores_de_parametro(34);
		}
		
		function get_tipo_inmueble()
		{
			return $this->seleccionar_valores_de_parametro(35);
		}
		
		function get_relacion_con_el_bien()
		{
			return $this->seleccionar_valores_de_parametro(36);
		}
		
		function get_tipo_de_familia()
		{
			return $this->seleccionar_valores_de_parametro(9);
		}
		
		function get_ideal_rupd ()
		{
			return $this->seleccionar_valores_de_parametro (37);
		}
		
		function get_razon_retorno()
		{
			return $this->seleccionar_valores_de_parametro (38);
		}
		
		function actu_datos_despyaban($munucipio, $fechexpul, $actorarmado, $ingaliment, $tpermanencia, $solicitud, $rinclusion, $usopredio, $perbienes, $tipobi, $relabien, $tipofam, $ideal, $ubicacion, $retorno, $medproteccion, $reciproteccion, $indemnizacion, $observacion, $id)
		{
			$sql = "UPDATE tbdatospersona SET lugexpulper='$munucipio', fecexpulper='$fechexpul', actperact='$actorarmado', ingresoalimentos='$ingaliment', tiepermun='$tpermanencia', solrupruv='$solicitud', razrupruv='$rinclusion', usopreddes='$usopredio', perbienper='$perbienes', tipbienper='$tipobi', relbienper='$relabien', tipfamper='$tipofam', iderupruv='$ideal', lugarrehubi='$ubicacion', raznoret='$retorno', medprotper='$medproteccion', recprotper='$reciproteccion', indunivict='$indemnizacion', obsdesper='$observacion' WHERE  idpersona = '$id'";                    
			$this->cons($sql);
		}

		public function consulta_datos_despyaban($id)
		{
			$sql = "SELECT idpersona, lugexpulper, fecexpulper, tiepermun, actperact, solrupruv, razrupruv, usopreddes, perbienper, tipbienper, relbienper, iderupruv, raznoret, medprotper, recprotper, indunivict, obsdesper, ingresoalimentos, lugarrehubi, tipfamper FROM tbdatospersona WHERE idpersona= '$id';";
			return $this->SeleccionDatos($sql);
		}

	
		
	}