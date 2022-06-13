<?php
    $nombre = "Daniel";
    $password = "Dani123";

    if(isset($_GET["enviar_hdn"])){
        if($nombre == $_GET["nombre_txt"] && $password == $_GET["password_txt"]){
            echo "Nombre por GET: ". $_GET["nombre_txt"]."<br/>Password: ". $_GET["password_txt"]
            ."<br/> sexo:". $_GET["sexo_rdo"] ;
        }else{
            header("Location: formulario.php?error=si");
        }
    }
    if(isset($_POST["enviar_hdn"])){
        if($nombre == $_POST["nombre_txt"] && $password == $_POST["password_txt"]){
            echo "Nombre por POST: ". $_POST["nombre_txt"]."<br/>Password: ". $_POST["password_txt"]
            ."<br/> sexo:". $_POST["sexo_rdo"] ;
        }else{
            header("Location: formulario.php?error=si");
        }
    }
?>