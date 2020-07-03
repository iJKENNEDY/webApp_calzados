<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    if(isset($_GET['m'])){
	$m=$_GET['m'];
	echo '<script language="javascript"> alert("'.$m.'");</script>';
    }
    echo '<a href="vista/frmRegistrar.php">Registrar</a><br>';
    echo '<a href="vista/frmListarServicios.php">Lista de Servicios</a><br>';
   ?>
</body>
</html>