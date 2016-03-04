<?php
	include("controlador/cdiscapacidad.php");
?>
<h1> Actualizar Tipo de Discapacidad</h1>
<div class="forms">
    <form name="form1" action="home.php?var=32" method="post">
        <div class="row">
            <div class="group-form">
                <label for="Codigo">Codigo</label>
                <input name="coddisper" class="form-control" value="<?= $dato_type_disc[0]['idtipodis'] ?>" disabled>
                <input type="hidden" name="actu" value="actu" />
				<input type="hidden" name="idtipodis" value="<?= $dato_type_disc[0]['idtipodis'] ?>" />
            </div>
            <div class="form-group">
                <label for="Tipo de discapacidad">Nombre tipo de discapacidad</label>
                <input name="tipodis" type="text" value="<?= $dato_type_disc[0]['nomtipodis'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Actualizar">
                <a href="home.php?var=32" class="btn btn-success" >Volver</a>
            </div>
        </div>
    </form>
</div>

<?php require 'vlist_type_discapacidad.php'; ?>