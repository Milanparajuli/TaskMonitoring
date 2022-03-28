<?php 
include 'combine/nav.php';
require 'db/connection.php';
?>
<?php 
$id = $_GET['id'];

$query = "SELECT * FROM task";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="hero">
    <div class="form-box">
        <form class="input-group" method="POST" action="db/edittask.php">
            <textarea name="task" class="input-field" placeholder="Enter task" required><?php echo $row['todotask'] ?></textarea>
            <button type="submit" class="submit-btn" name="submit" value="add">Edit task</button>
        </form>
    </div>
</div>