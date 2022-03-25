<?php
include 'connection.php';

$id=$_GET['id'];
$sqlquery = "SELECT * FROM task";
$queryexecute =  mysqli_query($con, $sqlquery);
$row = mysqli_fetch_assoc($queryexecute);
$userid = $row['userid'];
echo $userid;
// session_start();
if (isset($_POST['submit'])) {
    $task = $_POST['task'];
    if (empty($task)) {
        echo "enter task";
    } else {
        $query = "INSERT INTO task SET todotask ='$task', userid = '$userid' ";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo "Added task";
            header("Location:../index.php?id=".$userid);
        } else {
            echo "Not inserted";
        }
    }
}
?>