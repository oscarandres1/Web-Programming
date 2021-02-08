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
		<form action="Registrar.php" method="post">
		Ingrese Datos <br><br>
		Nombre: <input type="text" name = "name"> <br><br>
		Apellido: <input type="text" name = "apellido"> <br><br>
		Correo: <input type="email" name = "eml"> <br><br>
		Contrase&ntilde;a: <input type="password" name = "pass"><br><br>
		<input type="submit" value="Registrar"> 
		</form>
		</h3>

		<?php
			$data_ok = true;
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				if(strlen($_POST['pass']) < 4){
					echo "<p style='color:red'>Introduce una contraseña de minimo 4 caracteres</p>";
					$data_ok = false;
				}

				include 'conexion.php';

				$sql = "SELECT Correo FROM datos";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
				 	while($row = mysqli_fetch_assoc($result)) 
				 	{
						if ($row["Correo"] == $_POST["eml"]) 
						{
							echo "<p style='color:red'>Este correo ya existe</p>";
							$data_ok = false;
						}
					}
				}

				mysqli_close($conn);
			}
		?>

		<?php
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				if ($data_ok){ 
					include 'registra_cliente.php';
				}
			}
		?>

	</body>
</html>