<?php 
    include("connection.php");
    $con=connection();

    // aca utilizamos el metodo GET porque se pasa un parametro //
    
    $id=$_GET['id'];
    $sql="SELECT * FROM producto WHERE id='$id'";

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
    <title>Editar Productos</title>

</head>
<body>



    <div class="users-form">

        <h1>Editar productos</h1>

        <form action="editp.php" method="POST">

           <input type="number" name="id" value="<?=$row['id']?>">

           <input type="text" name="nombre" placeholder="nombre" value="<?=$row['nombre']?>">

           <input type="number" name="precio" placeholder="precio" value="<?=$row['precio']?>">

           <input type="number" name="existencias" placeholder="existencias" value="<?=$row['existencias']?>">

            <input type="submit" value="Actualizar Información">

        </form>
</div>
</body>
</html>
