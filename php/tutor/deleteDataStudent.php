<?php 
	header("Content-Type:text/plain");
	$id = $_GET["id"];
	include "../DBVar.php";
	
	$link = mysqli_connect($DBServer, $DBUser, $DBPass, $DBName);

	$queryDelete = "DELETE FROM `student` WHERE id = '$id'";

	$querySelect = "SELECT `id` FROM `student` WHERE id = '$id'";
	
	if ( !$link ) {
		die("<h3 class='text-danger'>Error de Conexión (" . mysqli_connect_errno() . ") ". mysqli_connect_error() . "</h3>");
	}

	$result = mysqli_query($link, $querySelect);
	
	if ( mysqli_num_rows($result) > 0 ) {
		mysqli_query($link, $queryDelete);
		echo "<h2 class='text-success'>Estudiante borrado exitosamente</h2>";
	}else{
		echo "<h2 class='text-danger'>EL estudiante no se pudo borrar, algo ocurrio</h2>";
	}

	mysqli_close($link);
?>