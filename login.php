<!DOCTYPE html>
<html>
<head>
	<title>Task Monitoring || Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/40dcf4bea1.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]== "POST"){
 include 'connection.php';
 $email= $_POST["useremail"];
 $password= $_POST["userpassword"];

  //  $sql="Select * from users where email='$email' AND password='$password'";
  $sql = "Select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
 if($num==1){
  while($row=mysqli_fetch_assoc($result)){
    if (password_verify($password, $row['password'])){
       $login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['email']=$email;
        header("location:index.php");
    }
    else{
      $showError = "Username or password not match";
  }
  }
 }
 else{
  $showError="not register with this emil";
 }
}
?>
	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<a href="login.php"><button type="button" class="toggle-btn login">Login</button></a>
				<a href="signup.php"><button type="button" class="toggle-btn">Register</button></a>
			</div>
			<form class="input-group" method="POST" action="login.php">
				<input type="email" name="useremail" class="input-field" placeholder="Enter Email" required>
				<input type="password" name="userpassword" class="input-field" placeholder="Enter password" required>
				<a href="#">Forgot password?</a>
				<button type="submit" class="submit-btn" value="Log in">Log in</button>
			</form>
		</div>
	</div>
</body>
</html>