<?php 
    include("conexion.php");
    $con=conectar();

    $Rut_id=$_GET['Rut'];
    $sql="SELECT * FROM usuarios WHERE Rut='$Rut_id'";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
 

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DIOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                         
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <!---------FORMULARIO----------------------------------------------------------------------->
                                <form action="Rescribir.php" method="POST">
                                    <table >
                                        <tr><!--NOMBRE-->
                                            <td> 
                                                <label form="nombre">Nombre</label> 
                                            </td>
                                            <td> 
                                                <input id="nombre" type="text" name="Nombre" placeholder="Nombre"
                                                style="background-color: goldenrod;" required autocomplete="off"
                                                value="<?php echo $row['Nombre']  ?>">
                                            </td>  
                                        </tr><!--FIN NOMBRE-->
                                        <tr><!--APELLIDO-->   
                                            <td>
                                                <label form="apellido">Apellido</label> 
                                            </td>
                                            <td>
                                                <input id="apellido" type="text" name="Apellido" placeholder="Apellido"
                                                style="background-color: goldenrod;" required autocomplete="off" 
                                                value="<?php echo $row['Apellido']  ?>">
                                            </td>
                                        </tr><!--FIN APELLIDO-->
                                        <tr><!---RUT---->
                                            <td>
                                                <label form="rut">Rut</label> 
                                            </td>
                                            <td>
                                                <input id="rut" type="text" name="Rut" placeholder="Rut"
                                                style="background-color: goldenrod;" required autocomplete="off"
                                                value="<?php echo $row['Rut']  ?>">
                                            </td>
                                        </tr><!--FIN RUT-->
                                        <tr><!--APODO-->
                                            <td>
                                                <label form="apodo">Usuario</label> 
                                            </td>
                                            <td>
                                                <input id="apodo" type="text" name="Apodo" placeholder="Apodo"
                                                style="background-color: goldenrod;" required autocomplete="off"
                                                value="<?php echo $row['Apodo']  ?>">  
                                            </td>
                                        </tr><!--FIN APODO-->
                                        <tr><!--CONTRASEÑA-->
                                            <td>
                                                <label form="contra">Contraseña</label> 
                                            </td>
                                            <td>
                                                <input id="contra" type="password" name="Contra" placeholder="Contra"
                                                style="background-color: goldenrod;" required autocomplete="off"
                                                value="<?php echo $row['Contra']  ?>">  
                                            </td>
                                        </tr><!--FIN CONTRASEÑA-->
                                        <tr><!--EMAIL-->    
                                            <td>
                                                <label form="email">Email</label> 
                                            </td>
                                            <td>
                                                <input id="email" type="text" name="Email" placeholder="Email"
                                                style="background-color: goldenrod;" required
                                                value="<?php echo $row['Email']?>">  
                                            </td>
                                        </tr><!--FIN EMAIL-->
                                        <tr><!--TIPO DE JUEGO FAV-->
                                            <td>
                                                <p>Genero de vidojuego favorito</p>
                                            </td>
                                            <td>
                                                <input list="fav" name="GeneroGameFAV" placeholder="GeneroGameFAV" 
                                                style="background-color: goldenrod;"
                                                value="<?php echo $row['GeneroGameFAV']  ?>">
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
                                                    value="<?php echo $row['Sexo']  ?>"><br>

                                                    <label for="women" style="background-color: goldenrod;">Mujer</label>
                                                    <input id="women" type="radio" name="Sexo" placeholder="Sexo"
                                                    value="<?php echo $row['Sexo']  ?>"><br>
                                                    
                                                    <label for="otro" style="background-color: goldenrod;">Otro</label>
                                                    <input id="otro" type="radio" name="Sexo" placeholder="Sexo"
                                                    value="<?php echo $row['Sexo']  ?>"><br>
                                                    </td>
                                                </tr><!--FIN SEXO-------------->
                                                <tr><!---FECHA NACIMIENTO----------------->
                                                    <td>
                                                       <label form="Fecha">Fecha</label> 
                                                    </td>
                                                    <td>
                                                      <input id="Fecha" type="date" name="Fecha" placeholder="Fecha" 
                                                        style="background-color: goldenrod;" required
                                                        value="<?php echo $row['Fecha']  ?>">
                                                    </td>
                                                </tr><!---FIN EDAD------------>
                                                <tr><!----DIRECCION----------->
                                                    <td>
                                                        <label form="Direccion">Direccion</label>
                                                    </td>
                                                    <td>
                                                    <textarea rows="2" cols="50" id="Direccion" name="Direccion" placeholder="<?php echo $row['Direccion']?>" 
                                                    style="background-color: goldenrod;"></textarea>
                                                    </td>
                                                </tr><!---FIN DIRECCION------->
                                                <tr><!---EDAD----------------->
                                                    <td>
                                                        <label form="Edad">Edad</label> 
                                                    </td>
                                                    <td>
                                                        <input id="Edad" type="text" name="Edad" placeholder="Edad"
                                                        style="background-color: goldenrod;" required 
                                                        value="<?php echo $row['Edad']  ?>">>
                                                    </td>
                                                </tr><!----FIN EDAD---------->
                                        <tr>
                                            <td></td>
                                            <td><input  type="submit" name="actualizar" value="Enviar" style="background-color: red;"></td>
                                            <td><input type="reset" value="Borrar todo" style="background-color: red;"></td> 
                                        </tr>
                                    </table>
                                </form>
                        </div>