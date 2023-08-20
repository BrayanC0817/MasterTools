<?php

include("connection.php");

$con = connection();
// obteniendo los datos del formulario por medio del metodo POST

$id=$_POST["id"];

$nombre = $_POST['nombre'];

$precio = $_POST['precio'];

$existencias = $_POST['existencias'];

$sql="UPDATE producto SET nombre='$nombre', precio='$precio', existencias='$existencias' WHERE id='$id'";

$query = mysqli_query($con, $sql);


if($query){

    Header("location: registrop.php");

};

?>