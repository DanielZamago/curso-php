<?php
    $email = $_POST["email_slc"];
    include("conexion.php");
    $consulta = "DELETE from contactos where email = '$email'";
    $ejecutar_consulta = $conexion->query($consulta);
    if($ejecutar_consulta){
        $mensaje =  "El usuario $email eliminado exitosamente";
    }else{
        $mensaje = "No se pudo eliminar la usuario $email";
    }

    $conexion->close();
    header("Location: ../index.php?op=baja&mensaje=$mensaje");
?>