<!DOCTYPE html>
<html>

<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div class="hero">
		<div class="form-box">
			<div class="adminHead">
				<h1>Welcome</h1>
                <h2>Task monitoring</h2>
			</div>
			<form class="input-group" action="index.php" method="POST">
				<button type="submit" class="submit-btn" value="Add workspace">Add workspace</button>
			</form>

			<?php include 'connection.php';
			if (connectionDatabase()) {
            }
			?>
		</div>
	</div>
</body>

</html>