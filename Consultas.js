function ver(rp, cd, stl, pr, oft){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState==4 && this.status ==200){
			var replace = this.responseText.replace(/}{/gi, "}\n{");
			replace = replace.split("\n");
			var msg = "<table>";
			if(rp == 'datos'){
				msg += "<tr><td> Nombre <td> Apellido <td> Correo <tr><br>";
				for(var i  in replace) {
	  				var oJSON = JSON.parse(replace[i]);
	  				msg += "<tr><td>"+ oJSON.nombre +"<td>"+ oJSON.apellido + " <td> $" + oJSON.correo + "<tr>";
				}
			}
			else {
				msg += "<tr><td> Codigo <td> Estilo <td> Precio <td> Oferta <tr><br>";
				for(var i  in replace) {
	  				var oJSON = JSON.parse(replace[i]);
	  				msg += "<tr><td>"+ oJSON.codigo +"<td>"+ oJSON.estilo + " <td> $" + oJSON.precio
	  								+"<td>"+ oJSON.oferta + "<tr>";
				}
			}

			msg += "<table>";
			document.getElementById("msg1").innerHTML = msg;
		}
	};
	xhttp.open("GET", "get_estilo.php?rp="+rp+"&cd="+cd+"&stl="+stl+"&pr="+pr+"&oft="+oft, true);
	xhttp.send();
}

function insertar(rp, cd, stl, pr, oft){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState==4 && this.status ==200){
			document.getElementById("msg").textContent =this.responseText;
			ver(rp, cd, stl, pr, oft);
			document.getElementById("cd").value = '';
			document.getElementById("stl").value = '';
			document.getElementById("pr").value = '';
			document.getElementById("oft").value = '';
		}
	};
	xhttp.open("GET", "insertar.php?rp="+rp+"&cd="+cd+"&stl="+stl+"&pr="+pr+"&oft="+oft, true);
	xhttp.send();
}
function eliminar(rp, cd, stl, pr, oft){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState==4 && this.status ==200){
			document.getElementById("msg").textContent =this.responseText;
			ver(rp, cd, stl, pr, oft);
			document.getElementById("cd").value = '';
			document.getElementById("stl").value = '';
			document.getElementById("pr").value = '';
			document.getElementById("oft").value = '';
		}
	};
	xhttp.open("GET", "eliminar.php?rp="+rp+"&cd="+cd+"&stl="+stl+"&pr="+pr+"&oft="+oft, true);
	xhttp.send();
}

function actualizar(rp, cd, stl, pr, oft){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState==4 && this.status ==200){
			var msg = document.getElementById("msg").textContent =this.responseText;
			ver(rp, cd, stl, pr, oft);
			document.getElementById("cd").value = '';
			document.getElementById("stl").value = '';
			document.getElementById("pr").value = '';
			document.getElementById("oft").value = '';
		}
	};
	xhttp.open("GET", "actualizar.php?rp="+rp+"&cd="+cd+"&stl="+stl+"&pr="+pr+"&oft="+oft, true);
	xhttp.send();
}

