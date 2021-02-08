<html>
<head>
	<title> MARISHOP OFERTAS </title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script src="Funcion.js" type="text/javascript"></script>
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

		<h1 align="center"> !Resultados de tu busqueda! </h1>
		<?php
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$sr = strtolower($_POST["search"]);
				for($i = 0; $i<strlen($sr); $i++){
					if($sr[$i] == " "){
						$sr[$i] = "_";
					}
				}
			}
		?>
		<div class="imagenes">
			<script>
				var sr = "<?php echo $sr ?>";
				buscarEstilo(sr, 380, 400);
			</script>
		</div>
	</body>	
</html>

