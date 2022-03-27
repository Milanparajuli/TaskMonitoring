<?php 

session_start();
unset($_SESSION['fullname']);
echo "session destroy";
header("Location: ../login.php");

?>