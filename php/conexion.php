<?php
$conexion = mysqli_connect("localhost","root","","mades-art");
if($conexion){
    echo'Conexion exitosa';
}else{
    echo'conexion erronea';
}
?>  