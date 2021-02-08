<?php
	$conn = mysqli_connect("localhost", "root", "", "marishop");
	if(!$conn){
		echo "<h2 style='color:red'>Error al conectarse</h2>";
		exit;
	}
?>
