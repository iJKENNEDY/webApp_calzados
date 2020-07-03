<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<<<<<<< HEAD
   <?php
    if(isset($_GET['m'])){
	$m=$_GET['m'];
	echo '<script language="javascript"> alert("'.$m.'");</script>';
    }
    echo '<a href="vista/frmRegistrar.php">Registrar</a><br>';
    echo '<a href="vista/frmListarServicios.php">Lista de Servicios</a><br>';
   ?>
=======
	<div
		class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm ">
		<h5 class="my-0 mr-md-auto font-weight-normal">Calzados XYZ</h5>
		<nav class="my-2 my-md-0 mr-md-3">
			<a class="p-2 text-dark" href="index.php">Inicio</a> <a
				class="p-2 text-dark" href="views/frmInsertar.php">Insertar</a> 
				<a class="p-2 text-dark" href="views/frmConsultar.php">Consultar</a> 
				<a class="p-2 text-dark" href="views/venta.php">Boleta</a>
		</nav>
		<a class="btn btn-outline-primary" href="">Login</a>
	</div>
 <?php 
 if(isset($_GET['m'])){
	$m=$_GET['m'];
	echo '<script language="javascript"> alert("'.$m.'");</script>';
    }
echo '<a href="./views/frmInsertar.php">Registrar producto</a><br>';
echo '<a href="./views/frmConsultar.php">Lista de productos</a><br>';

?>

    </div>
	</div>


	</div>
>>>>>>> cambios vista
</body>
</html>