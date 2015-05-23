<?php
include_once("conexion_sqlserver.php");
    $valor = $_REQUEST["valor"];
    $sql2 = "SELECT tbubicacion.codubi, tbubicacion.nomubi AS ubiciu, vieubica.nomubi AS ubidep FROM tbubicacion INNER JOIN vieubica ON tbubicacion.depubi=vieubica.codubi WHERE tbubicacion.depubi=".$valor." order by vieubica.nomubi, tbubicacion.nomubi";
	$conexionBD = new conexion_sqlserver();
	$conexionBD->conectarBD();
	$estados = $conexionBD->ejecutarConsulta($sql2,0);
	$result=array();
	$i=0;
	foreach($estados as $estado){
		$result[$i]["value"]=$estado["codubi"];
		$result[$i]["nombre"]=$estado["ubiciu"];
		$i++;
		}
		   
	$html='<select name="codubinac" id="id_estado" class="form-control">';
	$html.='<option value="">Seleccione municipio</option>';
	foreach($result as $res){
			$html.='<option value="'.$res["value"].'">'.$res["nombre"].'</option>';
		}
	$html.='</select>';
	echo $html;
?>