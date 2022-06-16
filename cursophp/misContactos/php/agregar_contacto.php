<?php
    $email = $_POST["email_txt"];
    $nombre = $_POST["nombre_txt"];
    $sexo = $_POST["sexo_rdo"];
    $nacimiento = $_POST["nacimiento_txt"];
    $num_telefono = $_POST["telefono_txt"];
    $pais = $_POST["pais_slc"];
    
    $foto = ($sexo=="M")? "nino.png" : "nina.png" ;

    include("conexion.php");
    $consulta = "SELECT * from contactos where email='$email'";
    $ejecutar_consulta = $conexion->query($consulta);
    $num_rows = $ejecutar_consulta->num_rows;

    if($num_rows==0){
        include("funciones.php");
        $tipo = $_FILES["foto_fls"]["type"];
        $archivo = $_FILES["foto_fls"]["tmp_name"];
        $imagen_aceptada = subir_imagen($tipo, $archivo, $email);
        $imagen = empty($archivo)? $foto : $imagen_aceptada;

        $consulta = "INSERT into contactos (email,nombre,sexo,nacimiento,telefono,pais,imagen) values ('$email', '$nombre', '$sexo', '$nacimiento', '$num_telefono', '$pais', '$imagen')";
        $ejecutar_consulta = $conexion -> query(utf8_encode($consulta));
        if($ejecutar_consulta){
            $mensaje = "Se registro exitosan¡mente al contacto: $email";
        }else{
            $mensaje = "No se pudo dar de alta al contacto $email";
        }
    }else{
        $mensaje = "No se pudo dar de alto al usuario $email";
    }
    $conexion->close();
    header("Location: ../index.php?op=alta&mensaje=$mensaje");

?>