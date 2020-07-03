


<?php 

	include("../controlador/ServicioController.php");

	echo "<table border='1' width='777' style='background-color:rgba(123,22,33,.6)'>";

	echo "<tbody>";
	echo "<tr>";
	echo "<th width='100'> Codigo </th>";
	echo "<th width='444'> Nombre </th>";
	echo "<th width='100'> Descripcion </th>";
	echo "<th width='100'> Precio </th>";
	echo "<th width='100'> Area </th>"; 
	echo "<th width='444'> Acciones </th>"; 
	echo "</tr>";
	$sql = listaservicios();
	
	while ($row=mysqli_fetch_array($sql)) {
	    echo "<tr>";
	    echo "<td align 'center'>".$row['codigo']."</td>";
	    echo "<td align 'center'>".$row['nombre']."</td>";
	    echo "<td align 'center'>".$row['descripcion']."</td>";
	    echo "<td align 'center'>".$row['precio']."</td>";
	    echo "<td align 'center'>".$row['area']."</td>";
	    echo '<td colspan=2><a href="frmModificar.php?idC='.$row['codigo'].'">Modificar</a> | ';
	    echo '<a href="../controlador/ServicioController.php?id='.$row['codigo'].'">Eliminar</a></td>';
	    echo "</tr>";


	}
	echo "</tbody>";
	echo "</table>";
 ?>