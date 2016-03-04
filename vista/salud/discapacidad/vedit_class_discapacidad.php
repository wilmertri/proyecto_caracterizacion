<?php
	include("controlador/cclasediscapacidad.php");
?>
<h1> Actualizar Clase de Discapacidad</h1>
<div class="forms">
    <form name="form1" action="home.php?var=34" method="post">
        <div class="row">
            <div class="form-group">
                <label for="id clase de discapacidad">Código de Clase de discapacidad</label>
                <input name="idclase" type="text" class="form-control" value="<?= $dato1['id']; ?>" disabled>
                <input name="actu" type="hidden" value="actu">
                <input name="idclase" type="hidden" value="<?= $dato1['id']; ?>">
            </div>
            <div class="form-group">
                <label for="Clase de discapacidad">Clase de discapacidad</label>
                <input name="nomcladis" type="text" class="form-control" value="<?= $dato1['name']; ?>">
            </div>
            <div class="form-group">
                <label for="Clase de discapacidad">Tipo de Discapacidad</label>
                <select name="tipodis" type="text" class="form-control">
                    <option value="<?= $dato1['tipe_dis'] ?>">Seleccione el tipo de discapacidad</option>
                <?php 
                    for ($i=0; $i<count($tipodis); $i++){
                ?>
                <option value ="<?= $tipodis[$i]['idtipodis']; ?>" ><?= $tipodis[$i]['nomtipodis'] ?></option>
                <?php 
                    } 
                ?>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Enviar">
                <a href="home.php?var=34" class="btn btn-success">Volver</a>
                <a href="home.php" class="btn btn-success" >Salir</a>
            </div>
        </div>
    </form>
</div>