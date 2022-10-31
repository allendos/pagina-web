
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./cuent.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <header>
        <h1> mades-art7 </h1>
        </header>
    <div class="cuet">
        <img class="logo" src="img/img1.jpg" alt="">
   <h1>inicio de sesion</h1> 
  
   <form action="accion.php" method="POST" > 

       <label  for="username">correo</label>
       <input name="gmail" id="usuario" class="texto" type="text"placeholder="introdusca  correo" required>

       <label  for="password">  contraseña</label>
       <input name="contrasen" id="contraseña" class="contraseña" type="text" placeholder="introdusca contraseña" required>

       <div><br></div>
       
      <!-- <input  class="enviar" formaction="index.html" type="submit" value=  "iniciar sesion" > -->

      <input type="submit" class="enviar" value="iniciar sesion">
       <div><br></div>
       <a href="">olvido su contraseña</a>
       <div><br></div>
       <a href="http://localhost/pagina%20web-1/formulario.php">crear cuenta</a>
   </form>
</div>
</body>
</html>