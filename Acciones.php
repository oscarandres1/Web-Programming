<html>
<head>
	<title> MARISHOP REGISTRAR </title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script src="Consultas.js"></script>
	<script>
		function acc(){
			var op = document.getElementById("opciones").value;
			var rp = document.getElementById("ropa").value;
			var cd = document.getElementById("cd").value;
			var stl = document.getElementById("stl").value;
			var pr = document.getElementById("pr").value;
			var oft = document.getElementById("oft").value;
			switch(op) {
	  				case "Insertar":
	 					insertar(rp, cd,stl, pr, oft);
	    				break;
	  				case "Actualizar":
	 					actualizar(rp, cd,stl, pr, oft);
	    				break;
	    			case "Eliminar":
	 					eliminar(rp, cd,stl, pr, oft);
	    				break;
	    			case "Ver":
	 					ver(rp, cd,stl, pr, oft);
	    				break;
				}
		}

		function clean(){
			document.getElementById("msg").value = " ";
		}


	</script>
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

		<div align="center">
			<h3> Ingreso exitoso ¿Qué acción desea realizar?<br/><br/>
			Opciones:
			<select id="opciones" onchange> 
				<option> Insertar </option>
				<option> Eliminar </option>
				<option> Actualizar </option>
				<option> Ver</option>
			</select>
			<select id="ropa" onchange> 
				<option> camisas_chicos </option>
				<option> camisas_chicas </option>
				<option> pantalones_chicos</option>
				<option> pantalones_chicas</option>
				<option> medias </option>
				<option> datos </option>
			</select ><br>
				Codigo: <input type = "text" id="cd"> 
				Estilo: <input type = "text" id="stl"> 
				Precio: <input type = "text" id="pr"> 
				Oferta: <input type = "text" id="oft">
				<button id="btn"> Aceptar </button>
			</form>
			</h3>
		</div>
		<div id="msg" align="center" ></div>
		<div id="msg1" align="center" ></div>
		<script>
			document.getElementById("opciones").addEventListener("change", clean);
			document.getElementById("ropa").addEventListener("change", clean);
			document.getElementById("btn").addEventListener("click", acc);
		</script>
	</body>
</html>