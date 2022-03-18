
	<?php
	session_start();
     include 'connection.php';
		if(isset($_POST['submit'])){
			$email = $_POST['useremail']; 
			$password = md5($_POST['userpassword']);
            // echo $password;
			$query = "select * from users where email='$email' AND password = '$password'";
			$result = mysqli_query($con,$query);
			$email_count = mysqli_num_rows($result);
			if($email_count==0){
                // $msg =  "email or passsword does not match";
                header('Location:../login.php');
                echo '<script>alert(email or password dosent matched)</script>';
			}else{
                header("Location:../index.php");
            }
		}else{
            die("not allowed");
        }

	
	?>