<?php
    if(!$registro){
        include("conexion.php");
    }
    $consulta = "SELECT * FROM paises ORDER BY pais";
    $ejecutar_consulta = $conexion->query($consulta);
    
    while($row = $ejecutar_consulta->fetch_assoc()){
        $nombre_pais = ($row["pais"]);
        echo "<option value = '$nombre_pais'";
        if($nombre_pais==($registro["pais"])){
            echo " selected";
        }
        echo ">$nombre_pais</option>";
    }
?>