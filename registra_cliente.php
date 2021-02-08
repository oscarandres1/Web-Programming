<?php
	include 'conexion.php';

	$nm = $_POST["name"];
	$ap = $_POST["apellido"];
	$em = $_POST["eml"];
	$pw = $_POST["pass"];

	$cmd = "INSERT INTO datos (Nombre, Apellido, Correo, Password) VALUES ('{$nm}', '{$ap}', '{$em}', {$pw})";

	if (!mysqli_query($conn, $cmd))
		echo "Error al grabar:".$cmd;
	else
		echo "Registro exitoso";
?>