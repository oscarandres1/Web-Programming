
function buscarEstilo(route, width, height){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState==4 && this.status ==200){
			var replace = this.responseText.replace(/}{/gi, "}\n{");
			replace = replace.split("\n");
			var l = Object.keys(replace).length;
			loadImage(route, width, height, l);
			var data = document.getElementsByClassName("estilo");
			var imagen = document.getElementsByClassName("insertarImagen");

			for(var i  in replace) {
  				var oJSON = JSON.parse(replace[i]);
  				data[i].textContent = oJSON.estilo + " | $" +  oJSON.precio;
  				data[i].style.fontWeight = "bold";
  				data[i].hidden = false;
  				imagen[i].src= "Imagenes/"+ route +"/"+ oJSON.codigo +".jpg";
  				imagen[i].hidden = false;
			}
		}
	};
	
	xhttp.open("GET", "get_estilo.php?rp="+ route.toLowerCase(), true);
	xhttp.send();
}

function loadImage(route, width, height, l){
	var next = 1;
	var model = 1;
	var capture;
	var table;
	var tableR;	
	var tableD;
	var image;
	var app = document.getElementsByTagName("div");
	table = document.createElement("table");
	app[0].appendChild(table);
	for(var i = 0; i < (parseInt(l/3)+1)*2 ; i++){
		tableR = document.createElement("tr");
		table.appendChild(tableR);
		for(var j = 0; j < 3; j++){
			if ( i % 2 == 0){
				tableD = document.createElement("td"); 
				tableR.appendChild(tableD);
				image = document.createElement("img");
				image.className = "insertarImagen";
				image.width = width;
				image.height = height;
				image.hidden = true;
				tableD.appendChild(image);
			}
			else{ 
				tableD = document.createElement("td");
				tableD.className = "estilo";
				tableD.hidden = true;
				tableR.appendChild(tableD);
			}
		}
	}

}
