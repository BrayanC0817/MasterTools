<?php
include("connection.php");

$con = connection();
// el id es nulo porque se ha definido el campo como autoincrement //

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$existencias=$_POST['existencias'];


$sql="INSERT INTO  producto  VALUES('$id','$nombre','$precio','$existencias')";

$query = mysqli_query($con, $sql);

if($query){
  header("location: registrop.php");  
}
?>