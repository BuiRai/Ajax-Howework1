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

	$query = "UPDATE `student` SET `id`='$id',`name`='$name',`lastname`='$lastname',`birthdate`='$birthdate',`dateAdmission`='$dateAdmission',`gender`='$gender',`email`='$email',`career`='$career' WHERE id = '$id'";
	
	if (!$link) {
		die("<h3 class='text-danger'>Error de Conexión (" . mysqli_connect_errno() . ") ". mysqli_connect_error() . "</h3>");
	}

	if (mysqli_query($link, $query) == true) {
		echo "<h3 class='text-success'>Se ha modificado con éxito el estudiante</h3>";
	}else{
		echo "<h3 class='text-danger'>NO se pudo modificar el estudiante, algo ocurrio</h3>";
	}

	mysqli_close($link);
?>