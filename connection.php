<?php

function connectionDatabase()
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $database =  "demo";
    $con = mysqli_connect($server, $username, $password, $database);
    if ($con) {
        echo "Connected";
    }
}

//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         $name = $_POST["name"];
//         $age = $_POST["age"];
//         $class = $_POST["class"];
//         $sql = "insert into form (name,age,class) values ('$name','$age','$class')";
//         $result = mysqli_query($con, $sql);
//         $num = mysqli_num_rows($result);
//         if (num > 0) {
//             echo "Inserted";
//         }
//     }
// } else {
//     die("Error" . myspli_connect_error());
// }
?>
