<?php
include "conexion.php";
$id= $_GET["id"];
$consulta ="DELETE FROM informacion_clientes WHERE identificacion= '$id'";
$resultado= mysqli_query($conexion,$consulta);
if($resultado){
    echo
    "
    <!DOCTYPE HTML> 
    <html>
    <head>
    </head>
    <body>
    <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
    swal.fire({ 
    icon : 'success',
    title: 'conseguido',
    text:'el registro ha sido eliminado',
    showConfirmButton : false

});    

    setTimeout(()=>{window.location.href='../formulario.php'},1000)
    </script>
    </body>

    </html>
    ";
} else{  echo
    "
    <!DOCTYPE HTML> 
    <html>
    <head>
    </head>
    <body>
    <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
    wal.fire({ 
        icon : 'error',
        title: 'fallido',
        text:'el registro no ha sido eliminado',
        showConfirmButton : false
    
    });    
    
        setTimeout(()=>{window.location.href='../formulario.php'},1000)
    </script>
    </body>

    </html>
    ";
}
?>