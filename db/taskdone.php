<?php
include 'connection.php';

// $sqlquery = "SELECT * FROM users";
// $queryexecute =  mysqli_query($con, $sqlquery);
// $row = mysqli_fetch_assoc($queryexecute);
// $userid = $row['userid'];
// echo $userid;
// session_start();
if (isset($_POST['submit'])) {
    $task = $_POST['task'];
    if (empty($task)) {
        echo "enter task";
    } else {
        // $query = "INSERT INTO done SET donetask ='$task', userid = '$userid' ";
        $query = "INSERT INTO task SET todotask ='$task',STATUS = 'done'";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo "Added task";
            header("Location:../index.php");
        } else {
            echo "Not inserted";
        }
    }
}
?>