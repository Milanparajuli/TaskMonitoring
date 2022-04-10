<?php
require 'connection.php';
?>
<?php
// if (isset($_POST['submit'])) {
    $taskid = $_GET['id'];
    echo $taskid;
    $userid = $_GET['userid'];
    $edittask = "ram";
    $updatequery = "UPDATE task SET todotask='$edittask' WHERE id = $taskid";

    if (mysqli_query($con, $updatequery)) {
        echo "update succesfully";
        header("location:../index.php?id=" . $userid);
    } else {
        echo "unable to update";
    }
// }
?>