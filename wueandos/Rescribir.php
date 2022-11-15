<?php

include("Conexion.php");
$con=conectar();
session_start();
$row="";

if(isset($_POST['actualizar'])){

    $nombre= $_POST['Nombre'];
    $Apellido= $_POST['Apellido'];
    $Rut=$_POST['Rut'];
    $Apodo= $_POST['Apodo'];
    $Contra= $_POST['Contra'];
    $Email_hi= $_POST['Email'];
    $GeneroGameFAV= $_POST['GeneroGameFAV'];
    $Sexo=$_POST['Sexo'];
    $Fecha=$_POST['Fecha'];
    $Edad=$_POST['Edad'];
    $Direccion=$_POST['Direccion'];

    $sql="UPDATE usuarios SET  Nombre='$nombre',Apellido='$Apellido',Apodo='$Apodo',Contra='$Contra',Email='$Email_hi',GeneroGameFAV='$GeneroGameFAV' WHERE Rut='$Rut'";
    $query=mysqli_query($con,$sql);

        if($query){
            Header("Location: dios.php");
        }
    }
elseif (isset($_POST['CambiarC'])) {
    $Contra= $_POST['Contra'];
    $Rut=$_POST['Rut'];
    $sql="UPDATE usuarios SET Contra='$Contra' WHERE Rut='$Rut'";
    $query=mysqli_query($con,$sql);

        if($query){
            Header("Location: inicioSecion.php");
        }
}
?>