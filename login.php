<?php
// session_start();
// if(isset){

// }

?>
<!DOCTYPE html>
<html>

<head>
	<title>Task Monitoring || Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/40dcf4bea1.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class="hero">
		<div class="form-box">
			<?php
			if (isset($_GET['created'])) {
				$msg = "Registured Sucessfully";
				echo '<p style="color: #5cb85c;">' . $msg . '</p>';
			}
			?>
			<div class="button-box">
				<div id="btn"></div>
				<a href="login.php"><button type="button" class="toggle-btn login">Login</button></a>
				<a href="signup.php"><button type="button" class="toggle-btn">Register</button></a>
			</div>

			<form class="input-group" method="POST" action="db/login.php">
				<?php
				if (isset($_GET['invalid'])) {
					$msg = "Wrong either email or password";
					echo '<p style="color: red;">' . $msg . '</p>';
				}
				?>
				<input type="email" name="useremail" class="input-field" placeholder="Enter Email" required>
				<input type="password" name="userpassword" class="input-field" placeholder="Enter password" required>
				<a href="forgotpassword.php">Forgot password?</a>
				<button type="submit" class="submit-btn" name="submit" value="Log in">Log in</button>
			</form>
		</div>
	</div>