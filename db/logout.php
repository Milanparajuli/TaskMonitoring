<?php 

session_start();
unset($_SESSION['fullname']);
echo "session destroy";
header("Location: ../login.php");


// if(session_destroy()){
// 	header("Location: ../login.php");
// }
?>