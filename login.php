<?php 
	session_start();
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

	
	<?php include 'connection.php';
		if(isset($_POST['submit'])){
			$email = $_POST['useremail']; 
			$password = $_POST['userpassword'];
			$email_search = "select * from users where email='$email'";
			$query = mysqli_query($con,$email_search);
			$email_count = mysqli_num_rows($query);
			if($email_count){
				// $fetchpass = mysqli_fetch_assoc($query); //assoc => PHP Associative Arrays
				// $db_pass = $fetchpass['password'];
				// $pass_decode = password_verify($password,$db_pass);
				// if(!$pass_decode){
				// 	echo "incorrect email or password";
				// }
				

				$dbpass= "select * from users where password = '$password'";
				// $_SESSION['name']= ;
				$pquery = mysqli_query($con,$dbpass);
				$pass_count = mysqli_num_rows($pquery);
				if(!$pass_count){
					echo "incorrect password";
				}else{
					header("location:index.php");
				}
			}
		}else{
			echo "invalid email";
		}
	
	?>
	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<a href="login.php"><button type="button" class="toggle-btn login">Login</button></a>
				<a href="signup.php"><button type="button" class="toggle-btn">Register</button></a>
			</div>
			<form class="input-group" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
				<input type="email" name="useremail" class="input-field" placeholder="Enter Email" required>
				<input type="password" name="userpassword" class="input-field" placeholder="Enter password" required>
				<!-- <a href="#">Forgot password?</a> -->
				<button type="submit" class="submit-btn"  name="submit" value="Log in">Log in</button>
			</form>
		</div>
	</div>
</body>

</html>