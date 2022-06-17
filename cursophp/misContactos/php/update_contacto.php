<?php

    $email = $_POST["email_txt"];
    $nombre = $_POST["nombre_txt"];
    echo $nombre;
    $sexo = $_POST["sexo_rdo"];
    $nacimiento = $_POST["nacimiento_txt"];
    $num_telefono = $_POST["telefono_txt"];
    $pais = $_POST["pais_slc"];

    include("conexion.php");
    $consulta = "SELECT * from contactos where email='$email'";
    $ejecutar_consulta = $conexion -> query($consulta);
    $num_regs = $ejecutar_consulta->num_rows;
    
    if($num_regs==1){
        if(empty($_FILES["fotos_fls"]["tmp_name"])){
            $imagen = $_POST["foto_hdn"];
        }else{
            include("fuciones.php");
            $tipo = $_FILES["fotos_fls"]["type"];
            $archivo = $_FILES["fotos_fls"]["temp_name"];
            $imagen = subir_imagen($tipo, $archivo, $email);
        }
        $consulta = "UPDATE contactos SET nombre='$nombre', sexo='$sexo', nacimiento='$nacimiento',
         telefono='$telefono', pais='$pais', imagen='$imagen' WHERE email='$email'";
        $ejecutar_consulta = $conexion-> query($consulta);

        if($ejecutar_consulta){
            $mensaje = "Se guardaron los cambios del contacto $email exitosamente";
        }else{
            $mensaje = "No se pudieron hacer los cambios en los datos del contacto $email";
        }
    }else{
        $mensaje = "No se pudo modificar el contacto $email";
    }
    $conexion -> close();
    header("Location: ../index.php?op=cambios&mensaje=$mensaje");

?>