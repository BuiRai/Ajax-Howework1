function sendRequestModified(){
	var form = document.getElementById("updateDataStudent");
	var body = getRequestBodyModified(form);
	var xmlHttp = zXmlHttp.createRequest();
	xmlHttp.open("post",form.action, true);
	xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");	
	
	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
			saveResultModified(xmlHttp.responseText);
		}else{
			saveResultModified("Ocurrió un error: " + xmlHttp.statusText);
		}
	};
	
	xmlHttp.send(body);
	
}

function getRequestBodyModified(form){
	//Función que devuelve una cadena de consulta
	var params = new Array();
	
	for(var i=0; i<form.elements.length; i++){
		var param = encodeURIComponent(form.elements[i].name);
		param += "=";
		param += encodeURIComponent(form.elements[i].value);
		params.push(param);
	}	
	return params.join("&");
}



function saveResultModified(mensaje){
	var divStatus = document.getElementById("divStatus");
	divStatus.innerHTML = "Requerimiento completado: " + mensaje;
}