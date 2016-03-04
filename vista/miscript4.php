<?php
include_once("conexion_sqlserver.php");
if($_REQUEST["valor"]==0){
		echo"<select name='clasdis' id='id_estado' class='form-control'>";
       	echo"<option value='0'> Seleccione clase de discapacidad</option>";
       echo "</select>";
}else{
    $valor = $_REQUEST["valor"];
    $sql2 = "SELECT clase.idclase as codclase, clase.nomclasedis as nomclase, tipo.idtipodis as codtipo FROM tbclasediscapacidad as clase INNER JOIN tbtipodiscapacidad as tipo ON clase.idtipodis=tipo.idtipodis WHERE tipo.idtipodis=".$valor." ORDER BY clase.nomclasedis";
	
	$conexionBD = new conexion_sqlserver();
	$conexionBD->conectarBD();
	$estados = $conexionBD->ejecutarConsulta($sql2,0);
	$result=array();
	$i=0;
	if ($estados) 
	{
		foreach($estados as $estado)
		{
			$result[$i]["value"]=$estado["codclase"];
			$result[$i]["nombre"]=$estado["nomclase"];
			$i++;
		}
	}
	else
	{
		$result = [];
	}
		   
	$html='<select name="clasdis" id="id_estado" class="form-control">';
	$html.='<option value="">Seleccione clase de discapacidad</option>';
	foreach($result as $res)
	{
		$html.='<option value="'.$res["value"].'">'.$res["nombre"].'</option>';
		$nombre = $res["nombre"];
	}
	$html.='</select>';
	echo $html;
}
?>