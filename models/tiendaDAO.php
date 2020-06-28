<?php

 include("conexion.php");
 
 //login
 $username = $_POST['username'];
 $password = $_POST['password'];
 
 global $cn;
 
 $sql = "SELECT username, password FROM usuarios 
    where usuario ='".$username."' and '".$password."'" ;
 if (mysqli_query($cn, $sql)){
    return "ingreso correctamente";
 }else{
     return "error en el usuario o clave";
 }
 
 /** function insertar($cod,$nom,$marc,$tall,$pre){
     global $cn;
     $sql="INSERT INTO producto(codigo,nombre,marca,precio,talla) VALUES ('".$cod."','".$nom."','".$marc."','".$pre."','".$tall."')";
     if(mysqli_query($cn,$sql)){
        return "Los datos fueron registrados con exito!!!";
     }else{
         return "ERROR, los datos no registraron???";
     }
 }
 function gettienda(){
global $cn;
$sql="SELECT * FROM producto";
return  mysqli_query($cn,$sql);
 }
 function consultartienda($id){
  global $cn;
  $sql="SELECT * FROM  producto WHERE id='".$id."'";
  return mysqli_query($cn,$sql);
 }
 function modificar($id,$cod,$nom,$marc,$tall,$pre){
   global $cn;
   $sql="UPDATE producto SET codigo='".$cod."',nombre='".$nom."', marca='".$marc."',talla='".$tall."',precio='".$pre."' WHERE id='".$id."' ";
   if(mysqli_query($cn,$sql)){
     return "Los datos fueron modificados de manera correcta";
   }else{
       return "ERROR, No se pudo actualizar los datos";
   }
 }
 function eliminartienda($id){
     global $cn;
     $sql="DELETE FROM producto WHERE  id='".$id."'"; 
     if(mysqli_query($cn,$sql)){
        return "El producto fue eliminado con Exito!!!";
     }else{
        return "ERROR, El producto NO eliminado";
     }
 }
 */
?>