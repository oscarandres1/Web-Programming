//Function to load images
var next = 1;
var model = 1;
var index = 0;
var qtClothes =6;
var table;
var tableRimg;
var tableRtxt;
var tableD;
var image;
var path;

function loadImage(){
	image = document.createElement("img");
	image.className = "Ofertas fade";
	image.src = "Imagenes/"+ path +"/"+ next++ +".jpg";
	image.width = "410";
	image.height = "470";
	if (next == qtClothes+1)
		next =1;
	return image;
}

function replaceImage(){
	var replace = document.getElementsByTagName("td");
	var length = replace.length;
	for(var i = 0; i < qtClothes/2; i++){
		replace[i].replaceChild(loadImage(), replace[i].childNodes[0]);
	}
	setTimeout(replaceImage, 2450);
}	

function loadSlide(cloth, route){
	path = route;
	var showClothes = 3;
	var app = document.getElementsByTagName("div");
	table = document.createElement("table");
	app[0].appendChild(table);

	tableRimg = document.createElement("tr");
	table.appendChild(tableRimg);

	tableRtxt = document.createElement("tr");
	table.appendChild(tableRtxt);

	for(var i = 0; i<showClothes; i++){
		tableD = document.createElement("td");
		tableRimg.appendChild(tableD);
		tableD.appendChild(loadImage());
	}

	replaceImage();
}

