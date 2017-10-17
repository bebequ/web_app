<?php
	require("config/config.php");
	require("lib/db.php");
	$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
	$query = "DELETE FROM topic WHERE id=".$_GET['id'];
	//echo $query;
	mysqli_query($conn, $query);
	header("Location:http://localhost/index.php");
?>
