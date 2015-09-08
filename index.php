<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Indice</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<?php 
		if (!$_SESSION) {
		?>
			<h5 class="text-center text-muted"><dt>Para ingresar utilice:</dt></h5>
			<h5 class="text-center text-muted"><dt>nombre:</dt> admin</h5>
			<h5 class="text-center text-muted"><dt>password:</dt> admin</h5>
			<h1 class="text-center">Ingresa tus datos</h1>
			<form id="formLogin" class="form-horizontal" method="post" action="php/manager/getManagerData.php">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="username">Nombre de usuario:</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="managerUsername" name="username" placeholder="Escriba su nombre de usuario" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="pass">Contraseña:</label>
			    <div class="col-sm-10"> 
			      <input type="password" class="form-control" id="managerPass" name="pass" placeholder="Ingrese su contraseña" required>
			    </div>
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-success">Ingresar</button>
			    </div>
			  </div>
			</form>
		<?php 
		}else{
		?>
			<div class="panel panel-primary">
		      <div class="panel-heading">Panel with panel-primary class</div>
		      <div class="panel-body">
		      	<div class="list-group">
				  <a href="views/student/create.html" class="list-group-item">Administrar estudiantes</a>
				  <a href="views/tutor/create.html" class="list-group-item">Administrar tutores</a>
				</div>
		      </div>
		    </div>
		    <a href="php/manager/logout.php">Cerrar sesión</a>
		<?php
		}
		?>
	</div>
</body>
</html>