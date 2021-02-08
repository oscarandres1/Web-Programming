<html>
<head>
	<title> MARISHOP REGISTRAR </title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
	<body>
		<h2 class="portada">
			<form action="busqueda_ropa.php" method="post">
			<a href = "index.html"> <img src="Imagenes\Logo\minilogo.png" width="110" height="40"> MARISHOP </a>
			<a href = "Cliente_Chicos.html"> Chicos </a> 
			<a href = "Cliente_Chicas.html"> Chicas </a> 
			<a href = "Registrar.php"> Registrarse</a>
			<a href="Login.php"> Login </a>
			Buscar: <input type = "buscar" name="search"> 
			</form>
		</h2> 
		<h3>
		<form action="Login.php" method="post" name="log">
		Ingrese Datos <br><br>
		Correo: <input type="email" name = "eml"> <br><br>
		Contrase&ntilde;a: <input type="password" name = "pass"><br><br>
		<input type="submit" value="Ingresar"> 
		</form>
		</h3>

		<?php
			$data_ok = false;
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				include 'conexion.php';

				$sql = "SELECT Correo, Password FROM datos WHERE Nombre='Oscar'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
				 	while($row = mysqli_fetch_assoc($result)) {
						if ($row["Correo"] == $_POST["eml"] && $row["Password"] == $_POST["pass"]) {
							header("Location:Acciones.php");
							exit();
						}
						else{
							echo "Ingreso denegado";
							mysqli_close($conn);
						}	
					}
				}
			}
		?>

	</body>
</html>