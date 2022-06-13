<?php
    if(isset($_GET["enviar_btn"])){
        echo "Formulario enviado por el metodo GET, Datos: <br/><br/>Nombre:". $_GET["nombre_txt"] . "<br/>Password: ". $_GET['password_txt'];
    }else if(isset($_POST)){
        echo "Formulario enviado por el metodo POST, Datos: <br/><br/>Nombre:". $_POST["nombre_txt"] . "<br/>Password: ". $_POST['password_txt'];
    }
?>