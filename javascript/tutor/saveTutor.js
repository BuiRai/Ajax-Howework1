function sendRequest(){
	var form = document.forms[0];
	var body = getRequestBody(form);
	var xmlHttp = zXmlHttp.createRequest();
	xmlHttp.open("post",form.action, true);
	xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");	
	
	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
			saveResult(xmlHttp.responseText);
		}else{
			saveResult("Ocurrió un error: " + xmlHttp.statusText);
		}
	};
	
	xmlHttp.send(body);	
	
}

function getRequestBody(form){
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



function saveResult(mensaje){
	var divStatus = document.getElementById("divStatus");
	divStatus.innerHTML = "Requerimiento completado: " + mensaje;
}