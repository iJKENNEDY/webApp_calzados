<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 include ("../controllers/tiendaController.php");
 if(isset($_GET['idC'])){
     $idC=$_GET['idC'];
     $datos=consultartienda($idC);
     if($row=mysqli_fetch_array($datos)){
      $id=$row['id'];
      $cod=$row['codigo'];
      $nom=$row['nombre'];
      $marc=$row['marca'];
      $tall=$row['talla'];
      $pre=$row['precio'];
     }
     echo "<form method='post' action='../controllers/tiendaController.php'>";
     echo "id : <input type='text' name='id' value='".$id."'/><br>";
     echo "codigo :<input type='text' name='codigo' value='".$cod."'/><br>";
     echo "nombre :<input type='text' name='nombre' value='".$nom."'/><br>";
     echo "marca :<input type='text' name='marca' value='".$marc."'/><br>";
     echo "talla:<input type='text' name='talla' value='".$tall."'/><br>";
     echo "precio:<input type='text' name='precio' value='".$pre."'/><br>";
     echo "<input type='submit' name='btnActualizar' value='Actualizartienda'/>";
     echo "</form>";
 }
 ?>
</body>
</html>