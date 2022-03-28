<?php
session_start();
include "db/connection.php";
$userid = $_GET['id'];
// if(isset($_GET['id'])){
if (isset($_POST['submit'])) {
    $task = $_POST['task'];

    $sql = "INSERT INTO task values ('','$task','$userid','TODO')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo '<script>alert("Added succesfully")</script>';
        header("location: index.php?id=".$userid);
    } else {
        echo "unable to insert";
    }
}
// }
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="hero">
    <div class="form-box">
        <form class="input-group" method="POST" action="">
            <textarea name="task" class="input-field" placeholder="Enter task" required></textarea>
            <button type="submit" class="submit-btn" name="submit" value="add">Add</button>
        </form>
    </div>
</div>