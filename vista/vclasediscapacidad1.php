<?php
	include("controlador/cdiscapacidad.php");
?>
<h1> Actualizar datos discapacidad</h1>
<div class="forms">
    <form name="form1" action="home.php?var=8" method="post">
        <div class="row">
            <div class="group-form">
                <label for="Codigo">Codigo</label>
                <input name="coddisper" class="form-control" value="<?php echo $dato1[0]['coddisper'] ?>" disabled>
                <input type="hidden" name="actu" value="actu" />
				<input type="hidden" name="coddisper" value="<?php echo $dato1[0]['coddisper'] ?>" />
            </div>
            <div class="form-group">
                <label for="Tipo de discapacidad">Nombre tipo de discapacidad</label>
                <input name="tipdis" type="text" value="<?php echo $dato1[0]['tipdis'] ?>" class="form-control">
            </div>
			<div class="form-group">
                <label for="Clase de discapacidad">Nombre Clase de discapacidad</label>
                <input name="cladis" type="text" value="<?php echo $dato1[0]['cladis'] ?>" class="form-control">
            </div>
			<div class="form-group">
                <label for="Descripcion">Descripcion</label>
                <input name="desdis" type="text" value="<?php echo $dato1[0]['desdis'] ?>" class="form-control">
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
            <th>Codigo</th>
            <th>tipo de discapacidad</th>
			<th>Clase de discapacidad</th>
            <th>Descripcion</th>
            <th>Editar</th>
        </tr>
        <?php 
          //Select
		  $dato = $ins -> seldisper();
          for ($i=0; $i < count($dato); $i++){
        ?>
        <tr>
            <td><?php echo $dato[$i]['coddisper']?></td>
            <td><?php echo $dato[$i]['tipdis'] ?></td>
			<td><?php echo $dato[$i]['cladis']?></td>
            <td><?php echo $dato[$i]['desdis'] ?></td>
            <td><a href="home.php?id=<?php echo $datostiping[$i]['coddisper'] ?>&var=9" class="btn btn-primary">Editar</a></td>
        </tr>
        <?php  }  ?>
    </table>
</form>
</div>