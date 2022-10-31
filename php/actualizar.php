<?php
include 'conexion.php';
$identificacion=$_POST['ide'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$genero=$_POST['genero'];
$telefono=$_POST['telefono'];
$edad=$_POST['edad'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$contrasena=$_POST['contrasena'];

$query = "UPDATE informacion_clientes SET nombre='$nombre',apellido='$apellido',genero='$genero ', telefono='$telefono',edad='$edad',correo='$correo', direccion='$direccion',contrasena='$contrasena' WHERE identificacion=$identificacion";

$ejecutar=mysqli_query($conexion,$query);

if($ejecutar){
    echo'
    <script>
    alert("Usuario registrado");
    window.location="../formulario.php"
    </script>
    0
    ';
    
}else{
    echo'
    <script>
    alert("usuario no conectado");
    </script>
    ';
}

mysqli_close($conexion);

?>