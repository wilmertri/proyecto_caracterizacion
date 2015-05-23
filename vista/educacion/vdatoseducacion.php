<?php
	include ("controlador/ceducacion.php");
	include("vista/conexion_sqlserver.php");
?>

<h1>Ingresar Datos academicos</h1>
<div class="forms1">
    <form name="form1" action="home.php?var=3" method="post">
		<div class="row">
            <div class="form-group col-md-6">
                <label for="Required"><i>(<span style="color:red;">*</span>)Campos obligatorios</i></label>
            </div>
			<div class="form-group col-lg-6">
				<input type="hidden" name="idpersona" value="<?php echo $dato1[0]['idpersona'] ?>" />
				<input type="hidden" name="actu" value="actu" />
			</div>
		</div>
		
		<div class="row">
            <div class="form-group col-md-6">
                <label for="Nivel Educativo">Nivel Educativo Alcanzado (Último año o grado aprobado) <span style="color:red;">*</span></label>
                <select name="ultgra" class="form-control" style="text-transform:uppercase;">
					<option value = 0> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($ultgra); $i++){
					?>
					<option value ="<?php echo $ultgra[$i]['codval'] ?>" ><?php echo $ultgra[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			
			<div class="form-group col-md-6 center">
                <label for="Titulo Obtenido">Titulo Obtenido <span style="color:red;">*</span></label>
                <select name="titobtper" class="form-control" style="text-transform:uppercase;">
				<option value=0> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($titobtper); $i++){
					?>
					<option value ="<?php echo $titobtper[$i]['idprofesion'] ?>" ><?php echo $titobtper[$i]['nombreprof'] ?></option>
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
					<option value = 0> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($matriper); $i++){
					?>
					<option value ="<?php echo $matriper[$i]['codval'] ?>" ><?php echo $matriper[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			
			
			
			<div class="form-group col-md-6">
                <label for="Razon no estudio">Actualmente, ¿cuál es la razón principal por la que no asiste a la escuela, colegio o universidad? <span style="color:red;">*</span></label>
                <select name="nomatriper" class="form-control" style="text-transform:uppercase;">
					<option value = 0> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($nomatriper); $i++){
					?>
					<option value ="<?php echo $nomatriper[$i]['idtbopcionnomatricula'] ?>" ><?php echo $nomatriper[$i]['opcion'] ?></option>
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
					<option value = 0> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($termcurant); $i++){
					?>
					<option value ="<?php echo $termcurant[$i]['codval'] ?>" ><?php echo $termcurant[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			
			
			
			
			
		</div>
		
		<div class="col-md-12">
			<a href="home.php?var=101&pr=<?php echo $dato1[0]['numdocper'] ?>" class="btn btn-primary">Datos academicos</a>
			<a href="home.php?var=70&pr=<?php echo $dato1[0]['numdocper'] ?>" class="btn btn-primary">Volver Menu Principal</a>
			
	</div>
		