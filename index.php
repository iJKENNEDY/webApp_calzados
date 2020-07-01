<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<title>Main</title>

<link rel="canonical"
	href="https://getbootstrap.com/docs/4.5/examples/pricing/">
<link href="./resources/css/bootstrap.css" rel="stylesheet">
<link href="./resources/css/pricing.css" rel="stylesheet">
<!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

<style>
.bd-placeholder-img {
	font-size: 1.125rem;
	text-anchor: middle;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

@media ( min-width : 768px) {
	.bd-placeholder-img-lg {
		font-size: 3.5rem;
	}
}

.bgwww {
	background-image: url(resources/Imagenes/LOLUDANI.png);
	background-position: right;
}
</style>
<!-- Custom styles for this template -->
<link href="pricing.css" rel="stylesheet">
</head>
<body>
	<div
		class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm ">
		<h5 class="my-0 mr-md-auto font-weight-normal">Calzados XYZ</h5>
		<nav class="my-2 my-md-0 mr-md-3">
			<a class="p-2 text-dark" href="index.php">Inicio</a> <a
				class="p-2 text-dark" href=" ">Insertar</a> <a class="p-2 text-dark"
				href="">Consultar</a> <a class="p-2 text-dark" href="#">Precios</a>
		</nav>
		<a class="btn btn-outline-primary" href="">Login</a>
	</div>

	<script type="text/javascript">alert("'.$m.'")</script>
 
  <?php
if (isset($_GET['m'])) {
    $m = $_GET['m'];
    echo '<script type="text/javascript">alert("' . $m . '")</script>';
}

echo '<a href="./views/frmInsertar.php">Registrar producto</a><br>';
echo '<a href="./views/frmConsultar.php">Lista de productos</a><br>';

?>

    </div>
	</div>


	</div>
</body>
</html>
