<?php 
	require "db/connection.php";
	?>
<!DOCTYPE html>
<html>

<head>
	<title>Task Monitoring</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="https://kit.fontawesome.com/40dcf4bea1.js" crossorigin="anonymous"></script>
</head>

<body>
	<!-- header start -->
	<div class="container">
		<div class="navigation">
			<nav>
				<ul>
					<li><a href="index.php?id=<?php echo $row['userid']?>">Home</a></li>
					<!-- <li><a href="home.php">Create Workspace</a></li> -->
					<!-- <li><a href="setting.php">Setting</a></li> -->
					<li><a href="db/logout.php">Log out</a></li>
					
				</ul>
			</nav>
		</div>
	</div>

	<?php 
	$un = $_SESSION['fullName'];
	$query = "SELECT * FROM task";

	$result = mysqli_query($con, $query);
	
	$row = mysqli_fetch_assoc($result);
	$userid = $row['userid'];
	?>