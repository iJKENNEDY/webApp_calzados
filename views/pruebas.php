
 
<?php
include ("../controllers/tiendaController.php");
echo "<table width='840'>";
echo "<tbody>";
echo "<tr>";
echo "<th  width='100'> codigo </th>";
echo "<th  width='100'> descripcion </th>";
echo "<th  width='100'> marca </th>";
echo "<th  width='100'> talla </th>";
echo "<th  width='100'> color </th>";
echo "<th  width='100'> categoria </th>";
echo "<th  width='100'> precio</th>";
echo "<th  width='100'> cantidad </th>";
echo "<th  width='100'></th>";
echo "<th  width='100'></th>";
echo "</tr>";
$sql = listatienda();
while ($row = mysqli_fetch_array($sql)) {
    echo "<tr>";
    
    echo "<td align 'center'>" . $row['codigo'] . "</td>";
    echo "<td align 'center'>" . $row['descripcion'] . "</td>";
    echo "<td align 'center'>" . $row['marca'] . "</td>";
    echo "<td align 'center'>" . $row['talla'] . "</td>";
    echo "<td align 'center'>" . $row['color'] . "</td>";
    echo "<td align 'center'>" . $row['categoria'] . "</td>";
    echo "<td align 'center'>" . $row['precio'] . "</td>";
    echo "<td align 'center'>" . $row['cantidad'] . "</td>";
      echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>
    