<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>PHP_REGISTRO</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
        crossorigin="anonymous">
        
        <link rel="stylesheet" href="css\global.css">
        <link rel="stylesheet" href="css\Registro.css">
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
    <table align="center" border="12" style="width: 80%; height: 300px; background-color: brown;">
        <!--NAV-->
        <tr ><!--FILA_1-->
            <th colspan="3">
                <h2>Unirse a la comunidad te dara apceso a las verciones betas de los juegos, ademas de<br>
                    poder comentar en los foros dejando tu reseñia, o comentando ideas para futuros proyectos</h2>
            </th>
        </tr>
        <tr>
            <td>
                <!---------FORMULARIO----------------------------------------------------------------------->
                <form action="Insertar.php" method="POST">
                <table align="center" border="3" style="width: 100%; height: 300px; background-color: gray;">
                    <tr><!--NOMBRE-->
                        <td> 
                            <label form="nombre">Nombre</label> 
                        </td>
                        <td> 
                            <input id="nombre" type="text" name="Nombre" placeholder="Nombre"
                            style="background-color: goldenrod;" required autocomplete="off">
                        </td>  
                    </tr><!--FIN NOMBRE-->
                    <tr><!--APELLIDO-->   
                        <td>
                            <label form="apellido">Apellido</label> 
                        </td>
                        <td>
                            <input id="apellido" type="text" name="Apellido" placeholder="Apellido"
                            style="background-color: goldenrod;" required autocomplete="off"> 
                        </td>
                    </tr><!--FIN APELLIDO-->
                    <tr><!---RUT---->
                        <td>
                            <label form="rut">Rut</label> 
                        </td>
                        <td>
                            <input id="rut" type="text" name="Rut" placeholder="Rut"
                            style="background-color: goldenrod;" required autocomplete="off"> 
                        </td>
                    </tr><!--FIN RUT-->
                    <tr><!--APODO-->
                        <td>
                            <label form="apodo">Usuario</label> 
                        </td>
                        <td>
                            <input id="apodo" type="text" name="Apodo" placeholder="Apodo"
                            style="background-color: goldenrod;" required autocomplete="off">  
                        </td>
                    </tr><!--FIN APODO-->
                    <tr><!--CONTRASEÑA-->
                        <td>
                            <label form="contra">Contraseña</label> 
                        </td>
                        <td>
                            <input id="contra" type="password" name="Contra" placeholder="Contra"
                            style="background-color: goldenrod;" required autocomplete="off">  
                        </td>
                    </tr><!--FIN CONTRASEÑA-->
                    <tr><!--EMAIL-->    
                        <td>
                            <label form="email">Email</label> 
                        </td>
                        <td>
                            <input id="email" type="text" name="Email" placeholder="Email"
                            style="background-color: goldenrod;" required>  
                        </td>
                    </tr><!--FIN EMAIL-->
                    <tr><!--TIPO DE JUEGO FAV-->
                        <td>
                            <p>Genero de vidojuego favorito</p>
                        </td>
                        <td>
                            <input list="fav" name="GeneroGameFAV" placeholder="GeneroGameFAV" 
                            style="background-color: goldenrod;">
                            <datalist id="fav">
                                <option>RPG</option>
                                <option>Accion</option>
                                <option>Simulacion</option>
                                <option>Carrera</option>
                                <option>MMO</option>
                                <option>Gasha</option>
                                <option>Shooter</option>
                            </datalist>
                        </td>
                        <tr><!-----SEXO---------------->
                                                    <td>
                                                        <p>Sexo</p>
                                                    </td>
                                                    <td>
                                                    <label for="men" style="background-color: goldenrod;">Hombre</label>
                                                    <input id="men" type="radio" name="Sexo" placeholder="Sexo"
                                                    value="Hombre"><br>

                                                    <label for="women" style="background-color: goldenrod;">Mujer</label>
                                                    <input id="women" type="radio" name="Sexo" placeholder="Sexo"
                                                    value="Mujer"><br>
                                                    
                                                    <label for="otro" style="background-color: goldenrod;">Otro</label>
                                                    <input id="otro" type="radio" name="Sexo" placeholder="Sexo"
                                                    value="otro"><br>
                                                    </td>
                                                </tr><!--FIN SEXO-------------->
                                                <tr><!---FECHA NACIMIENTO----------------->
                                                    <td>
                                                       <label form="Fecha">Fecha</label> 
                                                    </td>
                                                    <td>
                                                      <input id="Fecha" type="date" name="Fecha" placeholder="Fecha" 
                                                        style="background-color: goldenrod;" required>
                                                    </td>
                                                </tr><!---FIN EDAD------------>
                                                <tr><!----DIRECCION----------->
                                                    <td>
                                                        <label form="Direccion">Direccion</label>
                                                    </td>
                                                    <td>
                                                    <textarea rows="2" cols="50" id="Direccion" name="Direccion" placeholder="Direccion"  
                                                    style="background-color: goldenrod;"></textarea>
                                                    </td>
                                                </tr><!---FIN DIRECCION------->
                                                <tr><!---EDAD----------------->
                                                    <td>
                                                        <label form="Edad">Edad</label> 
                                                    </td>
                                                    <td>
                                                        <input id="Edad" type="text" name="Edad" placeholder="Edad"
                                                        style="background-color: goldenrod;" required >
                                                    </td>
                                                </tr><!----FIN EDAD---------->
                    </tr><!--FIN TIPO DE JUEGO FAV-->
                    <tr>
                        <td></td>
                        <td><input  type="submit" value="Enviar" style="background-color: red;"></td>
                        <td><input type="reset" value="Borrar todo" style="background-color: red;"></td> 
                    </tr>
                    <tr>
                        <!-- AGREGAE MAS WUAS-->
                        </tr>
                    </table>
                    </form>
                </td>
            </tr>
        </table>
        
    <!-------------------------------------------------------------------------->

    <!---------------------DERECHA---------------------------------------------->
    <div id="derecha"><img src="imagenes\dragon_mira_izquierda.gif" style="width: 100%; height: 100%;"></div>
    <!-------------------------------------------------------------------------->


    <!--------------------------FINAL------------------------------------------->
    <footer>
        <div><h6>Misaeluno@gmail.com<br>
            misael Gallardo<br>
            +56957357854<br>
            Copiapo</h6>
        </div>
        <div><h6>Todos los derechos reservador por la "Ley N° 17.336 de Propiedad Intelectual<br> 
            y Derecho de Autor"</h6>
        </div>
        <div class="link">
            <div class="icons">
                <a href="https://discord.gg/2WvvrE4r" target="_blank"
                    class="icon icon-discord">
                    <img src="imagenes\discord.png" style="width: 40px;height: 30px;">
                    <i class="ri-discord-line"></i>
                </a>
            </div>
            <div class="icons">
                <a href="#" target="_blank"
                class="icon icon-instagram">
                <img src="imagenes\instagram.png" style="width: 40px;height: 30px;">
                <i class="ri-instagram-line"></i>
                </a>
            </div>
    </footer>
    <!-------------------------------------------------------------------------->
</div>


</body>
</html>