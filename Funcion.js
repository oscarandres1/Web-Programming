function loadImage(cloth, route, width, height){
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
	for(var i = 0; i < 2*2 ; i++){
		tableR = document.createElement("tr");
		table.appendChild(tableR);
		for(var j = 0; j < 2; j++){
			if ( i % 2 == 0){
				tableD = document.createElement("td"); 
				tableR.appendChild(tableD);
				image = document.createElement("img");
				image.src = "Imagenes/"+ route +"/"+ next++ +".jpg";
				image.width = width;
				image.height = height;
				tableD.appendChild(image);
			}
			else{ 
				tableD = document.createElement("td");
				tableD.textContent = cloth + " modelo "+ model++;
				tableR.appendChild(tableD);
			}
		}
	}
}
