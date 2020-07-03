 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

    <link rel="stylesheet" type="text/css"  href="../resources/css/bootstrap.css">

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
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
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

    <div class="wrapper ">
        <div class="container-fluid">
            <div class="row">
                <div class="col ">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Productos</h2>
                        <a href="frmInsertar.php" class="btn btn-success pull-right">Agregar nuevos productos</a>
                    </div>
                    <?php
                    // Include config file
                    include '../models/conexion.php';
                    // Attempt select query execution
                    $sql = "SELECT * FROM registrocalzados";
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
                                        echo "<th width='380'>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['codigo'] . "</td>";
                                        echo "<td>" . $row['descripcion'] . "</td>";
                                        echo "<td>" . $row['marca'] . "</td>";
                                        echo "<td>" . $row['talla'] . "</td>";
                                        echo "<td>" . $row['color'] . "</td>";
                                        echo "<td>" . $row['categoria'] . "</td>";
                                        echo "<td>" . $row['precio'] . "</td>";
                                        echo "<td>" . $row['cantidad'] . "</td>";
                                        echo "<td >";
                                           
                                            echo '<a href="frmModificar.php?idC='.$row['codigo'].'" title="Update Record" data-toggle="tooltip"><span class="glyphicon glyphicon-pencil"></span></a>';
                                            echo "<a href='../controllers/tiendaController.php?id=". $row['codigo'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
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
 
                    // Close connection
                    mysqli_close($cn);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>






<?php
//----------------------------------------------------
///
/*
include ("../controllers/tiendaController.php");
echo "<table width='840'>";
echo "<tbody>";
echo "<tr>";
echo "<th  width='100'> codigo </th>";
echo "<th  width='100'> descripcion </th>";
echo "<th  width='100'> marca </th>";
echo "<th  width='100'> talla </th>";
echo "<th  width='100'> color </th>";
echo "<th  width='100'> categoria </th>";
echo "<th  width='100'> precio</th>";
echo "<th  width='100'> cantidad </th>";
echo "<th  width='100'></th>";
echo "<th  width='100'></th>";
echo "</tr>";
$sql = listatienda();
while ($row = mysqli_fetch_array($sql)) {
    echo "<tr>";
    
    echo "<td align 'center'>" . $row['codigo'] . "</td>";
    echo "<td align 'center'>" . $row['descripcion'] . "</td>";
    echo "<td align 'center'>" . $row['marca'] . "</td>";
    echo "<td align 'center'>" . $row['talla'] . "</td>";
    echo "<td align 'center'>" . $row['color'] . "</td>";
    echo "<td align 'center'>" . $row['categoria'] . "</td>";
    echo "<td align 'center'>" . $row['precio'] . "</td>";
    echo "<td align 'center'>" . $row['cantidad'] . "</td>";
    //echo '<td><a href="frmModificar.php?idC='.$row['codigo'].'"> Modificar</a></td>';
    //echo '<td><a href="../controllers/tiendaController.php?id='.$row['codigo'] . '"> Eliminar</a></td>';
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
*/
?>
    