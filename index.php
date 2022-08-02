<div class="allContent">
<?php
session_start();

include 'db/connection.php';
?>

<link rel="stylesheet" type="text/css" href="css/style.css">

<?php
if (isset($_GET['id'])) {
	include 'combine/nav.php';
	$id = ($_GET['id']);
	if (isset($add)) {
		header('Location:addtask.php?' . $id);
	}
?>

<div class="container">
	<div class="user-profile">
		<h1>Welcome,</h1>
		<h3><?php echo $_SESSION['fullName']; ?></h3>
	</div>
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
					<form action="db/edittask.php" method="post">
						<textarea name="task" id="" cols="" rows="" class="text-primary"><?php echo $row['todotask']; ?></textarea>
						<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
						<?php
						$taskid = $row['id'];
						?>
						<div class="taskaction">
							<!-- <a href="db/edittask.php?id=<?php echo $row["id"]; ?>&& userid=<?php echo $row['userid']; ?>&& task=<?php echo $row['todotask']; ?>" class="addMore">Edit</a> -->
							<!-- <button >Edit</button> -->
							<!-- <a href="db/deletetask.php?id=".$taskid>Delete</a> -->
							<a href="db/deletetask.php?id=<?php echo $row["id"]; ?>&&userid=<?php echo $row['userid']; ?>" class="addMore" onclick="return  confirm('are you sure want to delete?')">Delete</a>
							<a href="db/movedoing.php?id=<?php echo $row["id"]; ?>&&userid=<?php echo $row['userid']; ?>" class="addMore">Doing</a>
							<a href="db/movedone.php?id=<?php echo $row["id"]; ?>&&userid=<?php echo $row['userid']; ?>" class="addMore">Done</a>
							<input type="submit" value="Edit">
						</div>
					</form>
				</div>

		<?php
			}
		}
		?>


		<div class="add-more-button">
			<?php $userid = $_GET['id']; ?>
			<a href="addtask.php?id=<?php echo $userid; ?>" class="addMore">Add more</a>
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
				<form action="db/edittask.php" method="post">
					<div class="task-item">
						<textarea name="task" id="task" cols="" rows="" class="text-primary"><?php echo $row['todotask']; ?></textarea>
						<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
						<div class="taskaction">


							<!--<a href="edittask.php?id=<?php echo $row["id"]; ?> && userid=<?php echo $row['userid']; ?>" class="addMore">Edit</a>
				-->

							<a href="db/deletetask.php?id=<?php echo $row["id"]; ?> && userid=<?php echo $row['userid']; ?>" class="addMore" onclick="return  confirm('are you sure want to delete?')">Delete</a>
							<a href="db/movetodo.php?id=<?php echo $row["id"]; ?> && userid=<?php echo $row['userid']; ?>" class="addMore">Todo</a>
							<a href="db/movedone.php?id=<?php echo $row["id"]; ?> && userid=<?php echo $row['userid']; ?>" class="addMore">Done</a>
							<input type="submit" value="Edit">
						</div>
					</div>
				</form>

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
					<!-- <ul>
							<li>
								<?php echo $row['todotask']; ?>
								<?php echo $row['userid']; ?>
							</li>
						</ul> -->
					<form action="db/edittask.php" method="post">
						<textarea name="task" id="" cols="" rows="" class="text-primary"><?php echo $row['todotask']; ?></textarea>
						<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
						<div class="taskaction">
							<!-- <a href="edittask.php" class="addMore">Edit</a> -->
							<a href="db/deletetask.php?id=<?php echo $row["id"]; ?> && userid=<?php echo $row['userid']; ?>" class="addMore" onclick="return  confirm('are you sure want to delete?')">Delete</a>
							<a href="db/movetodo.php?id=<?php echo $row["id"]; ?> && userid=<?php echo $row['userid']; ?>" class="addMore">Todo</a>
							<a href="db/movedoing.php?id=<?php echo $row["id"]; ?> && userid=<?php echo $row['userid']; ?>" class="addMore">Doing</a>
							<input type="submit" value="Edit">
						</div>
					</form>
				</div>

		<?php
			}
		}
	} else {
		?>
			<div class="hero">
		<div class="form-box">
			
		<div class="sessionend">
			<div class="not-login-msg">
				<h1>Welcome,</h1>
				<h2>Task Monitoring</h2>
				<h2 style="margin-bottom: 25px;">please login first</h2>
				<a href="login.php" style="font-size: 40px;">Login</a>
			</div>

			
		</div>
	</div>
		</div>
	<?php
	}
	?>

	</div>
