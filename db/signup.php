

<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $email = $_POST['useremail'];
    $password = md5($_POST['userpassword']);
    $name = $_POST['name'];
    if (strlen($name) > 100) {
        header('Location:../signup.php?longname=1');
    } else if(strlen($email) > 100) {
        header('Location:../signup.php?longemail=1');
    } else if(strlen($password) > 256) {
        header('Location:../signup.php?longpassword=1');
    }
        else {
        if (empty($username)) {
            echo "username";
        } else {
            $sqlquery = "INSERT INTO users(fullname,email,password) VALUES ('$name','$email','$password')";
            $result = mysqli_query($con, $sqlquery);
            if ($result) {
                // echo '<script type="text/javascript">';
                // echo ' alert("Suseccfully registired")';
                // echo '</script>';
                header('Location:../login.php?created=1');
            }
            // else {
            //     echo '<script type="text/javascript">';
            //     echo ' alert("Not registired")';
            //     echo '</script>';
            // }
        }
    }
}
?>