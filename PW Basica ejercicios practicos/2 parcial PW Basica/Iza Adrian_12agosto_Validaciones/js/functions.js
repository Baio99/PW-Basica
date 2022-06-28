// JavaScript Document

function enviar(){
	const x = document.forms["frm1"];
	var aux = true;
	
	let text = "";
	for (let i = 0; i < x.length ;i++) {	
	 text += x.elements[i].value + "<br>";
	}
	
	for(let i = 0; i < x.length ;i++){
		
		if (x.elements[i].value == "") {
    		
    		aux = false;
		}
	}
	
	if (aux == true) {
    	document.getElementById("demo").innerHTML = text;
    	
  	}else{
		window.alert("Datos incompletos!");
		document.getElementById("demo").innerHTML = "";
	}
}

function habilitar(num){
	
	const x = document.forms["frm1"];
	
	x.elements[num].disabled = false;
	
}