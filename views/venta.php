
<div>
    <div>
        <div>
            <h4>Venta</h4>
            <hr>
        </div>
       <div>
            <table border="2">
                <tr>
                <tr>
                    <td>DNI/RUC</td>
                    <td colspan="3"><input type="text" name="dni" id=""></td>
                    <td rowspan="4">
                        <fieldset>
                            <legend style="text-align: center;">R.U.C. N°20344567932</legend>
                            <table>
                                <tr>
                                    <th><h3>BOLETA DE VENTA</h3></th>
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

                        </fieldset>
                        
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
               
                </tr>
            </table>
            <br>

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
                    <td><button>agregar ventas</button></td>
                </tr>
            </table>

            <table style="width: 70%;" border="1">
                <tr>
                    <th>item</th><th>descripcion</th><th>P.Venta</th><th>Cantidad</th>
                    <th>I.G.V.</th><th>Importe</th><th>opciones</th>
                </tr>
                <tr>
                    <?php 
                        for ($i = 0; $i <8 ; $i++) {
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

<?php




?>