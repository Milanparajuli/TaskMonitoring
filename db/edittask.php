<?php 
require 'connection.php';
if(isset($_POST['submit'])){
    $id = $_GET['id'];
        $edittask = $_POST['task'];
        $update = "UPDATE task SET todotask='$edittask' WHERE id = $id";

        if (mysqli_query($con, $update)) {
            echo "update succesfully";
            header("location:/index.php?id=".$id);
        } else {
            echo "unable to update";
        }

}
?>