<?php 
    function conectarse (){
        $servidor="localhost";
        $usuario="root";
        $password="root";
        $bd="contacto";

        $conectar = new mysqli($servidor,$usuario,$password, $bd);
        return $conectar;
    }
    $conexion = conectarse();
	
?>