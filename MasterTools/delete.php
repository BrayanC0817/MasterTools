<?php
include("connection.php");

$con = connection();

$dpi=$_GET["dpi"];

$sql="DELETE FROM cliente WHERE dpi='$dpi'";

$query = mysqli_query($con, $sql);


if($query){

    Header("location: registro.php");

}else{


}

?>