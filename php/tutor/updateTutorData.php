<?php
	header("Content-Type:text/plain");
	$id = $_GET["id"];
	include "../DBVar.php";
	
	$link = mysqli_connect($DBServer, $DBUser, $DBPass, $DBName);

	$query = "SELECT `id`, `name`, `lastname`, `gender`, `area`, `email` FROM `tutor` WHERE id = '$id'";
	
	if ( !$link ) {
		die("<h3 class='text-danger'>Error de Conexión (" . mysqli_connect_errno() . ") ". mysqli_connect_error() . "</h3>");
	}

	$result = mysqli_query($link, $query);

	if ( mysqli_num_rows($result) > 0 ) {
		$row = mysqli_fetch_array($result);
?>	
		
		<form id="updateDataTutor" class="form-horizontal" role="form" method="post" action="../../php/tutor/saveDataModified.php" onsubmit="sendRequestModified(); return false">
		<h3 class="text-center">Ingrese los datos para agregar al tutor</h3>
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="id">Matricula:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="id" placeholder="Ingrese su matrícula" name="id" maxlength="8" value="<?php echo $row[0] ?>" required>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="name">Nombre(s):</label>
		    <div class="col-sm-10"> 
		      <input type="text" class="form-control" id="name" placeholder="Ingrese su(s) nombre(s)" name="name" value="<?php echo $row[1] ?>" required>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="lastname">Apellidos:</label>
		    <div class="col-sm-10"> 
		      <input type="text" class="form-control" id="lastname" placeholder="Ingrese sus apellidos" name="lastname" value="<?php echo $row[2] ?>" required>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="gender">Genero:</label>
		    <div class="col-sm-10"> 
		      <input type="text" class="form-control" id="gender" placeholder="M = masculino, F = femenino, I = indefinido" name="gender" value="<?php echo $row[3] ?>" maxlength="1">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="area">Area:</label>
		    <div class="col-sm-10"> 
		      <input type="text" class="form-control" id="area" placeholder="Ingrese su area: LIS/LCC/LIC/MAT" maxlength="10" name="area" value="<?php echo $row[4] ?>" required>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="email">Correo electrónico:</label>
		    <div class="col-sm-10"> 
		      <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico" name="email" value="<?php echo $row[5] ?>">
		    </div>
		  </div>
		  <div class="form-group"> 
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-primary">Modificar tutor</button>
		    </div>
		  </div>
		</form>
		<div id="divStatus" class="text-info text-center"></div>
<?php 
	}else{
		echo "<h2 class='text-danger text-center'>No se encuentra registrada la matrícula: '$id'</h2>";
	}

	mysqli_close($link);
?>