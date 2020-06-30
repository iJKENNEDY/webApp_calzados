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
						<td colspan="2"><h3>Registro de calzados</h3></td>
					</tr>
					
				<tr><td>codigo: </td><td><input type="text" name="cod" /></td></tr>
				<tr><td> description</td><td><input type="text" name="nom" /></td> </tr>
				<tr><td> marca </td><td><input type="text" name="marc" /></td> </tr>
				<tr><td> talla</td><td><input type="text" name="tall" /></td> </tr>
				<tr><td> color</td><td>
						<select name="colores">
							<option value="rojo">rojo</option>
							<option value="negro">negro</option>
							<option value="marron">marron</option>
						</select>
					</td>
				 </tr>
				 <tr>
				 	<td>categoria</td>
				 	<td>
				 		<input type="radio" name="gcategoria" value="hombre">Hombre
				 		<input type="radio" name="gcategoria" value="mujer">Mujer
				 	</td>
				 </tr>
				<tr><td> precio</td><td><input type="text" name="pre" /></td></tr>		
				<tr>
					<td>cantidad</td>
					<td> <input type="text" name="cantidad"></td>
				</tr>
				<tr>
					<td>Imagen</td><td><label><img src="" width="50" height="50"></label></td>
				</tr>
				<tr>
					<td colspan="2">
						<center>
					<input type="submit" name="btnRegistrar" value="Registrar" />
					</center>
					</td>
				</tr>		
				</table>
			</form>
		</div>
	</div>
</body>
</html>