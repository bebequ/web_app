<?php
	require("config/config.php");
	require("lib/db.php");
	$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
	$result = mysqli_query($conn, "SELECT * FROM topic");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Happy Coding!</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<lme="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="target">
	<div class="container">
		<header class="jumbotron text-center">	
			<img src="./coding.jpeg" alt="coding!" class="rounded" id="logo">
			<h1><a href="./index.php">Happy Web Coding</a></h1>
		</header>	
		<div class="row">
			<nav class="col-md-3">
				<ol class="nav nav-pills flex-column">
					<?php
					//echo file_get_contents('list.txt')
					while($row = mysqli_fetch_assoc($result)){
						echo "<li><a href='http://localhost/index.php?id=".$row["id"]."'>".htmlspecialchars($row['title'])."</a></li>"."\n";
					}		
					?>
				</ol>
			</nav>
		<nav class="col-md-9">	
			<article>
				<form action="process_w.php" method="post">
					<div class="form-group">
						<label for="form-title">Title : </label>
						<input type="text" class="form-control" name="title" id="form-title" placeholder="Write title here">
	      				</div>
					<div class="form-group">
						<label for="form-author">Author : </label>
						<input type="text" class="form-control" name="author" id="form-author" placeholder="Write an author here">
				        </div>
				        <div class="form-group">
						<label for="form-description">Description : </label>
						<textarea class="form-control" rows="10" name="description"  id="form-description" placeholder="Write description here"></textarea>
				        </div>
					<input type="submit">
				</form>
			</article>
			<hr>
			<div id="control">
				<div class="btn-group">
				<input type="button" value="white" onclick="getElementById('target').className='while'" class="btn btn-default btn-lg">
				<input type="button" value="black" onclick="getElementById('target').className='black'" class="btn btn-default btn-lg">	
				</div>
				<div class="btn-group">
				<a href="write.php" class="btn btn-success btn-lg">Write </a>	
				<?php
					if(empty($_GET['id'])==false) {
						echo "<a href='edit.php?id=".$_GET['id']."' class='btn btn-success btn-lg'>Edit </a>";
						echo "<a href='process_d.php?id=".$_GET['id']."' class='btn btn-success btn-lg'>Delete </a>";	
					} 
				?>
				</div>
			</div>
		</div>
	</div>
	<!-Optional JavaScript -->
    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<script src="bootstrap/lib/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    	<script src="bootstrap/lib/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    	<script src="bootstrap/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>
