<?php 
include 'php/conexion.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="funcion.js"></script>
<nav>
      <a href="cuenta.html"  class="navegacion  mover1">pagina principal </a>
  </nav>

<form action="php/enviacorreo.php" method="POST" class="desvanecer"> 
    <fieldset  style="background-color:darkgray;">
    <label for="nombre"class="desvanecer" >identificacion</label>
    <input id="nomb" type="text" class="desvanecer" placeholder="escriba su identificacion " name="id" required>
    <div></div>
    <label  for="" class="desvanecer">correo electronico</label>
    <input type="text" id="elv" class="desvanecer"  placeholder="escriba su correo electronico"  name="correo" required>
    <div></div>
    <input type="button"  value="recuperar contraseña"  onclick="invisible()"class="form_submit"> 
    
</fieldset>
<section class="contenedor">

</body>
</html>
