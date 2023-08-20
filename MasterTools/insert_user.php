<?php
include("connection.php");

$con = connection();
// el id es nulo porque se ha definido el campo como autoincrement //

$dpi=$_POST['dpi'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];

$sql="INSERT INTO  cliente  VALUES('$dpi','$nombre','$apellido','$telefono','$direccion')";

$query = mysqli_query($con, $sql);

if($query){
  header("location: registro.php");  
}
?>