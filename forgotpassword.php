<!DOCTYPE html>
<html>

<head>
	<title>Task Monitoring</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/40dcf4bea1.js" crossorigin="anonymous"></script>
</head>

<body>

	
	<div class="hero">
		<div class="form-box">
			<div class="button-box">
                <div class="btn-text">
                <h4>Find Your Account</h4>
                <p>Please enter your email to search for your account.</p>
                </div>
                
			</div>
            
			<form class="input-group" method="POST" action="db/login.php">
				<input type="email" name="useremail" class="input-field" placeholder="Enter Email" required>
				<!-- <button type="submit" class="submit-btn"  name="submit" value="Submit">Submit</button> -->
                <a href="login.php"><button type="button" class="toggle-btn">Submit</button></a>
                <a href="login.php"><button type="button" class="toggle-btn">Cancel</button></a>
			</form>
		</div>
	</div>
</body>

</html>