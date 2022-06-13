<?php include("sesion.php")?>

<?php
    echo "Bienvenido:". $_SESSION["usuario"];
?>
<br/>
Estas en una pagina segura 2 con sesion en PHP
<br/>
<a href="archivo_protegido.php">Ir a la primera pagina</a>
<br/>
<a href="salir.php">Salir<</a>