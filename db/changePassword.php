<h1>Hello world</h1>
<?php
require 'connection.php';
if (isset($_POST['submit'])) {
    $password = md5($_POST['userpassword']);
    $otp = $_POST['otp'];

    $sqlQuery = "SELECT * FROM users where otp = '$otp'";
    $queryExecute = mysqli_query($con, $sqlQuery);

    echo $otp_count = mysqli_num_rows($queryExecute);
    $fetch = mysqli_fetch_array($queryExecute);
    if ($otp_count == 0) {
        header('Location:../newpassword.php?notcreated=1');
    } else {

        $updateQuery = "UPDATE users SET password = '$password' , otp = 0 WHERE otp = '$otp' ";
        $result = mysqli_query($con, $updateQuery);

        if ($result) {
            header('Location:../newpassword.php?created=1');
        }
    }
}

?>