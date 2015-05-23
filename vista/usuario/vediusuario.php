<?php
        /*  
        *   @author: Luis M Morales B
        *   @Version: V1 16/05/15
        */

	include("controlador/cusuario.php");
?>
<h1>Editar Usuario </h1>
<div class="forms1">
    <form name="form1" action="" method="post">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="">Número de Cédula</label>
                <input name="documento" type="text" class="form-control" value="<?= $datousuario[0]['documento']?>" disabled>
            </div>
            <div class="form-group col-lg-6">
                <label for="">Nombre Funcionario</label>
                <input name="nombre" type="text" class="form-control" value="<?= $datousuario[0]['nombre']?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="">Dependencia</label>
                <input name="dependencia" type="text" class="form-control" value="<?= $datousuario[0]['depusu']?>">
            </div>
            <div class="form-group col-lg-6">
                <label for="">Cargo</label>
                <input name="cargo" type="text" class="form-control" value="<?= $datousuario[0]['carusu']?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="">Contraseña</label>
                <input name="password" type="password" class="form-control" value="<?= $datousuario[0]['password']?>" disabled>
            </div>
            <div class="form-group col-lg-6">
                <label for="">Teléfono Oficina</label>
                <input name="telefono" type="telefono" class="form-control" value="<?= $datousuario[0]['telusu']?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="">Perfil:</label>
                <select name="perfil" id="" class="form-control" value="<?= $datousuario[0]['perfil']?>">
                    <option value="">Seleccione</option>
                    <option value="1">Administrador</option>
                    <option value="2">Digitador</option>
                </select>
            </div>
        </div>
        <div class="row">    
            <div class="form-group col-lg-6">
                <input type="submit" class="btn btn-primary" value="Insertar">
            </div>
        </div>
    </form>
</div>