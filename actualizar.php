<!doctype php>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Guardando Informacion</title>
</head>

<body>
    <div class="container">
        
    </div>
    <div class="row mt-5"></div>
    <?php
    include "conexion.php";
    $Descripcion = $_POST["Descripcion"];
    $Cantidad = $_POST["Cantidad"];
    $Precio = $_POST["Precio"];
    $FechaElab = $_POST["FechaElab"];
    $FechaVenc = $_POST["FechaVenc"];
    $Id=$_POST['Id'];
    $UpdateSQL = "Update productos set Descripcion= '$Descripcion', Cantidad='$Cantidad', Precio='$Precio', FechaElab= '$FechaElab', FechaVenc = '$FechaVenc' where Id = $Id";

    if ($conexion->query($UpdateSQL) === TRUE) {
          echo '
           <div class="alert alert-success w-100" role="alert">
            <h4 class="alert-heading">Informacion actualizada</h4>
            <p>Los datos actualizados, puede consultar la informacion de'.$Descripcion.' '.$Cantidad.'
            en la lista.</p>
            <hr>
             <p class="mb-0">La pagina sera redireccionada en 5 segundos.</p>           
             </div>
              <meta http-equiv="refresh" content="5; url=index.php">
            ';
    }else {
        echo '
        <div class="alert alert-warning" role="alert">
          <h4 class="alert-heading">Informacion no almacenada</h4>
          <p> Ha ocurrido un error con los datos enviados y estos no fueron almacenados.</p>
          <hr>
          <p class="mb-0">
          Error:'.$InsertSQL.'<br>'.$conexion->error.'
          .</p> 
           </div>
            <meta http-equiv="refresh" content="5; url=index.php">
            ';
        }

    $conexion->close();

    ?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>