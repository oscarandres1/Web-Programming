<?php
	include 'conexion.php';

	$ropa = $_REQUEST["rp"];
	$precio = $_REQUEST["pr"];
	$estilo = $_REQUEST["stl"];
	$oferta = $_REQUEST["oft"];
	$codigo = $_REQUEST["cd"];

	$sql = "UPDATE {$ropa} SET Estilo='{$estilo}', Precio={$precio}, Oferta='{$oferta}' WHERE Codigo={$codigo}";

	if (!mysqli_query($conn, $sql))
		echo "Error al actualizar:".$sql;
	else
		echo "Registro actualizado";

?>
