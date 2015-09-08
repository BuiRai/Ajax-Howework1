<?php 
	header("Content-Type:text/plain");
	$name = $_POST["username"];
	$pass = $_POST["pass"];
	include "../DBVar.php";
	echo "dasdas";
	$link = mysqli_connect($DBServer, $DBUser, $DBPass, $DBName);

	$query = "SELECT * FROM `manager` WHERE name = '$name'";
	
	if ( !$link ) {
		die("<h3 class='text-danger'>Error de Conexión (" . mysqli_connect_errno() . ") ". mysqli_connect_error() . "</h3>");
	}

	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_array($result);

	if ( $name == $row[1] && $pass == $row[2] ) {
		$row = mysqli_fetch_array($result);
		session_start();
		$_SESSION["name"] = $name;
		$_SESSION["pass"] = $pass;
		
		header("location:../../");
	}else{
		header("location:../../");
	}
	mysqli_close($link);

?>