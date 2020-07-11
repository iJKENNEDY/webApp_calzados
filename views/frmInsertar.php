<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nuevos Productos</title>

	<link rel="stylesheet" type="text/css"	href="../resources/css/bootstrap.css">

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
</head>



<body>
	<div
        class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm ">
        <h5 class="my-0 mr-md-auto font-weight-normal">Calzados XYZ</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="../index.php">Inicio</a> <a
                class="p-2 text-dark" href="frmInsertar.php">Insertar</a> 
                <a class="p-2 text-dark" href="frmConsultar.php">Consultar</a> 
                <a class="p-2 text-dark" href="venta.php">Boleta</a>
        </nav>
        <a class="btn btn-outline-primary" href="">Login</a>
    </div>
	<div class="container">
		<div class="">

			<form class="form-row " method="post" action="../controllers/tiendaController.php">
				<table class=" col-md-6 ">
					<tr>
						<td colspan="2"><h3>Registro de calzados</h3></td>
					</tr>

					<tr>
						<td>codigo:</td>
						<td><input type="text" name="codigo" /></td>
					</tr>
					<tr>
						<td>description</td>
						<td><input type="text" name="descripcion" /></td>
					</tr>
					<tr>
						<td>marca</td>
						<td><input type="text" name="marca" /></td>
					</tr>
					<tr>
						<td>talla</td>
						<td><input type="text" name="talla" /></td>
					</tr>
					<tr>
						<td>color</td>
						<td><select name="colores">
								<option name="rojo">rojo</option>
								<option name="negro">negro</option>
								<option name="marron">marron</option>
						</select></td>
					</tr>
					<tr>
						<td>categoria</td>
						<td><input type="radio" name="gcategoria" value="hombre">Hombre <input
							type="radio" name="gcategoria" value="mujer">Mujer</td>
					</tr>
					<tr>
						<td>precio</td>
						<td><input type="text" name="precio" /></td>
					</tr>
					<tr>
						<td>cantidad</td>
						<td><input type="text" name="cantidad"></td>
					</tr>
					<!-- 
					<tr>
						<td>Imagen</td>
						<td><label><input type="file" name="foto"></label></td>
					</tr>
					 -->
					<tr>
						<td colspan="2"><input type="submit" name="btnRegistrar"
							value="Registrar" /></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>