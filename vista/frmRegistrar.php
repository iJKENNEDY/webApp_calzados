<!DOCTYPE html>
<html>
<head>
	<title>IngresarDatos</title>
</head>
<body>


<table border="1" style="background-color: rgba(23,43,122,0.2);">
	

<form method="post" action="../controlador/ServicioController.php">
	<tr>
		<td>Codigo>></td> <td><input type="text" name="codigo"></td>
	</tr>

	<tr>
		<td>Nombre:: </td><td><input type="text" name="nombre"></td>
	</tr>
	<tr>
		<td>Descripcion:: </td><td><input type="text" name="descripcion"></td>
	</tr>
	<tr>
		<td>
		Precio::</td>
		<td> <input type="text" name="precio"></td>
	</tr>
	<tr><td>
		Area::</td> 
		<td>
		<select name="areas">			
			<option name="desarrollo">Desarrollo</option>
			<option name="diseno">Diseño</option>
			<option name="soporteTecnico">Soporte Tecnico</option>
			<option name="contabilidad">Contabilidad</option>
		</select>
		</td>
	</tr>
	
	<tr>
		<td colspan="2">
	<input type="submit" name="btnRegistrar" value="Registrar">
	</td>
	</tr>
</form>
</table>


</body>
</html>