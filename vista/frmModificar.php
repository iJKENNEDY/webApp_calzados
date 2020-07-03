

<?php 

	include ("../controlador/ServicioController.php");

	if (isset($_GET['idC'])) {
		$idC = $_GET['idC'];
		$datos=consultarServicios($idC);
		if ($row = mysqli_fetch_array($datos)) {
			
			$codigo = $row['codigo'];
			$nombre = $row['nombre'];
			$descripcion = $row['descripcion'];
			$precio = $row['precio'];
			$area = $row['area'];
		}

	echo "<form method='post' action='../controlador/ServicioController.php'>";
 	echo "Id: <input type='text' name='codigo' value='".$codigo."'/><br>";
 	echo "Nombre: <input type='text' name='nombre' value='".$nombre."'/><br>";

 	echo "Codigo: <input type='text' name='descripcion' value='".$descripcion."'/><br>";
 	echo "Precio: <input type='text' name='precio' value='".$precio."'/><br>";
 	echo "Marca: <select name='areas' value='".$area."'>
			<option name='areas' value='desarrollo'>Desarrollo</option>
			<option name='areas' value='diseno'>Diseño</option>
			<option name='areas' value='soporteTecnico'>Soporte Tecnico</option>
			<option name='areas' value='contabilidad'>Contabilidad</option>
		</select>";
 	echo "<input type='submit' name='btnActualizar' value='Actualizar'>";
 	
 echo "</form>	";	
	}

 ?>
 