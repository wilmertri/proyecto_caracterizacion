<?php
	include ("controlador/cdatospersona.php");
?>
<h1>Listado de personas registradas</h1><br>
<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Genero</th>
            <th>Dirección</th>
            <th>Telefono</th>
			<th>Ver Detalle</th>
        </tr>
    </thead>
 
    <tfoot>
        <tr>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Genero</th>
            <th>Dirección</th>
            <th>Telefono</th>
			<th>Ver Detalle</th>
        </tr>
    </tfoot>
 
    <tbody>
	   <?php
			$dato = $ins->selper();
			for($i=0;$i<count($dato);$i++) {
                $gen2 = $ins->valor2($dato[$i]["genper"]);
                //$est = $ins->valor2($dato[$i]["estcivper"]);
		?>
		<tr>
			<td><?php echo $dato[$i]["numdocper"]; ?></td>
			<td><?php echo $dato[$i]["pnomper"]; ?></td>
			<td><?php echo $dato[$i]["papeper"]; ?></td>
			<td><?php echo $gen2[0]["nomval"]; ?></td>
			<td><?php echo $dato[$i]["dirper"]; ?></td>
			<td><?php echo $dato[$i]["telper"]; ?></td>
            <?php //echo $est[$i]["nomval"]; ?>
            <td><a href="home.php?id=<?php echo $dato[$i]['idpersona'] ?>&var=70" class="btn btn-success">Información</a></td>     
		</tr>
        <?php 
            }
        ?>
	 </tbody>
</table>
    <div class="row">
        <div class="form-group col-md-12 center">
    		
                <a href="home.php?var=2" class="btn btn-success" >Insertar</a>
        </div>
    </div>
