<?php
include ("conexion.php");

// login
// $username = $_POST['username'];
// $password = $_POST['password'];

global $cn;

/*
 * $sql = "SELECT username, password FROM usuarios
 * where usuario ='".$username."' and '".$password."'" ;
 * if (mysqli_query($cn, $sql)){
 * return "ingreso correctamente";
 * }else{
 * return "error en el usuario o clave";
 * }
 */
function insertar($codigo, $descripcion, $marca, $talla, $color, $categoria, $precio, $cantidad)
{
    global $cn;
    $sql = "INSERT INTO
         registrocalzados(codigo,descripcion,marca,talla,color,categoria,precio,cantidad)
         VALUES ('" . $codigo . "','" . $descripcion . "','" . $marca . "','" . $talla . "','" . $color . "',
                '" . $categoria . "','" . $precio . "','" . $cantidad . "')";
    if (mysqli_query($cn, $sql)) {
        return "Los datos fueron registrados con exito!!!";
    } else {
        return "ERROR, los datos no registraron???";
    }
}

function gettienda()
{
    global $cn;
    $sql = "SELECT * FROM registrocalzados";
    return mysqli_query($cn, $sql);
}

function consultarProducto($id)
{
    global $cn;
    $sql = "SELECT * FROM  registrocalzados WHERE codigo='" . $id . "'";
    return mysqli_query($cn, $sql);
}

function modificar($cod, $nom, $marc, $tall, $color, $categoria, $pre, $cantidad)
{
    global $cn;
    $sql = "UPDATE registrocalzados SET descripcion='" . $nom . "', marca='" . $marc . "',
        talla='" . $tall . "',color='" . $color . "',categoria='" . $categoria . "',precio='" . $pre . "',cantidad='" . $cantidad . "' 
        WHERE codigo='" . $cod . "' ";
    if (mysqli_query($cn, $sql)) {
        return "Los datos fueron modificados de manera correcta";
    } else {
        return "ERROR, No se pudo actualizar los datos";
    }
}

function eliminartienda($id)
{
    global $cn;
    $sql = "DELETE FROM registrocalzados WHERE  codigo='" . $id . "'";
    if (mysqli_query($cn, $sql)) {
        return "El producto fue eliminado con Exito!!!";
    } else {
        return "ERROR, El producto NO eliminado";
    }
}
?>