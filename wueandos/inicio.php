<?php
session_start();

include("conexion.php");
$con=conectar();
$row="";
$mostrar="";
if(isset($_SESSION['Rut'])){
    $login=$_SESSION['Rut'];
    $sql= "SELECT Nombre FROM usuarios WHERE Rut='$login'";
    $query=mysqli_query($con,$sql);
   
    while($row=mysqli_fetch_array($query)){
        $mostrar=$row['Nombre'];
        echo $row['Nombre'];
    }
}
else{
    $mostrar="";
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Inicio</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">

        
        
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

        <link rel="stylesheet" href="css\global.css">
        <link rel="stylesheet" href="css\Inicio.css">

    

</head>
<body>
    
    <div class="contenedor">
        <header>
            <!-- Fixed navbar -->
            <nav class="navbar navbar-expand-md navbar fixed-top bg" style="background-color: rgb(101, 36, 28);">
              <div class="container-fluid">
                <a class="navbar-brand" 
                href="https://www.youtube.com/channel/UCBHlx7pl3584Qfv4pi-HX8A" style="color: rgb(161, 107, 49)"
                >WueanduS en Full HK</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                      <div><a aria-current="page" href="Inicio.php" 
                        class="Boton" style="background-color: rgb(44, 56, 52);margin: 2px;">
                        <span id="span1"></span>
                        <span id="span2"></span>
                        <span id="span3"></span>
                        <span id="span4"></span>
                        <h5>ESTAS AQUI</h5>
                      </a></div>


                    </li>
                    <?php if(!empty($mostrar)): ?>
                        <li class="nav-item">
                            <div><a href="CerrarSession.php" 
                                class="Boton" style="background-color: rgb(44, 56, 52);margin: 2px;">
                                <span id="span1"></span>
                                <span id="span2"></span>
                                <span id="span3"></span>
                                <span id="span4"></span>
                                <h5>Cerrar Session</h5>
                            </a></div>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <div><a href="inicioSecion.php" 
                                class="Boton" style="background-color: rgb(44, 56, 52);margin: 2px;">
                                <span id="span1"></span>
                                <span id="span2"></span>
                                <span id="span3"></span>
                                <span id="span4"></span>
                                <h5>Sesion</h5>
                            </a></div>
                        </li>
                    <?php endif ?>
                    <li class="nav-item">
                        <div><a href="contancto.html" class="Boton" 
                            style="background-color: rgb(44, 56, 52);margin: 2px;">
                            <span id="span1"></span>
                            <span id="span2"></span>
                            <span id="span3"></span>
                            <span id="span4"></span>
                            <h5>Contacto</h5>
                          </a></div>
                    </li>
                  </ul>
                  <div>
                    <h1 ><?php echo utf8_decode($mostrar);?></h1>
                  </div>
                </div>
              </div>
            </nav>
          </header>
        <!-------------------------------------------------------------------------->

        <!-------------------------------LOGO--------------------------------------->
        <aside style="padding-top: 100px">
            <main class="container">
                        
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner"  >
                    <div class="carousel-item active">
                    <img src="imagenes\WueandusEnFullHK.jpg" class="d-block w-100" alt="img1" height="350px" >
                    </div>
                    <div class="carousel-item">
                    <img src="imagenes\pruebapaintstol.jpg" class="d-block w-100" alt="img2" height="350px"  >
                    </div>
                    <div class="carousel-item">
                    <img src="imagenes\maestros_pokemon.jpg" class="d-block w-100" alt="img3" height="350px"  >
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            </main>
        </aside>
        <!-------------------------------------------------------------------------->
        
        <!--------------------IZQUIERDA--------------------------------------------->
        <div id="izquierda"><img src="imagenes\Player_Walking-export.gif" style="width: 100%; height: 100%;"></div>
        <!-------------------------------------------------------------------------->
        

        <!-----------------------CENTRO--------------------------------------------->
        <div class="Contenido">
            <div id="Video"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/tOadTZoqjEM" 
                title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe></div>
            <div id="imagen"><img src="imagenes\SinTítulo.png" style="width: 100%; height: 150px;"></div>
            
            <div id="datos"><br>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt error unde quis consequatur. 
                Earum corrupti ut illo doloremque ab rerum ad minus, in est praesentium pariatur, dolorum natus nemo ratione!<br>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt error unde quis consequatur. 
                Earum corrupti ut illo doloremque ab rerum ad minus, in est praesentium pariatur, dolorum natus nemo ratione!<br>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt error unde quis consequatur. 
                Earum corrupti ut illo doloremque ab rerum ad minus, in est praesentium pariatur, dolorum natus nemo ratione!<br>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt error unde quis consequatur. 
                Earum corrupti ut illo doloremque ab rerum ad minus, in est praesentium pariatur, dolorum natus nemo ratione!<br></div>
        </div>
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
            </div>
        </footer>
        <!-------------------------------------------------------------------------->
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
    crossorigin="anonymous"></script>

</body>
</html>