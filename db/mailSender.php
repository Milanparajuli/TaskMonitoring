<?php
require 'connection.php';
// if (isset($_POST['submit'])) {
    $usermail = $_POST['useremail'];
    // echo "User email is:".$usermail;
// }
$to_email = $usermail;
$subject = "password reset";
$body = "Hi, Milan daju your reset link is http://localhost/ProjectI/newpassword.php";
$headers = "From: sender\'s email";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
