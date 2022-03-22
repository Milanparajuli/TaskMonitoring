<?php 

session_start();
unset($_SESSION['fullname']);
echo "session destroy";


// if(session_destroy()){
// 	header("Location: ../login.php");
// }
?>