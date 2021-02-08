<?php
	include 'conexion.php';

	$ropa = $_REQUEST["rp"];
	$precio = $_REQUEST["pr"];
	$estilo = $_REQUEST["stl"];
	$oferta = $_REQUEST["oft"];
	$codigo = $_REQUEST["cd"];

	$sql = "SELECT * FROM {$ropa}";

	if (!mysqli_query($conn, $sql))
		echo "Error al consultar:".$sql;
	else
		echo "Consulta exitosa";
?>
