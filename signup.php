<!DOCTYPE html>
<html>
<head>
	<title>Regester</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<a href="login.php"><button type="button" class="toggle-btn">Login</button></a>
				<a href="signup.php"><button type="button" class="toggle-btn register">Register</button></a>
			</div>
			<form class="input-group">
				<input type="text" name="name" class="input-field" placeholder="Enter Name" required>
				<input type="email" name="username" class="input-field" placeholder="Enter Email" required>
				<input type="password" name="userpassword" class="input-field" placeholder="Enter password"required>
				<input type="password" name="repassword" class="input-field" placeholder="Re-Enter password" required>
				<a href="login.php">Already have an account?</a>
				<a href="login.php"><button type="submit" class="submit-btn">Register</button></a>
			</form>
		</div>
	</div>
</body>
</html>