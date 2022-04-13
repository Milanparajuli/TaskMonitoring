<?php
session_start();
require 'connection.php';

$sqlquery = "SELECT * FROM task";

// $id = $_GET['id'];
$queryexecute =  mysqli_query($con, $sqlquery);
// if (mysqli_num_rows($queryexecute)) {
    $row = mysqli_fetch_assoc($queryexecute);
    $taskid = $_POST['id'];
    $userid = $_SESSION['userid'];
    $value = $_POST['task'];
    // echo " task id =".$taskid."userid = ".$userid;
    // while ($row) {
        $query = "UPDATE task set todotask = '$value' WHERE id = '$taskid'";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo "Moved";
            header("Location:../index.php?id=".$userid);
        }
    // }
// }
?>


