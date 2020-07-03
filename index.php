<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

    <link rel="stylesheet" type="text/css"  href="resources/css/bootstrap.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

    <style type="text/css">
        .wrapper{
            width: 777px;
            margin: 0 auto;
            font-size: 14px;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
        .bg-qwerty{
            background-color: Tomato;
           
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body> 
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
</body>
</html>