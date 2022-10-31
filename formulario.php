<?php 
include 'php/conexion.php';
$sql="select * from informacion_clientes";
    $query = mysqli_query($conexion,$sql);
    $row = mysqli_fetch_array($query);?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body >
<script src="funcion.js"></script>
  <nav>
      <a href="cuenta.html"  class="navegacion  mover1">regresar </a>
  </nav>

  <form action="php/usuarios.php" method="POST" class="mover"> 
    <fieldset  style="background-color: darkgray;">
    
    <label for="" >Nombre</label>
    <input id="nomb" type="text"  placeholder="escriba su nombre " name="nombre" required>

    <label  for="">Apellido</label>
    <input type="text" id="elv"  placeholder="escriba su apellido"  name="apellido" required>

    <label for="">numero de telefono</label>
    <input type="number"placeholder=" numero de telefono" name="telefono" required>

    <label for="">Genero</label>
    <input type="radio" name="genero" value="M" required> Masculino
    <input type="radio" name="genero" value="F" required> Femenino

    <label for="">Direccion</label>
    <input type="text" placeholder="escriba su direccion" name="direccion"required>

    <label for="">Identificacion</label>
    <input type="text" placeholder="escriba su identificacion" name="identificacion"required>

    <label for="">Correo</label>
    <input type="text" placeholder="escriba su correo" name="correo"required>

    <label for="">Contraseña</label>
    <input type="password"placeholder="escriba su contraseña" name="contrasena"required>

    <label  for="">Fecha de Nacimiento</label>
    <input type="date" placeholder="escriba su edad" name="edad"required>
    <input type="submit" class="submitBtn">

</fieldset>
<section class="contenedor">
        <div class="div-tabla">
        <thead>
            <table class="movilidad1">
               <tr>
                <th >Identificacion</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Genero</th>
                <th>Telefono</th>
                <th>Edad</th>
                <th>Correo</th>
                <th>Direccion</th>
                <th>Contrasena</th>
            </tr> 
            </table>            
            </div>
        
        </thead>
        
        <tbody>
            
            <?php
           if($row != null) do{
            ?>
            <table class="movilidad2">
             <tr>
                <td class="efecto"><?php echo $row['identificacion'] ?></td>
                <td class="efecto"><?php echo $row['nombre']?></td>
                <td class="efecto"><?php echo $row['apellido']?></td>
                <td class="efecto"><?php echo $row['genero']?></td>
                <td class="efecto"><?php echo $row['telefono']?></td>
                <td class="efecto"><?php echo $row['edad']?></td>
                <td class="efecto"><?php echo $row['correo']?></td>
                <td class="efecto"><?php echo $row['direccion']?></td>
                <td class="efecto"><?php echo $row['contrasena']?></td>
                <td class="efecto"><a href="php/actualizar_datos.php? ide= <?php echo$row['identificacion']?>" >actualizar</a></td>
                <td class="efecto"><a href="php/borrar.php? id= <?php echo$row['identificacion']?>">borrar</a></td>
             </tr>
             <?php
            }while($row=mysqli_fetch_array($query));
            ?>
            </table>
        </tbody>
        <tfoot>
            <tr>
                <th></th>
            </tr>
        </tfoot>
        </section>

</form>
</body> 
</html>