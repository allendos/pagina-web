<?php 
$destinatario =''
$identificacion=$_POST['identificacion'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$genero=$_POST['genero'];
$telefono=$_POST['telefono'];
$edad=$_POST['edad'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$contrasena=$_POST['contrasena'];

$header = "enviado desde la pagina mades-art";
$mensajeCompleto =$mensaje . "\nAtentamente:" . $nombre;
mail($destinatario,$ ,$mensajeCompleto, $header);
echo"<script> alert ('correo enviado exitosamente')</script>";
echo"<script> setTimeout(\"location.href='formulario.php'\",1000)<script>"; 
?>