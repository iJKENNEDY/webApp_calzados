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
      
      $cod=$row['codigo'];
      $nom=$row['descripcion'];
      $marc=$row['marca'];
      $tall=$row['talla'];
      $color=$row['color'];
      $categoria=$row['categoria'];
      $pre=$row['precio'];
      $cantidad=$row['cantidad']; 

     }
     echo "<form method='post' action='../controllers/tiendaController.php'>";
     
     echo "codigo :<input type='text' name='codigo' value='".$cod."' deactivate /><br>";
     echo "nombre :<input type='text' name='descripcion' value='".$nom."'/><br>";
     echo "marca :<input type='text' name='marca' value='".$marc."'/><br>";
     echo "talla:<input type='text' name='talla' value='".$tall."'/><br>";
     echo "color:<input type='text' name='colores' value='".$color."'/><br>";
     echo "categoria:<input type='text' name='gcategoria' value='".$categoria."'/><br>";
     echo "precio:<input type='text' name='precio' value='".$pre."'/><br>";
     echo "precio:<input type='text' name='cantidad' value='".$cantidad."'/><br>"; 
     echo "<input type='submit' name='btnActualizar' value='Actualizar tienda'/>";
     echo "</form>";
 }
 ?>
</body>
</html>