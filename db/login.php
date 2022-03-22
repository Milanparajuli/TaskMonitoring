
	<?php
	session_start();
	require 'connection.php';
		if(isset($_POST['submit'])){
			$name = $_POST['fullname'];
			$email = $_POST['useremail']; 
			$password = md5($_POST['userpassword']);
            // echo $password;
			$query = "select * from users where email='$email' AND password = '$password'";
			$result = mysqli_query($con,$query);
			$email_count = mysqli_num_rows($result);
			if($email_count==0){
                $msg =  "email or passsword does not match";
                header('Location:../login.php');
                // echo '<script>alert("email or password dosent matched")</script>';
				echo $msg;
			}else{
				$_SESSION['fullname'] = $username;
                header("Location:../index.php");
            }
		}else{
            die("not allowed");
        }

	
	?>
	<?php
// if($_SERVER["REQUEST_METHOD"] == "POST") {
//     $myusername = $_POST['Uname'];
//     $mypassword = $_POST['Pass'];

//     $sql = "SELECT id, username FROM logindatabase WHERE Username = '$myusername' and Password = '$mypassword'";
//     $result = mysqli_query($conn,$sql);
//     $row = mysqli_fetch_assoc($result);

//     $count = mysqli_num_rows($result);

//     if($count == 1) {
//         $username = $row['username'];
//         $_SESSION['username'] = $username;

//         header("location: ../admin/adminDashboard.php");
//     }else {
//         $error = "Your Login Name or Password is invalid";
//         echo $error;
//     }
// }
?>