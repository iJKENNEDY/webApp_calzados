<?php
header("Location: ../index.php");
// 

 include("../models/tiendaDAO.php");
 if(isset($_POST['btnActualizar'])){//Modificar
     $cod=$_POST['codigo'];
    $nom=$_POST['descripcion'];
    $marc=$_POST['marca'];
    $tall=$_POST['talla'];
    $color = $_POST['colores'];
    $categoria = $_POST['gcategoria'];
    $pre=$_POST['precio'];
    $cantidad = $_POST['cantidad'];
     
    $m=modificar($cod,$nom,$marc,$tall,$color,$categoria,$pre,$cantidad);
    header("Location: ../index.php?m=$m");
 }else if(isset($_GET['id'])){//Eliminar
      $id=$_GET['codigo'];
      $m=eliminartienda($id);
      header("Location: ../index.php?m=$m");
 }else if(isset($_POST['btnRegistrar'])){//Registrar
    $cod=$_POST['codigo'];
    $nom=$_POST['descripcion'];
    $marc=$_POST['marca'];
    $tall=$_POST['talla'];
    $color = $_POST['colores'];
    $categoria = $_POST['gcategoria'];
    $pre=$_POST['precio'];
    $cantidad = $_POST['cantidad'];
    
    $m=insertar($cod,$nom,$marc,$tall,$color,$categoria,$pre,$cantidad);
    header("Location: ../index.php?m=$m");
 }
 function consultartienda($id){
     return consultart($id);
 }
 function listatienda(){
   return gettienda();

 }

    
?>