<?php
include 'connection.php';
?>
<?php
if (isset($_GET['id'])) {
    // echo "id bhittra";
    // $id = $_GET['id'];
    $sqlquery = "SELECT * FROM task";
    $queryexecute =  mysqli_query($con, $sqlquery);
    $row = mysqli_fetch_assoc($queryexecute);
    // $userid=$row['userid'];
    // $taskid = $row['id'];

    // session_start();
    if (isset($_POST['submit'])) {
        // echo "subimit ma aayo";
        $taskid = $_GET['id'];
        $userid = $_GET['userid'];
        echo $taskid;
        echo $userid;
        $task = $_POST['task'];
        if (empty($task)) {
            echo "enter task";
        } else {
            // echo "hello";
            $query = "INSERT INTO task SET todotask ='$task' userid = $userid , STATUS = 'TODO'";
            $result = mysqli_query($con, $query);
            if ($result) {
                echo "Added task";
                header("Location:../index.php?id=".$userid);
            } else {
                echo "Not inserted";
            }
        }
    }
}
?>