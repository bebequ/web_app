<?php
	require("config/config.php");
	require("lib/db.php");
	$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
	$query = "SELECT * FROM user WHERE name='".$_POST['name']."'";
	$result = mysqli_query($conn, $query);
	//var_dump($result);		
	if($result->num_rows == 0 ) {
		$query = "INSERT INTO user(name, password) VALUES('".$_POST['name']."', '1111')"; 	
		mysqli_query($conn, $query);
		$author = mysqli_insert_id($conn);	
	} else {
		$row = mysqli_fetch_assoc($result);
		$author = $row['id']; 
	}
	
	$query = "UPDATE topic SET title='".$_POST['title']."', description='".$_POST['description']."', author=".$author." WHERE id=".$_POST['id'];
	mysqli_query($conn, $query);
	header("Location:http://localhost/index.php");
?>
