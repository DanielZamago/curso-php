<?php
    include("conexion.php");

    $consulta = "SELECT email FROM contactos ORDER BY email";
    $ejecutar_consulta = $conexion->query($consulta);
    echo "123";
    while($registro = $ejecutar_consulta->fetch_assoc()){
        echo "<option value = '".utf8_encode($registro["email"])."'>".utf8_encode($registro["email"])."</option>";
    }
?>