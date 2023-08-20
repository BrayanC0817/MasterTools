<?php 
    include("connection.php");
    $con=connection();

    // aca utilizamos el metodo GET porque se pasa un parametro //
    
    $dpi=$_GET['dpi'];
    $sql="SELECT * FROM cliente WHERE dpi='$dpi'";

    $query=mysqli_query($con, $sql);
    $row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/css.css">
    <title>Editar Usuarios</title>

</head>
<body>



    <div class="users-form">

        <h1>Editar usuario</h1>

        <form action="edit.php" method="POST">

           <input type="number" name="dpi" value="<?=$row['dpi']?>">

           <input type="text" name="nombre" placeholder="nombre" value="<?=$row['nombre']?>">

           <input type="text" name="apellido" placeholder="apellido" value="<?=$row['apellido']?>">

           <input type="text" name="telefono" placeholder="telefono" value="<?=$row['telefono']?>">

           <input type="text" name="direccion" placeholder="direccion" value="<?=$row['direccion']?>">

            <input type="submit" value="Actualizar Información">

        </form>
</div>
</body>
</html>
