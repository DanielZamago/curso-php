<?php include("sesion.php")?>

<?php
    echo "Bienvenido:". $_SESSION["usuario"];
?>
<br/>
Estas en una pagina segura con sesion en PHP
<br/>
<a href="archivo_protegido2.php">Ir a otra pagina</a>
<br/>
<a href="salir.php">Salir<</a>