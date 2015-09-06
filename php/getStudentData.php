<?php 
	header("Content-Type:text/plain");
	//$id = $_GET["id"];
	include "DBVar.php";
	$query = "SELECT `id`, `name`, `lastname`, `birthdate`, `dateAdmission`, `gender`, `email`, `career` FROM `student` WHERE `id` == $id";
	$link = mysqli_connect($DBServer, $DBUser, $DBPass, $DBName);
?>