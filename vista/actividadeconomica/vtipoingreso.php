<?php
	include ("controlador/ctipoingreso.php");	
?>
<h1>Insertar Tipos de Ingreso</h1>
<div class="forms">
    <form name="form1" action="" method="post">
        <div class="row">
            <div class="form-group">
                <label for="Tipo de ingreso">Tipo de ingreso</label>
                <input name="tipoing" type="text" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Insertar">
                <a href="home.php" class="btn btn-success" >Salir</a>
            </div>
        </div>
    </form>
</div>
<div class="tbcenter">
<form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('¿Desea eliminar?')">
    <table width="700px" class="table table-striped">
        <tr>
            <th>Codigo</th>
            <th>Tipo de ingreso</th>
            <th>Editar</th>
        </tr>
        <?php 
 	      //Select
            $datostiping  = $ins->seltip();
		  for ($i=0; $i < count($datostiping); $i++){
	    ?>
        <tr>
		    <td><?php echo $datostiping[$i]['idtipoingreso']?></td>
            <td><?php echo $datostiping[$i]['tipoingreso'] ?></td>
            <td><a href="home.php?id=<?php echo $datostiping[$i]['idtipoingreso'] ?>&var=23" class="btn btn-success">Editar</a></td>
        </tr>
        <?php  }  ?>
    </table>
</form>
</div>

