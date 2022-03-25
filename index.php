<?php
session_start();

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
	<?php 
	include 'combine/nav.php';
	
	?>

	<?php
	$id= $_GET['id'];
	echo $id;
   if(isset($add))
   {
	header('Location:addtask.php?'.$id);
   }
	?>
	
	<!-- header start -->
	
	<!-- <h1>Welcome <?php echo $_SESSION['useremail']; ?></h1> -->


	<!-- <div class="hero"> -->
	<div class="todo-box">
		<h1>To-do</h1>
		<hr>
		<?php
		// $useridquery = "select userid from task";
		// $sqlquery =  mysqli_query($con, $useridquery);
		// $dbrow = mysqli_fetch_assoc($sqlquery);
		// $userid = $dbrow['userid'];
        
		if($id!==""){
			$selectquery = "SELECT * from task WHERE status='TODO' and userid = '$id' ";
		$result = mysqli_query($con, $selectquery);
		}
		else {
		$selectquery = "SELECT * from task WHERE status='TODO' ";
		$result = mysqli_query($con, $selectquery);
		}
		if (mysqli_num_rows($result)) {
			while ($row = mysqli_fetch_assoc($result)) {

		?>
				<div class="task-item">
					<ul>
						<li>
							<?php echo $row['todotask']; ?>
							<?php echo $row['userid']; ?>
						</li>
					</ul>
					<div class="taskaction">
						<a href="">Edit</a>
						<a href="db/deletetask.php?deleteid='.$id'">Delete</a>
						<a href="" class="move-class">Move
						<div class="move">
								<a href="db/move.php">doing</a>
								<a href="">done</a>
							</div>
						</a>
						
					</div>
				</div>

		<?php
			}
		}
		?>
		<!-- <div class="add-more-button">
			<button class="add-button" type="submit" onclick="return header('Location:addtask.php')" ;><span class="todoAddMore toggle-btn"><a href="addtask.php?id="> Add More <i class="fas fa-plus"></i></a></span></button>
		</div> -->

		<div class="add-more-button">
			<button class="add-button" type="submit" name="add" value="Add More"><a href="addtask.php">Add more</a></button>
		</div>

	</div>
	<!-- </div> -->

	<!-- <div class="hero"> -->
	<div class="doing-box">
		<h1>Doing</h1>
		<hr>
		<?php
		// $useridquery = "sSELECT userid from task WHERE";
		// $sqlquery =  mysqli_query($con, $useridquery);
		// $dbrow = mysqli_fetch_assoc($sqlquery);
		// $userid = $dbrow['userid'];

		// $selectquery = "select * from task where userid = '$userid'";
		$selectquery = "SELECT * from task WHERE status='DOING' ";
		$result = mysqli_query($con, $selectquery);
		if (mysqli_num_rows($result)) {
			while ($row = mysqli_fetch_assoc($result)) {

		?>
				<!-- <h3> -->
				<!-- <?php echo $row['id']; ?>)  -->
				<!-- <?php echo $row['doingtask']; ?> -->
				<!-- <?php echo $row['userid']; ?> -->

				<!-- </h3> -->
				<div class="task-item">
					<ul>
						<li><?php echo $row['todotask']; ?></li>
					</ul>
				</div>
		<?php
			}
		}
		?>
		<!-- <div class="add-more-button">
			<button class="add-button" type="submit" onclick="return header('Location:addtask.php')" ;><span class="todoAddMore toggle-btn"><a href="taskdoing.php"> Add More <i class="fas fa-plus"></i></a></span></button>
		</div> -->

	</div>
	<!-- </div> -->

	<div class="done-box">
		<h1>Done</h1>
		<hr>
		<?php
		// $useridquery = "SELECT * from task WHERE status='DONE' ";
		// $sqlquery =  mysqli_query($con, $useridquery);
		// $dbrow = mysqli_fetch_assoc($sqlquery);
		// $userid = $dbrow['userid'];

		// $selectquery = "select * from task where userid = '$userid'";
		$selectquery = "SELECT * from task WHERE status='DONE' ";
		$result = mysqli_query($con, $selectquery);
		if (mysqli_num_rows($result)) {
			while ($row = mysqli_fetch_assoc($result)) {

		?>
				<div class="task-item">
					<ul>
						<li><?php echo $row['todotask']; ?></li>
					</ul>
				</div>
		<?php
			}
		}
		?>
		<!-- <div class="add-more-button">
			<button class="add-button" type="submit" onclick="return header('Location:addtask.php')" ;><span class="todoAddMore toggle-btn"><a href="taskdone.php"> Add More <i class="fas fa-plus"></i></a></span></button>
		</div> -->

	</div>
</body>

</html>