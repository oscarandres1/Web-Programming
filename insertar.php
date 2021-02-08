<?php
	include 'conexion.php';

	$ropa = $_REQUEST["rp"];
	$precio = $_REQUEST["pr"];
	$estilo = $_REQUEST["stl"];
	$oferta = $_REQUEST["oft"];
	$codigo = $_REQUEST["cd"];

	$sql = "INSERT INTO {$ropa} (Codigo, Estilo, Precio, Oferta) VALUES ({$codigo}, '{$estilo}', {$precio}, '{$oferta}')";

	if (!mysqli_query($conn, $sql))
		echo "Error al grabar:".$sql;
	else
		echo "Registro exitoso";
?>
