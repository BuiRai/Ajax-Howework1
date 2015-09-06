<?php 
	
	header("Content-Type:text/plain");

	$id = $_POST["id"];
	$name = $_POST["name"];
	$lastname = $_POST["lastname"];
	$birthdate = $_POST["birthdate"];
	$dateAdmission = $_POST["dateAdmission"];
	$gender = $_POST["gender"];
	$email = $_POST["email"];
	$career = $_POST["career"];

	include "../DBVar.php";

	$link = mysqli_connect($DBServer, $DBUser, $DBPass, $DBName);
	
	$query = "INSERT INTO `ajaxt1`.`student` (`id`, `name`, `lastname`, `birthdate`, `dateAdmission`, `gender`, `email`, `career`) VALUES ('$id', '$name', '$lastname', '$birthdate', '$dateAdmission', '$gender', '$email', '$career');";
	
	if (!$link) {
		die("<h3 class='text-danger'>Error de Conexión (" . mysqli_connect_errno() . ") ". mysqli_connect_error() . "</h3>");
	}

	if (mysqli_query($link, $query) == true) {
		echo "<h3 class='text-success'>Se ha creado con éxito el estudiante</h3>";
	}else{
		echo "<h3 class='text-danger'>No se creó el estudiante, algo ocurrio</h3>";
	}

	mysqli_close($link);

?>