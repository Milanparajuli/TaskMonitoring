<?php
session_start();

include 'db/connection.php';
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

	?>

	<?php
	if (isset($_GET['id'])) {
		include 'combine/nav.php';
		$id = ($_GET['id']);
		if (isset($add)) {
			header('Location:addtask.php?' . $id);
		}
	?>

		<!-- header start -->


		<!-- <div class="hero"> -->
		<div class="todo-box">
			<h1>To-do</h1>
			<hr>
			<?php


			if ($id !== "") {
				$selectquery = "SELECT * from task WHERE status='TODO' and userid = '$id' ";
				$result = mysqli_query($con, $selectquery);
			} else {
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
								<?php echo $row['id']; ?>
							</li>
						</ul>
						<?php
						$taskid = $row['id'];
						?>
						<div class="taskaction">
							<a href="edittask.php?id=<?php echo $row["id"]; ?>">Edit</a>
							<!-- <a href="db/deletetask.php?id=".$taskid>Delete</a> -->
							<a href="db/deletetask.php?id=<?php echo $row["id"]; ?>">Delete</a>
							<a href="db/movedoing.php?id=<?php echo $row["id"]; ?>">Doing</a>
							<a href="db/movedone.php?id=<?php echo $row["id"]; ?>">Done</a>
						</div>
					</div>

			<?php
				}
			}
			?>


			<div class="add-more-button">
				<?php $userid = $_GET['id'];?>
				<button class="add-button" type="submit" name="add" value="Add More"><a href="addtask.php?id=<?php echo $userid;?>">Add more</a></button>
			</div>

		</div>
		<!-- </div> -->

		<!-- <div class="hero"> -->
		<div class="doing-box">
			<h1>Doing</h1>
			<hr>
			<?php

			// $selectquery = "select * from task where userid = '$userid'";

			if ($id !== "") {
				$selectquery = "SELECT * from task WHERE status='DOING' and userid = '$id' ";
				$result = mysqli_query($con, $selectquery);
			} else {
				$selectquery = "SELECT * from task WHERE STATUS='DOING' ";
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
							<a href="edittask.php?id=<?php echo $row["id"]; ?>">Edit</a>
							<a href="db/deletetask.php?id=<?php echo $row["id"]; ?>">Delete</a>
							<a href="db/movetodo.php?id=<?php echo $row["id"]; ?>">Todo</a>
							<a href="db/movedone.php?id=<?php echo $row["id"]; ?>">Done</a>
						</div>
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

			if ($id !== "") {
				$selectquery = "SELECT * from task WHERE status='DONE' and userid = '$id' ";
				$result = mysqli_query($con, $selectquery);
			} else {
				$selectquery = "SELECT * from task WHERE STATUS='DONE' ";
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
							<a href="edittask.php">Edit</a>
							<a href="db/deletetask.php?id=<?php echo $row["id"]; ?>">Delete</a>
							<a href="db/movetodo.php?id=<?php echo $row["id"]; ?>">Todo</a>
							<a href="db/movedoing.php?id=<?php echo $row["id"]; ?>">Doing</a>
						</div>
					</div>

			<?php
				}
			}
		} else {
			?>
			<div class="sessionend">
				<div class="not-login-msg">
					<h1>Welcome</h1>
					<h2>please login first</h2>
					<a href="login.php">Login</a>
				</div>
			</div>
		<?php
		}
		?>
		<!-- <div class="add-more-button">
			<button class="add-button" type="submit" onclick="return header('Location:addtask.php')" ;><span class="todoAddMore toggle-btn"><a href="taskdone.php"> Add More <i class="fas fa-plus"></i></a></span></button>
		</div> -->

		</div>
</body>

</html>