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
                        <input type="date" name="fecha" disabled>
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
                            <td><input class="input-sm" type="text" name="categoria" ></td>
                            <td><input class="input-sm" type="text" name="producto" ></td>
                            <td><input class="input-sm" type="text" name="cantidad" ></td>
                            
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
                 <button type="submit" class="btn-sm btn-block btn-outline-primary bg-primary">generar venta</button>
             </div>
             <br>
             <div class="btn">
                 <button type="submit" class="btn-sm btn-block btn-outline-primary bg-primary">cancelar</button>
             </div>
             <br>
             <div class="btn">
                 <button type="submit" class="btn-sm btn-block btn-outline-primary bg-primary">imprimir</button>
             </div>
        </div>
    </div>
</div>

</body>