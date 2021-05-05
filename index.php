<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Lista de Productos</title>
</head>

<body>
    <div class="container">
        <?php
        include "conexion.php";
        $filas = $conexion->query("Select * from productos");
        $conexion->close()
        ?>
        <div class="row mt-5">
            <div class="card w-100">
                <div class="card-header">
                    <h4 class="card-title">
                        Listado de Productos
                        <a href="nuevo.html" class="btn btn-primary float-right">Nuevo</a>
                    </h4>
                </div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Acciones</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>FechaElab</th>
                            <th>FechaVenc</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($filas as $fila) {
                            echo '
                         
                            <tr>

                            <th scope="row">
                                <a href="editar.php?Id=' . $fila['Id'] . '" class="btn btn-primary">Actualizar</a>
                                <a href="eliminar.php?Id=' . $fila['Id'] .'&Descripcion='.$fila['Descripcion'] .'" class="btn btn-danger">Eliminar</a>
                            </th>
                               
                                <td>' . $fila['Descripcion'] . '</td>
                                <td>' . $fila['Cantidad'] . '</td>
                                <td>' . $fila['Precio'] . '</td>
                                <td>' . $fila['FechaElab'] . '</td>
                                <td>' . $fila['FechaVenc'] . '</td>
                             </tr>
                        ';
                        }
                        ?>
            </div>
            </td>
            </tbody>
            </table>
            <div class="row mt-3">

            </div>


        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>