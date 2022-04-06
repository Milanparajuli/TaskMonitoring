<?php
require 'connection.php';
?>

<?php

$sqlquery = "SELECT * FROM task";
$result = mysqli_query($con, $sqlquery);
$row = mysqli_fetch_assoc($result);
$userid = $_GET['userid'];
// echo "user id =".$userid;
// $taskid = $_GET['id'];
$taskid = $_GET['id'];
// echo "task id =".$taskid;
if (isset($taskid)) {
    echo $taskid;
    $query = "DELETE FROM task WHERE id = '$taskid'";
    $result = mysqli_query($con, $query);
    if ($result) {
        echo '<script type="text/javascript">';
        echo ' alert("Deleted")';
        echo '</script>';
        header('location:../index.php?id=' . $userid);
    }
}
?> 
