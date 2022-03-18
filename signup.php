
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
			<form class="input-group" action="db/signup.php" method="post">
				<input type="text" name="name" class="input-field" placeholder="Enter Name" required>
				<input type="email" name="useremail" class="input-field" placeholder="Enter Email" required>
				<input type="password" name="userpassword" class="input-field" placeholder="Enter password"required>
				<input type="password" name="repassword" class="input-field" placeholder="Re-Enter password" required>
				<a href="login.php">Already have an account?</a>
				<button type="submit" class="submit-btn" name="submit" value="submit">Register</button>
			</form>
		</div>
	</div>
</body>
</html>