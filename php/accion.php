<?php
include 'php/conexion.php';
/*$sql="select * from informacion_clientes";
$query = mysqli_query($conexion,$sql);
$row = mysqli_fetch_array($query);*/
$correo=$_POST['gmail'];
$contrasena=$_POST['contrasen'];
/* proceso de verificacion de correo y contraseña*/
      $inicio_correo = mysqli_query($conexion,"SELECT * FROM informacion_clientes WHERE correo='$correo'");
      
      if(mysqli_num_rows($inicio_correo)>0){
        $inicio_contrasena = mysqli_query($conexion,"SELECT contrasena  FROM informacion_clientes WHERE correo='$correo'");
        if(mysqli_num_rows($inicio_contrasena)>0)
        { echo'
        <script>    
        window.location="../index.html"
        </script>0';
        }else{
        echo"<script>
        alert('contraseña incorrecta')</script>";}
        }else {echo'<script>
        alert("correo incorrecto o inexistente")
        </script>';}?>