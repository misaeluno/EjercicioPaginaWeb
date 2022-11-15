<?php
include("conexion.php");
$con=conectar();



?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Cambiar_contraseña</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
        crossorigin="anonymous">
        
        <link rel="stylesheet" href="css\global.css">
        <link rel="stylesheet" href="css\Registro.css">
        <link rel="stylesheet" href="css\Sesion.css">
    </head>

    <body>

<div class="contenedor">
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar fixed-top bg" style="background-color: rgb(101, 36, 28);">
          <div class="container-fluid">
            <a class="navbar-brand" 
            href="https://www.youtube.com/channel/UCBHlx7pl3584Qfv4pi-HX8A" 
            >WueanduS en Full HK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <div><a aria-current="page" href="Inicio.html" 
                    class="Boton" style="background-color: rgb(44, 56, 52);margin: 2px;">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span>
                    <h5>Inicio</h5>
                  </a></div>


                </li>
                <li class="nav-item">
                    <div><a href="inicioSecion.php" 
                        class="Boton" style="background-color: rgb(44, 56, 52);margin: 2px;">
                        <span id="span1"></span>
                        <span id="span2"></span>
                        <span id="span3"></span>
                        <span id="span4"></span>
                        <h5>Sesison</h5>
                      </a></div>
                </li>
                <li class="nav-item">
                    <div><a href="contancto.html" class="Boton" 
                        style="background-color: rgb(44, 56, 52);margin: 2px;">
                        <span id="span1"></span>
                        <span id="span2"></span>
                        <span id="span3"></span>
                        <span id="span4"></span>
                        <h5>Nosotros</h5>
                      </a></div>
                </li>
              </ul>
              
            </div>
          </div>
        </nav>
      </header>
    <!-------------------------------------------------------------------------->


    <!-------------------------------LOGO--------------------------------------->
    <aside id="R"><img src="imagenes\pruebapaintstol.jpg"style="width: 100%; height: 250px; padding-top: 80px;"></aside>
    <!-------------------------------------------------------------------------->


    <!--------------------IZQUIERDA--------------------------------------------->
    <div id="izquierda"><img src="imagenes\Player_Walking-export.gif" style="width: 100%; height: 100%;"></div>
    <!-------------------------------------------------------------------------->

     <!-----------------------CENTRO--------------------------------------------->
     <div class="Iniciar-sesion">
            <div id="Registro"></div>
            <div class="Datos">    
                <form action="validar.php" method="POST">

                    nombre:<input type="text" name="Nombre" placeholder="Nombre" 
                    required=true style="background-color: goldenrod;"><br></br>
                    
                    Rut:<input id="rut" type="text" name="Rut" placeholder="Rut"
                    required="true" style="background-color: goldenrod;"><br></br>

                    apellido:<input type="text" name="Apellido" placeholder="Apellido"
                    required=true style="background-color: goldenrod;"><br></br>
                    
                    Correo:<input type="email" name="Email" placeholder="Email" 
                    required=true style="background-color: goldenrod;"><br></br>
                    
                    <button type="submit" name="recu" style="background-color: goldenrod;" value="2">Recuperar contraseña</button>
                    <button type="submit" name="cambio" style="background-color: goldenrod;" value="3">cambiar contraseña</button>
                </form>
            </div>
        </div>
            
        <!-------------------------------------------------------------------------->