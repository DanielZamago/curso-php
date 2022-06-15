<?php
    $op=$_GET["op"];
    switch ($op) {
        case 'alta':
            $contenido = "php/alta_contacto.php";
            $titulo = "Alta de contactos";
            break;
        case 'baja':
            $contenido = "php/baja_contacto.php";
            $titulo = "Baja de contactos";
            break;
        case 'cambios':
            $contenido = "php/cambios_contacto.php";
            $titulo = "Baja de contactos";
            break;
        case 'consultas':
            $contenido = "php/consultas_contacto.php";
            $titulo = "Baja de contactos";
            break;
        default:
            $contenido = "php/home.php";
            $titulo = "Mis contactos";
            break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $titulo ?></title>
    <link rel="stylesheet" href="css/mis_contactos.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="js/mis_contactos.js"></script>
</head>
<body>
    <section id="contenido">
        <nav>
            <ul>
                <li><a class="cambio" href="index.php">Home</a></li>
                <li><a class="cambio" href="?op=alta">Alta contacto</a></li>
                <li><a class="cambio" href="?op=baja">Baja contacto</a></li>
                <li><a class="cambio" href="?op=cambios">Modificar contacto</a></li>
                <li><a class="cambio" href="?op=consultas">Consultar contacto</a></li>
            </ul>
        </nav>
        <section id="principal">
            <?php include($contenido); ?>
        </section>
    </section>
</body>
</html>