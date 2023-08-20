<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MasterTools</title>
    <link rel="shortcut icon" href="imas/logo.png" />
</head>
<body>
    
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>MasterTools - Tu aliado en herramientas para construir tu futuro</title>
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
      <!-- BARRA NAVEGACION -->
      <nav class="navbar navbar-expand-lg bg-body-tertiary" >
    <div class="container-fluid">
      <a class="navbar-brand" aria-current="page" href="index.php">MasterTools</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="mision_vision.php">Mision y Vision</a>
          <a class="nav-link" href="catalogo.php">Herramientas</a>
          <a class="nav-link" href="registro.php">Registro Clientes</a>
          <a class="nav-link" href="login_registrop.php">Registro Producto</a>
        </div>
      </div>
    </div>
  </nav>
    
    
    

<?php

function connection(){

    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "mastertools";


    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}
?>

</---------------------/>

    <style>
    .pagination-container {
        display: flex;
        justify-content: center;
        margin-top: 20px; /* Ajusta el margen superior según tus necesidades */
    }
</style>

    