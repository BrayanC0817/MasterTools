<?php

include("connection.php");

$con = connection();
// obteniendo los datos del formulario por medio del metodo POST

$dpi=$_POST["dpi"];

$nombre = $_POST['nombre'];

$apellido = $_POST['apellido'];

$telefono = $_POST['telefono'];

$direccion = $_POST['direccion'];
    

$sql="UPDATE cliente SET nombre='$nombre', apellido='$apellido', telefono='$telefono' WHERE dpi='$dpi'";

$query = mysqli_query($con, $sql);


if($query){

    Header("location: registro.php");

};

?>