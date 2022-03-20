
<?php 
// session_start();

include 'db/connection.php';
// if(!session_start()){
// 	header("Location:login.php");
// }
// header("Location:index.php");
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
					<!-- <li><a href="home.php">Create Workspace</a></li> -->
					<li><a href="setting.php">Setting</a></li>
					<li><a href="db/logout.php">Log out</a></li>
					
				</ul>
			</nav>
		</div>
	</div>

	<!-- <h1>Welcome <?php echo $_SESSION['useremail']; ?></h1> -->


	<!-- <div class="hero"> -->
	<div class="todo-box">
		<h1>To-do</h1>
		<hr>
		<?php
		$useridquery = "select userid from task";
		$sqlquery =  mysqli_query($con, $useridquery);
		$dbrow = mysqli_fetch_assoc($sqlquery);
		$userid = $dbrow['userid']; 

		$selectquery = "select * from task where userid = '$userid'";
		$selectquery = "select * from task";
		$result = mysqli_query($con, $selectquery);
		if (mysqli_num_rows($result)) {
			while ($row = mysqli_fetch_assoc($result)) {

		?>
				<h3>
					<!-- <?php echo $row['id']; ?>)  -->
					<?php echo $row['todotask']; ?>
					<?php echo $row['userid']; ?>
					
				</h3>
		<?php
			}
		}
		?>
		<div class="add-more-button">
			<button class="add-button" type="submit" onclick="return header('Location:addtask.php')";><span class="todoAddMore toggle-btn"><a href="addtask.php" > Add More  <i class="fas fa-plus"></i></a></span></button>
		</div>

	</div>
	<!-- </div> -->

	<!-- <div class="hero"> -->
	<div class="doing-box">
		<h1>Doing</h1>
		<hr>
		<?php
		$useridquery = "select userid from task";
		$sqlquery =  mysqli_query($con, $useridquery);
		$dbrow = mysqli_fetch_assoc($sqlquery);
		$userid = $dbrow['userid']; 

		$selectquery = "select * from task where userid = '$userid'";
		$selectquery = "select * from task";
		$result = mysqli_query($con, $selectquery);
		if (mysqli_num_rows($result)) {
			while ($row = mysqli_fetch_assoc($result)) {

		?>
				<h3>
					<!-- <?php echo $row['id']; ?>)  -->
					<?php echo $row['doingtask']; ?>
					<!-- <?php echo $row['userid']; ?> -->
					
				</h3>
		<?php
			}
		}
		?>
		<div class="add-more-button">
		<button class="add-button" type="submit" onclick="return header('Location:addtask.php')";><span class="todoAddMore toggle-btn"><a href="taskdoing.php" > Add More  <i class="fas fa-plus"></i></a></span></button>
		</div>

	</div>
	<!-- </div> -->

	<div class="done-box">
		<h1>Done</h1>
		<hr>
		<?php
		$useridquery = "select userid from task";
		$sqlquery =  mysqli_query($con, $useridquery);
		$dbrow = mysqli_fetch_assoc($sqlquery);
		$userid = $dbrow['userid']; 

		$selectquery = "select * from task where userid = '$userid'";
		$selectquery = "select * from task";
		$result = mysqli_query($con, $selectquery);
		if (mysqli_num_rows($result)) {
			while ($row = mysqli_fetch_assoc($result)) {

		?>
				<h3>
					<!-- <?php echo $row['id']; ?>)  -->
					<?php echo $row['donetask']; ?>
					<!-- <?php echo $row['userid']; ?> -->
					
				</h3>
		<?php
			}
		}
		?>
		<div class="add-more-button">
		<button class="add-button" type="submit" onclick="return header('Location:addtask.php')";><span class="todoAddMore toggle-btn"><a href="taskdone.php" > Add More  <i class="fas fa-plus"></i></a></span></button>
		</div>

	</div>
</body>

</html>