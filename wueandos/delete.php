<?php

include("conexion.php");
$con=conectar();

$Rut_id=$_GET['Rut'];
#echo $Rut_id;

$sql="DELETE FROM usuarios  WHERE Rut='$Rut_id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: dios.php");
    }
?>

