function requestCustomerInfo(){
	var sid = document.getElementById("txtCustomerId").value;
	//top.frames["hiddenFrame"].location = "GetCustomerData3.php?id="+sid;
	var xmlHttp = zXmlHttp.createRequest();
	xmlHttp.open("get", "getStudentData.php?id="+sid, true);
	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
			displayCustomerInfo(xmlHttp.responseText);
		}else{
			displayCustomerInfo("Ocurrió un error: " + xmlHttp.statusText);
		}
	}
	xmlHttp.send(null);
}

function displayCustomerInfo(text){
	var divCustomerInfo = document.getElementById("divCustomerInfo");
	divCustomerInfo.innerHTML = text;
}