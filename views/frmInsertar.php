<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../resources/css/bootstrap.css">
<title>insercion</title>
</head>
<body>
	<div class="container">
		<div class="card-body">

			<form method="post" action="../controllers/tiendaController.php">
				<table class="bg-success">
					<tr>
				<td>codigo: </td><input type="text" name="cod" />
				<td> nombre</td><input type="text" name="nom" /> 
				<td> marca </td><input type="text" name="marc" /> 
				<td> talla</td><input type="text" name="tall" /> 
				<td> precio</td><input type="text" name="pre" />
				<input type="submit" name="btnRegistrar" value="Registrar tienda" />
				</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>