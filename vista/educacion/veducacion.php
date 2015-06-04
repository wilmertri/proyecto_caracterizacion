<?php
	include ("controlador/ceducacion.php");
	include("vista/conexion_sqlserver.php");
?>

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
						for ($i=0; $i < count($ultgr); $i++){
					?>
					<option value ="<?php echo $ultgr[$i]['codval'] ?>" ><?php echo $ultgr[$i]['nomval'] ?></option>
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
						for ($i=0; $i < count($titobtpe); $i++){
					?>
					<option value ="<?php echo $titobtpe[$i]['idprofesion'] ?>" ><?php echo $titobtpe[$i]['nombreprof'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
		</div>
		<div class="row">
            <div class="form-group col-md-6">
                <label for="Matriculado">¿Actualmente está matriculado(a)? <span style="color:red;">*</span></label>
                <select name="matriper" class="form-control" style="text-transform:uppercase;">
					<option value = "<?= $datoseducacion[0]['matriper'] ?>"> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($matripe); $i++){
					?>
					<option value ="<?php echo $matripe[$i]['codval'] ?>" ><?php echo $matripe[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			<div class="form-group col-md-6">
                <label for="Razon no estudio">Actualmente, ¿cuál es la razón principal por la que no asiste a la escuela, colegio o universidad? <span style="color:red;">*</span></label>
                <select name="nomatriper" class="form-control" style="text-transform:uppercase;">
					<option value = "<?= $datoseducacion[0]['nomatriper'] ?>"> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($nomatripe); $i++){
					?>
					<option value ="<?php echo $nomatripe[$i]['idtbopcionnomatricula'] ?>" ><?php echo $nomatripe[$i]['opcion'] ?></option>
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
						for ($i=0; $i < count($termcuran); $i++){
					?>
					<option value ="<?php echo $termcuran[$i]['codval'] ?>" ><?php echo $termcuran[$i]['nomval'] ?></option>
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
		