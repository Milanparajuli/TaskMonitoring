
<?php 
session_start();
?>
<?php 
include 'db/connection.php';
// if(!session_start()){
// 	header("Location:login.php");
// }
// header("Location:login.php");
?>
<!DOCTYPE html>
<html>

<head>
	<title>Task Monitoring</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/40dcf4bea1.js" crossorigin="anonymous"></script>
</head>

<body>
	<!-- header start -->
	<div class="container">
		<div class="navigation">
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="home.php">Create Workspace</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="login.php">Log out</a></li>
				</ul>
			</nav>
		</div>
	</div>


	<!-- <div class="hero"> -->
	<div class="todo-box">
		<h1>To-do</h1>
		<hr>
		<?php
		$useridquery = "select * from task";
		$abc =  mysqli_query($con, $useridquery);
		$xyz = mysqli_fetch_assoc($abc);
		$userid = $xyz['userid']; 

		$selectquery = "select * from task where userid = '$userid'";
		$result = mysqli_query($con, $selectquery);
		if (mysqli_num_rows($result)) {
			while ($row = mysqli_fetch_assoc($result)) {

		?>
				<h3>
					<?php echo $row['id']; ?>) 
					<?php echo $row['todotask']; ?>
					
				</h3>
		<?php
			}
		}
		?>
		<div class="add-more-button">
			<button class="add-button" type="submit"><span class="todoAddMore toggle-btn"><a href="addtask.php" onclick="return header('Location:addtask.php')";> Add More  <i class="fas fa-plus"></i></a></span></button>
		</div>

	</div>
	<!-- </div> -->

	<!-- <div class="hero"> -->
	<div class="doing-box">
		<h1>Doing</h1>
		<hr>
		<div class="add-more-button">
			<button class="add-button"><span class="doingAddMore toggle-btn">Add more <i class="fas fa-plus"></i></span></button>
		</div>

	</div>
	<!-- </div> -->

	<div class="done-box">
		<h1>Done</h1>
		<hr>
		<div class="add-more-button">
			<button class="add-button"><span class="doneAddMore toggle-btn">Add more <i class="fas fa-plus"></i></span></button>
		</div>

	</div>
</body>

</html>