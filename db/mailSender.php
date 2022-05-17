<?php

// ini_set("smtp_server","smtp.gmail.com");
// ini_set("smtp_port","465");
// ini_set('sendemail_path', 'C://xampp//sendmail//sendmail.exe -t');
// ini_set("sendemail_from", "milanparajuli2058@gmail.com");
// ini_set("smtp_ssl", "tls");

// $headers  = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
// $headers  .= "From: NO-REPLY<no-reply@mydomain.com>" . "\r\n";

// $isSent  = mail( 'milan.parajuli@aadimcollege.edu.np', "Testing", "Hello World", $headers );

// if($isSent){
//     echo 'Email sent. Please check your email to reset your password.';
// }else{
//     echo 'Email send failed.';
// }

$to_email = "milanbhai2058@gmail.com";
$subject = "password reset";
$body = "Hi, your reset link is http://localhost/ProjectI/newpassword.php";
$headers = "From: sender\'s email";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>