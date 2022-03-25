<?php
require 'connection.php';

$sqlquery = "SELECT id FROM task";
$queryexecute =  mysqli_query($con, $sqlquery);
if (mysqli_num_rows($queryexecute)) {
    while ($row = mysqli_fetch_assoc($queryexecute)) {
        $id = $row['id'];
    }
    echo $id;
}


// $query = "UPDATE task set STATUS = 'doing' WHERE id = '$id'";
//         $result = mysqli_query($con, $query);
//         if ($result) {
//             echo "Moved";
//             header("Location:../index.php");
//         }
