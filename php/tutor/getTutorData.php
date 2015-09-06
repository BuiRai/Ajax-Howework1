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
		echo "<h2 class='text-success'>Información del estudiante:</h2>";
		echo "<dt>Matrícula del tutor: ".$row[0]."</dt>";
		echo "<dt>Nombre(s) del tutor: ".$row[1]."</dt>";
		echo "<dt>Apellidos del tutor: ".$row[2]."</dt>";
		echo "<dt>Genero del tutor: ".$row[3]."</dt>";
		echo "<dt>Area del tutor: ".$row[4]."</dt>";
		echo "<dt>Correo electronico del tutor: ".$row[5]."</dt>";
	}else{
		echo "<h2 class='text-danger'>No se encuentra registrada la matrícula: '$id'</h2>";
	}

	mysqli_close($link);
?>