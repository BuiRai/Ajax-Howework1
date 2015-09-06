<?php 
	header("Content-Type:text/plain");
	$name = $_GET["username"];
	$pass = $_GET["pass"];
	include "../DBVar.php";
	
	$link = mysqli_connect($DBServer, $DBUser, $DBPass, $DBName);

	$query = "SELECT * FROM `manager` WHERE name = '$name'";
	
	if ( !$link ) {
		die("<h3 class='text-danger'>Error de Conexión (" . mysqli_connect_errno() . ") ". mysqli_connect_error() . "</h3>");
	}

	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_array($result);

	if ( $name == $row[1] && $pass == $row[2] ) {
		$row = mysqli_fetch_array($result);
		echo "<h2 class='text-success'>Bienvenido $name, administre:</h2>";

?>
		<div class="list-group">
		  <a href="views/student/create.html" class="list-group-item">Administrar estudiantes</a>
		  <a href="views/tutor/create.html" class="list-group-item">Administrar tutores</a>
		</div>
<?php
	}else{
		echo "<h2 class='text-danger'>No se encuentra registrado este usuario, intente de nuevo.</h2>";
	}

	mysqli_close($link);
?>