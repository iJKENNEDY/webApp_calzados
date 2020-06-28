<?php
header("Location: ../index.php");
//
/**
 include("../models/tiendaDAO.php");
 if(isset($_POST['btnActualizar'])){//Modificar
    $id=$_POST['id'];
    $cod=$_POST['codigo'];
    $nom=$_POST['nombre'];
    $marc=$_POST['marca'];
    $tall=$_POST['talla'];
    $pre=$_POST['precio'];
    $m=modificar($id,$cod,$nom,$marc,$tall,$pre);
    header("Location: ../index.php?m=$m");
 }else if(isset($_GET['id'])){//Eliminar
      $id=$_GET['id'];
      $m=eliminartienda($id);
      header("Location: ../index.php?m=$m");
 }else if(isset($_POST['btnRegistrar'])){//Registrar
    $cod=$_POST['cod'];
    $nom=$_POST['nom'];
    $marc=$_POST['marc'];
    $tall=$_POST['tall'];
    $pre=$_POST['pre'];
    $m=insertar($cod,$nom,$marc,$tall,$pre);
    header("Location: ../index.php?m=$m");
 }
 function consultienda($id){
     return consultartienda($id);
 }
 function listatienda(){
   return gettienda();

 }*/

    
?>