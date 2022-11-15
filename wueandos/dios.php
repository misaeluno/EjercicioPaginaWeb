<?php 
    session_start();
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);

    $row="";
    $mostrar="";
    if(isset($_SESSION['Rut'])){
        #echo "hola";
        $login=$_SESSION['Rut'];
        $sql= "SELECT * FROM usuarios WHERE Rut='$login'";
        $query=mysqli_query($con,$sql);
       
        while($row=mysqli_fetch_array($query)){
            $mostrar=$row;
            #echo $row['Nombre'];
        }
    }
    else{
        echo "adios";
        $mostrar="";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DIOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script type="text/javascript">
            function confirmacion(){
                var repuesta = confirm("Estas seguro que desesas Eliminar al usuario");
                if(repuesta){
                    return TRUE;
                }
                else{
                    return FALSE;
                }
            }
        </script>


    </head>
    <body>
            <div>
                    <div class="row"> 
                         
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                            <!---------FORMULARIO----------------------------------------------------------------------->
                                            <form action="Insertar.php" method="POST">
                                            <table style="background-color: aqua">
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
                                                        <label form="apellido">Rut</label> 
                                                    </td>
                                                    <td>
                                                        <input id="apellido" type="text" name="Rut" placeholder="Rut"
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
                                                </tr><!--FIN TIPO DE JUEGO FAV-->
                                                
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
                        </div>
                    </div>
                    <div>
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>nombre</th>
                                        <th>Apellido</th>
                                        <th>Rut</th>
                                        <th>Apodo</th>
                                        <th>Contra</th>
                                        <th>Email</th>
                                        <th>GeneroGameFAV</th>
                                        <th>Sexo</th>
                                        <th>Edad</th>
                                        <th>Direccion</th>
                                        <th>Fecha</th>
                                        <form action="validar.php" method="POST">
                                            
                                            <th><input type="text" name="buscar" placeholder="buscar por RUT" ></th>

                                            <th><button type="submit" name="111" value="5">buscar</button></th>
                                        </form>
                                    </tr>
                                </thead>

                                <tbody>

                                <?php if(!empty($mostrar)): ?>
                                    <tr>
                                        <th><?php  echo $mostrar['Nombre']?></th>
                                        <th><?php  echo $mostrar['Apellido']?></th>
                                        <th><?php  echo $mostrar['Rut']?></th>
                                        <th><?php  echo $mostrar['Apodo']?></th>
                                        <th><?php  echo $mostrar['Contra']?></th>
                                        <th><?php  echo $mostrar['Email']?></th>  
                                        <th><?php  echo $mostrar['GeneroGameFAV']?></th>   
                                        <th><?php  echo $mostrar['Sexo']?></th>
                                        <th><?php  echo $mostrar['Edad']?></th>
                                        <th><?php  echo $mostrar['Direccion']?></th>
                                        <th><?php  echo $mostrar['Fecha']?></th> 
                                        <th><a href="actualizar.php?Rut=<?php echo $row['Rut'] ?>" class="btn btn-info">Editar</a></th>
                                        <th><a href="delete.php?Rut=<?php echo $row['Rut'] ?>"><button type="button" class="btn btn-danger" onclick="return confirmacion()">Eliminar</button></a></th>
                                    </tr>


                                    <?php else: ?>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                        <tr>
                                            <th><?php  echo $row['Nombre']?></th>
                                            <th><?php  echo $row['Apellido']?></th>
                                            <th><?php  echo $row['Rut']?></th>
                                            <th><?php  echo $row['Apodo']?></th>
                                            <th><?php  echo $row['Contra']?></th>
                                            <th><?php  echo $row['Email']?></th>  
                                            <th><?php  echo $row['GeneroGameFAV']?></th>   
                                            <th><?php  echo $row['Sexo']?></th>
                                            <th><?php  echo $row['Edad']?></th>
                                            <th><?php  echo $row['Direccion']?></th>
                                            <th><?php  echo $row['Fecha']?></th> 
                                            <th><a href="actualizar.php?Rut=<?php echo $row['Rut'] ?>" class="btn btn-info">Editar</a></th>
                                            <th><a href="delete.php?Rut=<?php echo $row['Rut'] ?>"><button type="button" class="btn btn-danger" onclick="return confirmacion()">Eliminar</button></a></th>
                                        </tr>
                                        <?php 
                                            }
                                        ?>
                                    <?php endif ?>    
                                </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>