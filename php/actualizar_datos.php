<?php
    include 'conexion.php';
    $id= $_GET['ide'];
    $sql="select * from informacion_clientes where identificacion= '$id'";
    $query = mysqli_query($conexion,$sql);
    $row = mysqli_fetch_array($query);?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Formularios</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../estilo.css">
    </head>
    <body>
     <form action="actualizar.php" method="POST" class="formulario" > 
         <fieldset>
         <h1 class="formtitulo">ACTUALIZAR registro <?php echo $row ['identificacion'] ?></h1>

         <label for="" class="formulario_label">Nombre</label>
         <input type="text" class="formulario_input" name="nombre" value ="<?php echo $row ['nombre'] ?>">

         <label for="" class="formulario_label">apellido</label>    
         <input type="text" class="formulario_input" name="apellido" value ="<?php echo $row ['apellido'] ?>">


         <label for="" class="formulario_label">genero</label>
         <?php /*radio button actualizado*/ 
         if($row['genero'] == 'M'){
            echo "<input type='radio' class='formulario_input' name='genero' value='M' checked> Masculino";
            echo "<input type='radio' class='formulario_input' name='genero' value='F' > Femenino";
        }else if($row['genero'] == 'F'){ 
            echo "<input type='radio' name='genero' value='M' class='textoBlanco' > Masculino ";
            echo "<input type='radio' name='genero' value='F' class='textoBlanco' checked> Femenino";}?>

         <div><br></div>
         <label for="" class="formulario_label">fecha de nacimiento</label>
         <input type="date" class="formulario_input" name="edad" value ="<?php echo $row ['edad'] ?>">

         <label for="" class="formulario_label">Correo</label>
         <input type="text" class="formulario_input" name="correo" value ="<?php echo $row ['correo'] ?>">

         <label for="" class="formulario_label">Teléfono</label>
         <input type="text" class="formulario_input" name="telefono" value ="<?php echo $row ['telefono'] ?>">
         <div><br></div>
         <label for="" class="formulario_label">direccion</label>
         <input type="text" class="formulario_input" name="direccion" value ="<?php echo $row ['direccion'] ?>">
         <label for="" class="formulario_label">contraseña</label>
         <input type="text" class="formulario_input" name="contrasena" value ="<?php echo $row ['contrasena'] ?>">  
         <input type="hidden" name="id" value="<?php echo $row ['identificacion'] ?>">
         <input type="submit" class="form_submit">
         </fieldset>
     </form> 
     <script src="funcion.js"></script>
        
    </body>
</html>
