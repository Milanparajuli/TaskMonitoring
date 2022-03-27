	<?php
	session_start();
	require 'connection.php';
	if (isset($_POST['submit'])) {
		// $name = $_POST['fullname'];
		$email = $_POST['useremail'];
		$password = md5($_POST['userpassword']);
		// echo $password;
		$query = "select * from users where email='$email' AND password = '$password'";
		$result = mysqli_query($con, $query);
		$email_count = mysqli_num_rows($result);
		$fetch = mysqli_fetch_array($result);
		$id = $fetch['userid'];	
		if ($email_count == 0) {
			echo '<script type="text/javascript">';
			echo ' alert("Not valid user name or password")';  //not showing an alert box.
			echo '</script>';
			header('Location:../login.php');
		} else {
			// $_SESSION['fullname'] = $id;
			header("Location:../index.php?id=" . $id);
		}
	} else {
		die("not allowed");
	}


	?>
	<?php
	?>