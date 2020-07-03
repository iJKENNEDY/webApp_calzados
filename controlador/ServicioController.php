<?php 

	include ("../modelo/ServicioDAO.php");
	if (isset($_POST['btnActualizar'])) {//modificar
		
		$codigo = $_POST['codigo'];
		$nombre =$_POST['nombre'];
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];
		$area = $_POST['areas'];

		$m =modificar($codigo,$nombre,$descripcion,$precio,$area);
		header("Location: ../index.php?m=$m");
	}else if (isset($_GET['id'])) {//eliminar
		$id=$_GET['id'];
		$m = eliminarServicio($id);
		header("Location: ../index.php?m=$m");
	}else if (isset($_POST['btnRegistrar'])) {//registrar 
		$codigo = $_POST['codigo'];
		$nombre =$_POST['nombre'];
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];
		$area = $_POST['areas'];

		$m =insertar($codigo,$nombre,$descripcion,$precio,$area);
		header("Location: ../index.php?m=$m");
	}

	function consultarServicios($idC)
	{
		return consultarServicios1($idC);
	}

	function listaservicios(){
		return getServicios();
	}

 ?>