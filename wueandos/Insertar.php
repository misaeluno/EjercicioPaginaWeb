<?php

include("Conexion.php");
$con=conectar();

$nombre= $_POST['Nombre'];
$Apellido= $_POST['Apellido'];
$Rut=$_POST['Rut'];
$Apodo= $_POST['Apodo'];
$Contra= $_POST['Contra'];
$Email= $_POST['Email'];
$GeneroGameFAV= $_POST['GeneroGameFAV'];
$Sexo=$_POST['Sexo'];
$Fecha=$_POST['Fecha'];
$Edad=$_POST['Edad'];
$Direccion=$_POST['Direccion'];

$sql="INSERT INTO usuarios VALUES('$Rut','$nombre','$Apellido','$Apodo','$Contra','$Email','$GeneroGameFAV','$Direccion','$Sexo','$Edad','$Fecha')";
$query=mysqli_query($con,$sql);

var_dump($sql);
var_dump($query);

if($query){
    header("Location: inicioSecion.php");
}
else{
    echo "adios";
}
?>