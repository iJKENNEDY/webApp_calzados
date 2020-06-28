

<?php
/**
    include("../controllers/tiendaController.php");
    echo"<table width='840'>";
echo"<tbody>";
echo "<tr>";
echo "<th  width='100'> id </th>";
echo "<th  width='100'> codigo </th>";
echo "<th  width='100'> nombre </th>";
echo "<th  width='100'> marca </th>";
echo "<th  width='100'> talla </th>";
echo "<th  width='100'> precio</th>";
echo "<th  width='100'></th>";
echo "<th  width='100'></th>";
echo "</tr>";
$sql=listatienda();
while($row=mysqli_fetch_array($sql)){
echo "<tr>";
echo "<td align'center'>".$row['id']."</td>";
echo "<td align'center'>".$row['codigo']."</td>";
echo "<td align'center'>".$row['nombre']."</td>";
echo "<td align'center'>".$row['marca']."</td>";
echo "<td align'center'>".$row['talla']."</td>";
echo "<td align'center'>".$row['precio']."</td>";
echo '<td><a href="frmModificar.php?idC='.$row['id'].'"> Modificar</a></td>';
echo '<td><a href="../controllers/tiendaController.php?id='.$row['id'].'"> Eliminar</a></td>';
echo "</tr>";
}
echo "</tbody>";
echo "</table>";
    ?>
    