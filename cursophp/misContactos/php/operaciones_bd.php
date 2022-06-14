<?php
    
    $servidor="localhost";
	$usuario="root";
	$password="root";
	$bd="contacto";

	$conectar = mysqli_connect($servidor,$usuario,$password, $bd) or die("No se pudo crack :(");

    echo "<h4>Operaciones básicas en base de datos</h4><br/>";
    echo "<h2>Insertar datos</h2><br/><br/>";
    //$consulta = "Insert into contactos values('drosas@gmail', 'Daniel', 'M', '2001-02-11', ' 6151530007', 'México', 'dani.png')";
    //$resultado = mysqli_query($conectar, $consulta);
    //echo "Se inserto el nuevo contacto";

    echo "<h2>update datos</h2><br/><br/>";
    $consulta = "UPDATE `contactos` SET `pais` = 'Cuba' WHERE `contactos`.`email` = 'drosas@gmail'";
    $resultado = mysqli_query($conectar, $consulta);
    echo "Se actualizo el nuevo contacto";

    echo "<h2>delete datos</h2><br/><br/>";
    //$consulta = "Delete from contactos where email='drosas@gmail'";
    //$resultado = mysqli_query($conectar, $consulta);
    //echo "Se elimino el contacto";

    echo "<br/>";
    mysqli_close($conectar) or die("No se pudo cerrar la conexion");
    echo "Se cerro la conexion";
?>