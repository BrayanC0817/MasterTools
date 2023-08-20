<?php

include("connection.php");

$con = connection();

$sql = "SELECT * FROM producto";
$query=mysqli_query($con,$sql);
 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>MasterTools </title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="shortcut icon" href="imas/logo.png" />
</head>

<body>
    
      

    <div class="users-form">

        <h1>MASTER TOOLS</h1> <br><br>
        <div class="selector1">
        <form action="insert_product.php" method="POST">

            <input type="number" name="id" placeholder="Id">

            <input type="text" name="nombre" placeholder="Nombre">

            <input type="number" name="precio" placeholder="Precio">

            <input type="number" name="existencias" placeholder="Existencias">

            <input type="submit" value="Agregar">
          
        </form>
        </div> 
    </div>
    <div class="producto"> 
    <div class="center">
        <h2>Clientes registrados</h2>

        <table>

        <thead>

                <tr>
                    <th>ID</th>

                    <th>Nombre</th>

                    <th>Precio</th>  

                    <th>Existencias</th>

                    <th></th>

                    <th></th>

                </tr>

            </thead>
            
            <tbody>

<!-- para acceder a la tabla y los registros  -->



                <?php
                    $query = mysqli_query($con, $sql);
                 while ($row = mysqli_fetch_array($query)): ?>

                    <tr>

                        <th><?=  $row['id'] ?></th>

                        <th><?= $row['nombre'] ?></th>

                        <th><?= $row['precio'] ?></th>

                        <th><?= $row['existencias'] ?></th>


                       <!-- pasando el parametro id -->
                        <th><a href="updatep.php?id=<?= $row['id'] ?>" class="producto">Editar</a></th>

                        <th><a href="deletep.php?id=<?= $row['id'] ?>" class="producto" >Eliminar</a></th>

                    </tr>

                <?php endwhile; ?>

            </tbody>

        </table>
        </div>
    </div>
    <br>
    <br>
    <br> 
    <br>
    <br>
    <br><br>
    <br>
    <br> 
    <br>
    <br>
    <br><br>
    <br>
    <br> 
    <br>
    <br>
    <br>
    <footer class="footer">
    <div class="footer__content">
        <div class="footer__logo">
            <img src="imas/logo.png" alt="Logo de Ferretería MasterTools">
        </div>
        <div class="footer__contact">
            <h3><i class="fa fa-map-marker"></i> Contacto</h3>
            <p>[Dirección de la Ferretería]</p>
            <p><i class="fa fa-phone"></i> Teléfono: [Número de Teléfono]</p>
            <p><i class="fa fa-envelope"></i> Correo: <a href="mailto:info@ferreteriaejemplo.com">info@ferreteriaejemplo.com</a></p>
        </div>
        <div class="footer__social">
            <h3><i class="fa fa-share-alt"></i> Síguenos</h3>
            <a href="[Enlace a Facebook]"><i class="fa fa-facebook"></i></a>
            <a href="[Enlace a Twitter]"><i class="fa fa-twitter"></i></a>
            <a href="[Enlace a Instagram]"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <div class="footer__copyright">
        <p>&copy; 2023 Ferretería MasterTools. Todos los derechos reservados.</p>
    </div>
</footer>


</body>




</html>