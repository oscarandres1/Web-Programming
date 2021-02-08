<?php
	include 'conexion.php';

	$ropa = $_REQUEST["rp"];
	$precio = $_REQUEST["pr"];
	$estilo = $_REQUEST["stl"];
	$oferta = $_REQUEST["oft"];
	$codigo = $_REQUEST["cd"];

	$sql = "DELETE FROM {$ropa} WHERE Codigo = {$codigo}";

	if (!mysqli_query($conn, $sql))
		echo "Error al borrar:".$sql;
	else
		echo "Borrado exitoso";
?>
