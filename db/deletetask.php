<?php
require 'connection.php';


// $sqlquery = "SELECT id FROM task";
// $queryexecute =  mysqli_query($con, $sqlquery);
// $row = mysqli_fetch_assoc($queryexecute);
// $id = $row['id'];

$id = $_GET['id'];
$query = "DELETE FROM `task` WHERE id = '$id'";
$result = mysqli_query($con, $query);
if($result){
    echo "Deleted";
    // header('location:../index.php?id='.$id);
}

?>
