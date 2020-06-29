<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>insercion</title>
</head>
<body>
	<div class="container">
		<div>

			<form method="post" action="../controllers/tiendaController.php">
				codigo :<input type="text" name="cod" /> nombre :<input type="text"
					name="nom" /> marca :<input type="text" name="marc" /> talla:<input
					type="text" name="tall" /> precio :<input type="text" name="pre" />
				<input type="submit" name="btnRegistrar" value="Registrar tienda" />
			</form>
		</div>
	</div>
</body>
</html>