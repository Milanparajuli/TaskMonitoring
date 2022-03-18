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
			<div class="button-box">
				<div id="btn"></div>
				<a href="login.php"><button type="button" class="toggle-btn login">Login</button></a>
				<a href="signup.php"><button type="button" class="toggle-btn">Register</button></a>
			</div>
			<form class="input-group" method="POST" action="db/login.php">
				<input type="email" name="useremail" class="input-field" placeholder="Enter Email" required>
				<input type="password" name="userpassword" class="input-field" placeholder="Enter password" required>
				<!-- <a href="#">Forgot password?</a> -->
				<button type="submit" class="submit-btn"  name="submit" value="Log in">Log in</button>
			</form>
		</div>
	</div>
</body>

</html>