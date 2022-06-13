<?php 
    foreach ($_FILES["archivo_fls"] as $i => $valor){
        echo "Propiedad: $i --- Valor: $valor <br/>";
    }
    $archivo = $_FILES["archivo_fls"]["tmp_name"];
    $destino = "archivos/".$_FILES["archivo_fls"]["name"];

    if($_FILES["archivo_fls"]["type"]=="text/plain"){
        move_uploaded_file($archivo,$destino);
        echo "Archivo subido :)";
    }else{
        echo "solo se permiten archivos de texto plano";
    }
    
?>