<?php
	include ("controlador/ceducacion.php");
	include("vista/conexion_sqlserver.php");
?>
<script language="javascript" src="js/jquery-1.9.1.js"></script><!-- llamamos al JQuery-->
<script language="javascript">

	function mostrar(val)
	{
		if (document.getElementById){ //se obtiene el id
			var el = document.getElementById('mosnomatri'); //se define la variable "el" igual a nuestro div
			el.style.display = 'none';
			if (val=='103'){
				el.style.display = 'block';
			}else{
				el.style.display = 'none';
			}
		}
	}
</script>
<h1>Ingresar Datos academicos</h1>
<div class="forms1">
    <form name="form1" action="" method="post">
		<div class="row">
            <div class="form-group col-md-6">
                <label for="Required"><i>(<span style="color:red;">*</span>)Campos obligatorios</i></label>
            </div>
		</div>
		<div class="row">
            <div class="form-group col-md-6">
                <label for="Nivel Educativo">Nivel Educativo Alcanzado (Último año o grado aprobado) <span style="color:red;">*</span></label>
                <select name="ultgra" class="form-control" style="text-transform:uppercase;">
					<option value = "<?= $datoseducacion[0]['ultgracurper'] ?>"> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($ultgra1); $i++){
					?>
					<option value ="<?php echo $ultgra1[$i]['codval'] ?>" ><?php echo $ultgra1[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			<div class="form-group col-md-6 center">
                <label for="Titulo Obtenido">Titulo Obtenido <span style="color:red;">*</span></label>
                <select name="titobtper" class="form-control" style="text-transform:uppercase;">
				<option value= "<?= $datoseducacion[0]['titobtper'] ?>"> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($titobtper1); $i++){
					?>
					<option value ="<?php echo $titobtper1[$i]['idprofesion'] ?>" ><?php echo $titobtper1[$i]['nombreprof'] ?></option>
					<?php 
						}
					?>
				</select>
            </div>
		</div>
		<div class="row">
            <div class="form-group col-md-6">
                <label for="Matriculado">¿Actualmente está matriculado(a)? <span style="color:red;">*</span></label>
                <select name="matriper" onchange="javascript:mostrar(this.value);" class="form-control" style="text-transform:uppercase;">
					<option value = "<?= $datoseducacion[0]['matriper'] ?>"> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($matriper1); $i++){
					?>
					<option value ="<?php echo $matriper1[$i]['codval'] ?>" ><?php echo $matriper1[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			<div class="form-group col-md-6" id="mosnomatri">
                <label for="Razon no estudio">Actualmente, ¿cuál es la razón principal por la que no asiste a la escuela, colegio o universidad? <span style="color:red;">*</span></label>
                <select name="nomatriper" class="form-control" style="text-transform:uppercase;">
					<option value = "<?= $datoseducacion[0]['nomatriper'] ?>"> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($nomatriper1); $i++){
					?>
					<option value ="<?php echo $nomatriper1[$i]['idtbopcionnomatricula'] ?>" ><?php echo $nomatriper1[$i]['opcion'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
		</div>
        <div class="row">
		
            <div class="form-group col-md-6">
                <label for="Terminacion estudio">¿…terminó el año escolar anterior? <span style="color:red;">*</span></label>
                <select name="termcurant" class="form-control" style="text-transform:uppercase;">
					<option value = "<?= $datoseducacion[0]['termcurant'] ?>"> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($termcurant1); $i++){
					?>
					<option value ="<?php echo $termcurant1[$i]['codval'] ?>" ><?php echo $termcurant1[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
		</div>
		<div class="row">
			<div class="form-group col-md-12 center" >
				<input type="submit" class="btn btn-success" value="Enviar">
				<a href="home.php?id=<?= $id ?>&var=70" class="btn btn-success">Volver</a>
				<a href="home.php" class="btn btn-success" >Salir</a>
			</div>
		</div>
	</form>
</div>
		