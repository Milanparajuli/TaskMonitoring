

<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['useremail'];
    $password = md5($_POST['userpassword']);
    $conform = $_POST['repassword'];

    if (empty($username)) {
        echo "username";
    } else {
        $sqlquery = "INSERT INTO users(fullname,email,password) VALUES ('$name','$email','$password')";
        $result = mysqli_query($con, $sqlquery);
        if ($result) {
            echo '<script type="text/javascript">';
            echo ' alert("Suseccfully registired")';
            echo '</script>';

            header("Location:../login.php");
        } else {
            echo '<script type="text/javascript">';
            echo ' alert("Not registired")';
            echo '</script>';
        }
    }
}
?>