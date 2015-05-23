<?php
        /*  
        *   @author: Luis M Morales B
        *   @Version: V4 16/05/15
            unificada        */

	include("controlador/cusuario.php");
?>
<h1>Insertar Usuario </h1>
<div class="forms1">
    <form name="form1" action="" method="post">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="">Número de Cédula</label>
                <input name="documento" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-6">
                <label for="">Nombre Funcionario</label>
                <input name="nombre" type="text" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="">Dependencia</label>
                <input name="dependencia" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-6">
                <label for="">Cargo</label>
                <input name="cargo" type="text" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="">Contraseña</label>
                <input name="password" type="password" class="form-control">
            </div>
            <div class="form-group col-lg-6">
                <label for="">Teléfono Oficina</label>
                <input name="telefono" type="telefono" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="">Perfil:</label>
                <select name="perfil" id="" class="form-control">
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
<div class="vistatabla">
     <table class="table">
        <tr>
            <th>Cédula</th>
            <th>Funcionario</th>
            <th>Dependencia</th>
            <th>Cargo</th>
            <th>Telefono</th>
            <th>Perfil</th>
            <th>Edición</th>
        </tr>
        <?php
            $dato = $ins->selusu();
            for($i=0;$i<count($dato);$i++)
            {
        ?>
        <tr>
            <td><?= $dato[$i]["documento"]; ?></td> 
            <td><?= $dato[$i]['nombre']?></td>
            <td><?= $dato[$i]['depusu'] ?></td>
            <td><?= $dato[$i]['carusu'] ?></td>
            <td><?= $dato[$i]['telusu'] ?></td>
            <td><?= $dato[$i]['perfil'] ?></td>
            <td> <a href="home.php?var=51&id=<?= $dato[$i]["documento"]  ?>" class="btn btn-success">Editar</a> </td>
        </tr>
       <?php } ?>       
    </table>
</div>    
    <!--se cambian doc por num doc, usu por nom usua por y mail por corr elec