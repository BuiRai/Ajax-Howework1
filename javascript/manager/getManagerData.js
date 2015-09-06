function requestCustomerInfo(){
	var sid = document.getElementById("managerUsername").value;
	var spass = document.getElementById("managerPass").value;
	//top.frames["hiddenFrame"].location = "GetCustomerData3.php?id="+sid;
	var xmlHttp = zXmlHttp.createRequest();
	xmlHttp.open("get", "php/manager/getManagerData.php?username="+sid+"&pass="+spass, true);
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
	var divCustomerInfo = document.getElementById("divManagerInfo");
	divCustomerInfo.innerHTML = text;
}