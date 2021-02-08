<?php
	include 'conexion.php';

	if($_REQUEST["rp"] == 'datos')
		$sql = "SELECT JSON_OBJECT('nombre',Nombre, 'apellido', Apellido, 'correo', Correo) FROM ".$_REQUEST["rp"];
	else 
		$sql = "SELECT JSON_OBJECT('codigo',Codigo, 'estilo', Estilo, 'precio', Precio, 'oferta', Oferta) FROM ".$_REQUEST["rp"];

	$ans = $conn->query($sql);
	if($ans->num_rows >0){
		while ($row = $ans->fetch_array()){
			echo $row[0];
		}
	}
	else
		echo "No existe";
?>
