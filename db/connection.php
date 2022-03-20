<?php
    // session_start();
    $server = "localhost";
    $username = "root";
    $password = "";
    $database =  "taskmonitoring";
    $con = mysqli_connect($server, $username, $password, $database);
    if (!$con) {
        die ("not connected".mysqli_connect_error());
    }else{
        // echo "connected";
    }
?>
