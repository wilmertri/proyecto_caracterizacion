<?php
	include ("controlador/cservibas.php");
?>
<h1>Insertar Servicios Basicos</h1>
<div class="forms">
    <form name="form1" action="" method="post">
        <div class="row">
            <div class="form-group">
                <label for="Tipo de ingreso">Nombre del servicio</label>
                <input name="nomserv" type="text" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Insertar">
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
            <th>Nombre del servicio</th>
            <th>Editar</th>
        </tr>
        <?php
            $dato = $ins->selper(); 
 	      //Select
		  for ($i=0; $i < count($dato); $i++){
	    ?>
        <tr>
			<td><?php echo $dato[$i]['codservbas']?></td>
		    <td><?php echo $dato[$i]['desservbas']?></td>
            <td><a href="home.php?id=<?php echo $dato[$i]['codservbas'] ?>&var=21" class="btn btn-primary">Editar</a></td>
        </tr>
        <?php  }  ?>
    </table>
</form>
</div>

