<?php
	include ("controlador/cservibas.php");	
?>
<h1>Actualizar Servicios Basicos</h1>
<div class="forms">
    <form name="form1" action="home.php?var=20" method="post">
        <div class="row">
            <div class="group-form">
                <label for="Codigo de Servicio Basico">Código de Servicio basico</label>
                <input name="codserv" type="text" class="form-control" value="<?php echo $dato1[0]['codservbas'] ?>" disabled>
                <input name="codserv" type="hidden" value="<?php echo $dato1[0]['codservbas'] ?>">
                <input type="hidden" name="actu" value="actu" />
            </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group">
                <label for="Tipo de ingreso">Nombre del Servicio</label>
                <input name="nomserv" type="text" value="<?php echo $dato1[0]['desservbas'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Actualizar">
                <a href="home.php" class="btn btn-primary" >Salir</a>
            </div>
        </div>
    </form>
</div>
<div class="tbcenter">
<form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('¿Desea eliminar?')">
   <table width="700px" class="table table-striped">
        <tr>
            <th>Codigo<input name="pac" type="hidden" id="pac" value="104" /></th>
            <th>Nombre del Servicio</th>
        </tr>
        <?php 
            $dato = $ins->selper(); 
          //Select
          for ($i=0; $i < count($dato); $i++){
        ?>
        <tr>
            <td><?php echo $dato[$i]['codservbas']?></td>
            <td><?php echo $dato[$i]['desservbas'] ?></td>
            <td><a href="home.php?id=<?php echo $dato[$i]['codservbas'] ?>&var=21" class="btn btn-primary">Editar</a></td>
        </tr>
        <?php  }  ?>
    </table>
</form>
</div>
