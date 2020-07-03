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
    <div>
        <div>
            <h4>Venta</h4> 
        </div>
       <div class="container">
            <table class="table" border="1">
                
                <tr class=""  style="width: 122">
                    <td>DNI/RUC</td>
                    <td colspan="3"><input type="text" name="dni" id=""></td>
                    <td rowspan="4">
                        <div class="card " style="width: 122">
                            <label style="text-align: center;">R.U.C. N°20344567932</label>
                            <table  style="text-align: center; width: 122;">
                                <tr>
                                    <th colspan="2"><h3 style="text-align: center">BOLETA DE VENTA</h3></th>
                                </tr>
                                <tr>
                                    <td>Serie</td>
                                    <td>N° Comprobante</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="serie"></td>
                                    <td><input type="text" name="numComprobante"></td>
                                </tr>
                            </table>

                        </div>
                        
                    </td>
                </tr>
                <tr>
                    <td >Cliente</td>
                    <td colspan="3" ><input type="text" name="cliente" id="" style="width: 100%;"></td>
                </tr>
                <tr>
                    <td >Direccion</td>
                    <td colspan="3"><input style="width: 100%;" type="text" name="direccion" id=""></td>
                    <br>
                </tr>
                <tr>
                    <td>Tipo Persona</td><td>
                        <select name="tipoPersona" id="">
                            <option value="natural">Natural</option>
                            <option value="juridica">Juridica</option>
                        </select>
                    </td>
                    <td>Fecha</td><td><input type="date" name="fecha" id=""></td>
                </tr>
                
            </table> 

            <table>
                <tr>
                    <td>
                        <label for="categoria">Categoria</label>
                            <select name="categoria">
                                <option value="zapatos">zapatos</option>
                                <option value="zapatillas">zapatillas</option>
                                <option value="sandalias">sandalias</option>
                            </select>
                    </td>
                    <td>
                        producto <input type="text" name="producto">
                    </td>
                </tr>
                <tr>
                    <td>
                        precio Compra s/. <input type="text" name="pcompra">
                    </td>
                    <td>stock <input type="text" name="stock"></td>
                    <td>cantidad <input type="text" name="cantidad"></td>

                </tr>
                <tr>
                    <td><input type="submit" value="agregar" name="btnAgregarCarrito"></td>
                </tr>
            </table>

            <table style="width: 70%;" border="1">
                <tr>
                    <th>item</th><th>descripcion</th><th>P.Venta</th><th>Cantidad</th>
                    <th>I.G.V.</th><th>Importe</th><th>opciones</th>
                </tr>
                <tr>
                    <?php 
                        for ($i = 0; $i <3 ; $i++) {
                            echo "<tr>";
                            for ($j = 0; $j <7 ; $j++) {
                             $valor= $j* rand(1,50);
                               echo "<td>$valor</td>"; 
                            }
                            echo "</tr>";
                            
                        }
                     ?>
                </tr>
            </table>
            <table border="1" style="width: 70%;">
                <tr>
                    <th>SUB-TOTAL</th>
                    <th>I.G.V.</th>
                    <th>TOTAL</th>
                </tr>
                <tr>
                    <td><label>gsfgsdfg sgdfsg gsdfgsdf</label></td>
                    <td><label>gggggggggggrrrrrrrrrr</label></td>
                    <td><label>gsrrsgrsgr</label></td>
                </tr>

                <tr>
                    <td colspan="3">
                        <input type="submit" name="btnGenerarVenta" value="generar venta">
                        <input type="submit" name="btnCancelar" value="cancelar">
                    </td>
                </tr>
            </table>
            
       </div>
    </div>
</div>

</body>