<h1>Hello world</h1>
<?php
require 'connection.php';
if (isset($_POST['submit'])) {
    $password = md5($_POST['userpassword']);
    $otp = $_POST['otp'];

    $updateQuery = "UPDATE users SET password = '$password' , otp = 0 WHERE otp = '$otp' ";
    $result = mysqli_query($con, $updateQuery);

    if ($result) {
        header('Location:../newpassword.php?created=1');
    }
}

?>