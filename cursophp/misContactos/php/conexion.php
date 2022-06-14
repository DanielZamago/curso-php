<?php
function conectarse()
{
	$servidor="localhost";
	$usuario="root";
	$password="";
	$bd="panteon";

	$conectar = new mysqli($servidor,$usuario,$password,$bd,3307);
	return $conectar;
}

$conexion = conectarse();
?>