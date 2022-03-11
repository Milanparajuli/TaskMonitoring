<!DOCTYPE html>
<html>

<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div class="hero">
		<div class="form-box">
			<div class="adminHead">
				<h1>Admin Login</h1>
			</div>
			<form class="input-group" action="index.php" method="POST">
				<input type="text" name="adminname" class="input-field" placeholder="Enter User Name" required>
				<input type="password" name="adminpassword" class="input-field" placeholder="Enter password" required>
				<button type="submit" class="submit-btn" value="Login">Login</button>
			</form>

			<?php include 'connection.php';
			if (connectionDatabase()) {
				$adminname = $_POST["adminname"];
				$password = $_POST["adminpassword"];
				$sql = "select * from adminlogin where username = '$adminname' and password = 'password'";
				$result = mysqli_query($con, $sql);


				if ($row['username'] === $adminname && $row['password'] === $password) {
					echo "login";
					$_SESSION['username'] = $row['username'];

					$_SESSION['password'] = $row['password'];

					

					header("Location: index.php");

					exit();
				} else {

					header("Location: admin.php?error=Incorect User name or password");

					exit();
				}
			}

			?>
		</div>
	</div>
</body>

</html>