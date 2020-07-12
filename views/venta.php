<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <link rel="stylesheet" type="text/css"  href="../resources/css/bootstrap.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 777px;
            margin: 0 auto;
            font-size: 14px;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
        .bg-qwerty{
            background-color: Tomato;
           
        }
    </style> 
</head>
<body>
<div>
    <div
        class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm ">
        <h5 class="my-0 mr-md-auto font-weight-normal">Calzados XYZ</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="../index.php">Inicio</a> <a
                class="p-2 text-dark" href="frmInsertar.php">Insertar</a> 
                <a class="p-2 text-dark" href="frmConsultar.php">Consultar</a> 
                <a class="p-2 text-dark" href="venta.php">Boleta</a>
        </nav>
        <a class="btn btn-outline-primary" href="login.php">Login</a>
    </div>

    <div class="container-xl">
        <h2>-----VENTA------</h2>
        
        <form action="venta.php" method="post">

        <div class="col-md-5 card  p-0 m-0" >
            <div class="card-header bg-info ">
                <h4 class="my-0 font-weight-normal">boleta</h4>
            </div>    
            <table class="table">
                <tr class="">
                    <td><b>serie</b></td>
                    <td><b>Nro boleta</b></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="serie" disabled>
                    </td>
                    <td style="width: 50%;">
                        <input type="text" name="nroBoleta" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dni">dni/ruc</label>
                    </td>
                    <td style="width: 50%;">
                        <input type="text" name="dni">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cliente">cliente</label>
                    </td>
                    <td style="width: 50%;">
                        <input type="text" name="cliente">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="direccion">direccion</label>
                    </td>
                    <td style="width: 50%;">
                        <input type="txt" name="direccion">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="fecha">fecha</label>
                    </td>
                    <td style="width: 50%;">
                        <input type="date" name="fecha" >
                    </td>
                </tr>
                <tr>
                    <td>Tipo de Pago</td>
                    <td>
                        <input class="input-sm" type="text" name="tipopago" >
                    </td>

                </tr>
            </table>

        </div>

        <div class="col-md-6 card" >
            <div >
                <div class="table-sm bg-success">
                <fieldset>
                    <legend>Producto_venta</legend>
                    <table>
                        <tr>
                            <th>categoria</th>
                            <th>producto</th>
                            <th>cantidad</th>

                        </tr>
                        <tr>
                            <td><input class="input-sm" type="text" name="producto" ></td>
                            <td><input class="input-sm" type="number" name="precio" ></td>
                            <td><input class="input-sm" type="number" name="cantidad" ></td>
                            
                        </tr>
                    </table>
                </fieldset>
                <br><br>
                </div>

            <table class="table" border="1">
                <tr>
                    <th>Nro</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>accion</th>
                </tr>
                <?php for ($i = 0; $i < 3; $i++) { ?>
                <tr>
                    
                    <td>1</td>
                    <td>botines marron</td>
                    <td>324.33</td>
                    <td>2</td>
                    <td>639</td>
                    <td><a href="#">x</a></td>
                
                </tr>
                <?php } ?>
                <tr>
                  
            </table>    
            <div>
                <fieldset>
                    <legend>precio venta</legend>
                    <table>
                        <tr>
                            <th>subtotal</th>
                            <th>igv</th>
                            <th>total_pagar</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="subtotal" disabled></td>
                            <td><input type="text" name="igv" disabled></td>
                            <td><input type="text" name="totalpagar" disabled></td>
                        </tr>
                    </table>
                </fieldset>
            </div>
            </div>
        </div>

        <div class="col-md-1 bg-danger center">
             <div class="btn">
                 <button type="submit" class="btn-sm btn-block btn-outline-primary bg-primary">Agregar</button>
             </div>
             <br>
             <div class="btn">
                 <button type="submit" name="btnGenerarVenta" class="btn-sm btn-block btn-outline-primary bg-primary">generar venta</button>
             </div>
             <br>
             <div class="btn">
                 <button type="submit" class="btn-sm btn-block btn-outline-primary bg-primary">cancelar</button>
             </div>
             <br>
             <div class="btn">
                 <button type="submit" name="btnimprimir" class="btn-sm btn-block btn-outline-primary bg-primary">imprimir</button>
             </div>
        </div>
        </form>
    </div>
</div>

</body>

<?php 
    
    require "../models/conexion.php";

    if (isset($_POST['btnGenerarVenta'])) {
        global $cn;

        $dni = $_POST['dni'];
        $cliente = $_POST['cliente'];
        $direccion = $_POST['direccion'];
        $fecha = $_POST['fecha'];
        $pago = $_POST['tipopago'];

        $producto =$_POST['producto'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];

        $sql = "INSERT INTO boleta
         VALUES (NULL,'" . $dni . "','" . $cliente . "','" . $direccion . "','" . $fecha . "',
                '" . $pago . "','" . $producto . "','" . $precio . "','" . $cantidad . "')";
    if (mysqli_query($cn, $sql)) {
        
        return "<script type='text/javascript'>alert('se agrego correctamente');</script>";
        } else {
        return "ERROR, los datos no registraron???";
     }
    }


 ?> 

<?php if (isset($_POST['btnimprimir'])) {
    
}

 $sql = "SELECT * FROM boleta";
                    if($result = mysqli_query($cn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='bg-qwerty table table-bordered table-striped' border=1>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th width='155'>Descripcion</th>";
                                        echo "<th width='155'>marca</th>";
                                        echo "<th width='155'>talla</th>";
                                        echo "<th width='155'>color</th>";
                                        echo "<th width='155'>categoria</th>";
                                        echo "<th width='155'>precio</th>";
                                        echo "<th width='155'>cantidad</th>";
                                        echo "<th width='380'>asdas</th>";
                                        echo "<th width='380'>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['dni'] . "</td>";
                                        echo "<td>" . $row['cliente'] . "</td>";
                                        echo "<td>" . $row['direccion'] . "</td>";
                                        echo "<td>" . $row['fecha'] . "</td>";
                                        echo "<td>" . $row['tipopago'] . "</td>";
                                        echo "<td>" . $row['producto'] . "</td>";
                                        echo "<td>" . $row['precio'] . "</td>";
                                        echo "<td>" . $row['cantidad'] . "</td>";
                                        echo "<td >";
                                           
                                            
                                        echo "</td>";

                                         

                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($cn);
                    }

 ?>
     