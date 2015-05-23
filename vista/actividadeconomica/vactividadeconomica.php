<?php
	include("controlador/cactividadeconomica.php");
?>
<h1>Actividad Economica</h1>
<div class="forms1">
    <form name="form1" action="" method="post">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="Cuantas personas tiene a su cargo ">Cuantas personas tiene a su cargo</label>	
                <input name="numpercar" type="number" class="form-control" pattern="[0-9]{1,3}" min="0" max="30" value="<?= $datosactividad[0]['numpercar'] ?>"> <!--esta variable viene de la tabla vdatospersona-->
            </div>
			<div class="form-group col-lg-6">
                <label for="Ocupación Actual">Ocupación Actual <span style="color:red;">*</span> </label>
				<select name="ocuperact" class="form-control" id="">
					<option value="<?= $datosactividad[0]['ocuperact'] ?>">Seleccione una opción</option>
					<?php

						for ($i=0; $i <count($ocuperact1) ; $i++) 
						{  
					?>
					<option value="<?php echo $ocuperact1[$i]['codval']; ?>"><?php echo $ocuperact1[$i]['nomval']; ?></option>
					<?php 
						} 
					?>
				</select>		
			</div>
		</div>
		<div class="row">	
			<div class="form-group col-lg-6">
                <label for="En que trabaja">En que trabaja</label>
                <input name="trabper" type="text" class="form-control" pattern="[A-z ]{2,20}" >
            </div>
			<div class="form-group col-lg-6">
                <label for="Ingresos Mensuales">Ingresos Mensuales</label>
                <input name="ingmenper" type="text" class="form-control" placeholder="ej: 680000" pattern="[0-9]{1,10}" value="<?= $datosactividad[0]['ingmenper'] ?>">
            </div>
		</div>
		<div class="row">
            <div class="form-group col-lg-12 center">
                <input type="submit" class="btn btn-success" value="Enviar">
				<a href="home.php?id=<?= $id ?>&var=70" class="btn btn-success">Volver</a>
				<a href="home.php" class="btn btn-success" >Salir</a>
            </div>
		</div>
    </form>
</div>

	