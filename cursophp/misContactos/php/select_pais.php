<?php
    if(!$registro){
        include("conexion.php");
    }
    $consulta = "SELECT * FROM paises ORDER BY pais";
    $ejecutar_consulta = $conexion->query($consulta);
    
    while($registro = $ejecutar_consulta->fetch_assoc()){
        $nombre_pais = $registro["pais"];
        echo "a".$nombre_pais;
        echo "<option value = '$nombre_pais'>$nombre_pais</option>";
    }
?>