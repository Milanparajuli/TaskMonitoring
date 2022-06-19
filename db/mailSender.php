<?php
require 'connection.php';
// if (isset($_POST['submit'])) {
$usermail = $_POST['useremail'];
// echo "User email is:".$usermail;
// }
$to_email = $usermail;


$sqlQuery = "SELECT * FROM users where email = '$usermail'";
$queryExecute = mysqli_query($con, $sqlQuery);

echo $email_count = mysqli_num_rows($queryExecute);
$fetch = mysqli_fetch_array($queryExecute);
// $id = $fetch['userid'];	
$name = $fetch['fullName'];


if ($email_count == 0) {
    header('Location:../forgotpassword.php?notMailSend=1');
} else {
    $otp = generateNumericOTP();
    $otpQuery = "UPDATE users SET otp ='$otp' WHERE email ='$usermail'";
    $result = mysqli_query($con, $otpQuery);

    $subject = "password reset";
    $body = "Hi," . $name . " your reset link is http://localhost/ProjectI/newpassword.php  and OTP is : " . $otp;
    $headers = "From: sender\'s email";
    if (mail($to_email, $subject, $body, $headers)) {
        header('Location:../forgotpassword.php?valid=1');
    } else {
        // echo "Email sending failed...";
        header('Location:../forgotpassword.php?failedMailSend=1');
    }
}


// otp generator
function generateNumericOTP()
{
    // Take a generator string which consist of
    // all numeric digits
    $generator = "1357902468";

    // Iterate for n-times and pick a single character
    // from generator and append it to $result

    // Login for generating a random character from generator
    //	 ---generate a random number
    //	 ---take modulus of same with length of generator (say i)
    //	 ---append the character at place (i) from generator to result

    $result = "";

    for ($i = 1; $i <= 4; $i++) {
        $result .= substr($generator, (rand() % (strlen($generator))), 1);
    }

    // Return result
    return $result;
}
