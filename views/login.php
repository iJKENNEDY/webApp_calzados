
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author"
	content=" Bootstrap contributors"> 
<title>Login</title>

<link rel="canonical"
	href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

<!-- Bootstrap core CSS -->
<link href="../resources/css/bootstrap.css" rel="stylesheet">
<link href="../resources/css/signin.css" rel="stylesheet">

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
</style>
<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">
	
	<form class="form-signin" method="post"
		action="../controllers/tiendaController.php">
		<img class="mb-4" src="../resources/imagenes/calzado.jpg" alt=""
			width="72" height="72">
		<h1 class="h3 mb-3 font-weight-normal">Login</h1>
		<label for="inputEmail" class="sr-only">Email address</label> <input
			name="username" type="text" id="inputEmail" class="form-control"
			placeholder="Email address" required autofocus> <label
			for="inputPassword" class="sr-only">Password</label> <input
			name="password" type="password" id="inputPassword"
			class="form-control" placeholder="Password" required>
		<div class="checkbox mb-3">
			<label> <input type="checkbox" value="remember-me"> Remember me
			</label>
		</div>
		<div>
		<h4><a href="../index.php">Inicio</a></h4>
	</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">INGRESAR</button>
		<p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
	</form>
</body>
</html>

