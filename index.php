<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Indice</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="javascript/zxml.js"></script>
	<script src="javascript/manager/getManagerData.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="text-center">Ingresa tus datos</h1>
		<div class="form-horizontal">
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="username">Nombre de usuario:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="managerUsername" name="username" placeholder="Escriba su nombre de usuario">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="pass">Contraseña:</label>
		    <div class="col-sm-10"> 
		      <input type="password" class="form-control" id="managerPass" name="pass" placeholder="Ingrese su contraseña">
		    </div>
		  </div>
		  <div class="form-group"> 
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-primary" onclick="requestCustomerInfo()">Ingresar</button>
		    </div>
		  </div>
		</div>
		<div id="divManagerInfo" class="text-center text-info"></div>
	</div>
</body>
</html>