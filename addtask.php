<?php 
include 'connection.php';
// session_start();
if(isset($_POST['submit'])){
    $task = $_POST['task'];
    if(empty($task)){
        echo "enter task";
    }else{
        $query= "INSERT INTO task SET title ='$task' ";
        $result = mysqli_query($con,$query);
        if($result){
            echo "Added task";
            header("Location:index.php");
        }else{
            echo "Not inserted";    
        }
    }
}
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="hero">
		<div class="form-box">
			<form class="input-group" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
				<textarea name="task" class="input-field" placeholder="Enter task" required></textarea>
				<button type="submit" class="submit-btn"  name="submit" value="Log in">Add</button>
			</form>
		</div>
	</div>