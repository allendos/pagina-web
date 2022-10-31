<?php
include 'conexion.php';
$identificacion=$_POST['identificacion'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$genero=$_POST['genero'];
$telefono=$_POST['telefono'];
$edad=$_POST['edad'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$contrasena=$_POST['contrasena'];

    $query = "INSERT INTO informacion_clientes (identificacion,nombre, apellido,genero,telefono,edad,correo,direccion,contrasena) VALUES ($identificacion,'$nombre','$apellido','$genero',$telefono,$edad,'$correo','$direccion','$contrasena')";


    //verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion,"SELECT * FROM informacion_clientes WHERE correo='$correo'");

if(mysqli_num_rows($verificar_correo)>0){
    echo'
    <script>
    alert("este correo ya esta registrado, intenta con otro diferente")
      window.location="../formulario.php" 
      </script>
      ';
      exit();}

      $verificar_id = mysqli_query($conexion,"SELECT * FROM informacion_clientes WHERE identificacion='$identificacion'");

if(mysqli_num_rows($verificar_id)>0){
    echo'
    <script>
    alert("esta persona ya esta registrada ")
      window.location="../formulario.php" 
      </script>
      ';
      exit();}
      

 $ejecutar=mysqli_query($conexion,$query);


if($ejecutar){
    echo'
    <script>    
    alert("Usuario registrado");
    window.location="../formulario.php"
    </script>
    0 ';

}else{
    echo'
    <script>
    alert("usuario no conectado");
    </script>';
}


?>
