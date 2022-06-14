<?php
    
    $servidor="localhost";
	$usuario="root";
	$password="root";
	$bd="contacto";

    //conexion mas rapida pai :)
    // $conectar = mysqli_connect($servidor,$usuario,$password, $bd); 
	$conectar = mysqli_connect($servidor,$usuario,$password) or die("No se pudo crack :(");
    echo "Al vergazo mi kong :)";
    echo "<br/><br/>";

    mysqli_select_db($conectar, $bd) or die("No esta la base de datos mi kong");
    echo "Base de datos seleccionada";
    echo "<br/><br/>";

    $consulta = "select * from paises";
    $resultado = mysqli_query($conectar,$consulta) or die("No se pudo realizar la consulta");
    echo "Se realizo la consulta papu";

    echo "<br/><br/>";
    while($registro = mysqli_fetch_array($resultado)){
        echo "ID:". $registro["idPais"] ."<br/>". "Pais:". $registro["pais"] ."<br/>";
    }

    echo "<br/>";
    mysqli_close($conectar) or die("No se pudo cerrar la conexion");
    echo "Se cerro la conexion";
?>