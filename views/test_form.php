<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test_form</title>
</head>

<body>

    <div>
        <div>
            <h3>formAdd</h3>
        </div>
        <div>
            <form action="test_form.php" method="post">
                producto <input type="text" name="producto" id="">
                <br>
                precio <input type="number" name="precio" id="">
                <br>
                cantidad <input type="number" name="cantidad" id="">
                <input type="submit" value="agregar" name="btnAgregar">
                <table border="1">

                    <tr>
                        <th>producto</th>
                        <th>precio</th>
                        <th>cantidad</th>
                        <th>total</th>
                        <th>accion</th>
                    </tr>
                    <?php 
    $pro = $_POST['producto'];
    $pre = $_POST['precio'];
    $can = $_POST['cantidad'];
    $total = $pre * $can;
        if (isset($_POST['btnAgregar'])) {
                      
     ?>
                    <tr>
                        <td><?php echo $pro; ?></td>
                        <td><?php echo $pre; ?></td>
                        <td><?php echo $can; ?></td>
                        <td><?php echo $total; ?></td>
                        <td><a href="">del</a></td>
                    </tr>
                <?php 
                }
                ?>
                </table>


            </form>

        </div>
    </div>


    
</body>

</html>