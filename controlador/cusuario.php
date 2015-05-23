<?php

		/*  
        *   @author: Luis M Morales B
        *   @Version: V3 16/05/15
        unificado         */

	include("modelo/musuario.php");

		$ins = new mtbusuario(); 
		
		$documento 	= isset($_POST["documento"]) ? $_POST["documento"]:null; 
		$usuario	= isset($_POST["nombre"]) ? $_POST["nombre"]:null;
		$dependencia= isset($_POST["dependencia"]) ? $_POST["dependencia"]:null;
		$cargo		= isset($_POST["cargo"]) ? $_POST["cargo"]:null;
		$password   = isset($_POST["password"]) ? $_POST["password"]:null;
		$telefono	= isset($_POST["telefono"]) ? $_POST["telefono"]:null;
		$perfil		= isset($_POST["perfil"]) ? $_POST["perfil"]:null;
		$actu= 	isset($_POST["actu"]) ? $_POST["actu"]:null; 
		$id= isset($_GET["id"]) ? $_GET["id"]:null;
		
		$datousuario = $ins->selusu1($id);

		if($documento && $usuario && $dependencia && $cargo && $password && $telefono && $perfil && $cargo && $actu) 
		{
			$ins->updusu($documento,$usuario,$dependencia,$cargo,$password,$telefono,$perfil,$cargo);  // actualizar datos
		}	
			if($documento && $usuario && $dependencia && $cargo && $password && $telefono && $perfil && $cargo && !$actu) // insertar datos // cuando es ! es para negar  
		{
			$ins->insusu($documento,$usuario,$dependencia,$cargo,sha1($password),$telefono,$perfil,$cargo); 
		}
?>			