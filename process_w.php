<?php
	require("config/config.php");
	require("lib/db.php");
	$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
	$query = "SELECT * FROM user WHERE name='".$_POST['name']."'";
	$result = mysqli_query($conn, $query);
	//var_dump($result);		
	$password = mysqli_real_escape_string($conn, '1111');
	if($result->num_rows == 0 ) {
		$query = "INSERT INTO user(name, password) VALUES('".$_POST['name']."', '".$password."')"; 	
		mysqli_query($conn, $query);
		$author = mysqli_insert_id($conn);	
	} else {
		$row = mysqli_fetch_assoc($result);
		$author = $row['id']; 
	}
	
	$query = "INSERT INTO topic (title, description, author, created) VALUES('".$_POST['title']."','".$_POST['description']."','".$author."',Now())";
	mysqli_query($conn, $query);
	header("Location:http://localhost/index.php");
?>
