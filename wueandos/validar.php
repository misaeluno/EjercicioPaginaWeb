<?php

include("conexion.php");
$con=conectar();

session_start();
$row="";

if(isset($_POST['entrar'])){

  $nombre= $_POST['Nombre'];
  $Rut=$_POST['Rut'];
  $Contra= $_POST['Contra'];
  $Email= $_POST['Email'];

  $sql="SELECT * FROM usuarios WHERE Rut='$Rut' and Contra='$Contra' and Nombre='$nombre'";
  $resultado=mysqli_query($con,$sql);
  $filas=mysqli_num_rows($resultado);
  if($filas){
    $_SESSION['Rut']=$Rut;
      header("location: inicio.php");
  }
  else{
    header("location:Registro.php");
  }
  mysqli_free_result($resultado);
  mysqli_close($conexion);
}
elseif(isset($_POST['recu'])){

  $nombre= $_POST['Nombre'];
  $Rut=$_POST['Rut'];
  $Email= $_POST['Email'];
  $apellido=$_POST['Apellido'];

  $sql="SELECT Contra FROM usuarios WHERE Rut='$Rut' and Email='$Email' and Nombre='$nombre' and Apellido='$apellido'";
  $query=mysqli_query($con,$sql);
   
    while($row=mysqli_fetch_array($query)){
      $mostrar=$row['Contra'];
      echo $row['Contra'];
    }
    $_SESSION['Rut']=$Rut;
    header("location: inicioSecion.php");
}
elseif (isset($_POST['cambio'])) {
  echo "hola";
  $nombre= $_POST['Nombre'];
  $Rut=$_POST['Rut'];
  $Email= $_POST['Email'];
  $apellido=$_POST['Apellido'];

  $sql="SELECT Contra FROM usuarios WHERE Rut='$Rut' and Email='$Email' and Nombre='$nombre' and Apellido='$apellido'";
  $resultado=mysqli_query($con,$sql);
  $filas=mysqli_num_rows($resultado);
  if($filas){
    $_SESSION['Rut']=$Rut;
      header("location: CambiarContra.php");
  }
}

elseif (isset($_POST['buscar'])) {
  $Rut=$_POST['buscar'];
  $sql="SELECT Rut FROM usuarios WHERE Rut='$Rut' ";
  $resultado=mysqli_query($con,$sql);
  $filas=mysqli_num_rows($resultado);
  if($filas){
    $_SESSION['Rut']=$Rut;
      header("location: dios.php");
  }
  else{
    echo "hola";
    session_unset();
    
    session_destroy();
    
    header("location: dios.php");
}
}

?>