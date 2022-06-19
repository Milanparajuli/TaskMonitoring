<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://kit.fontawesome.com/40dcf4bea1.js" crossorigin="anonymous"></script>


<div class="hero">
	<div class="form-box">
		<div class="button-box">
			<div class="btn-text">
				<p>Please enter your New password.</p>
			</div>

		</div>

		<form class="input-group" method="POST" action="db/changePassword.php">
			<input type="password" name="userpassword" class="input-field" placeholder="Enter new password" required>
			<input type="password" name="repassword" class="input-field" placeholder="Enter conform password" required>
			<a href="login.php"><button type="button" class="toggle-btn">Submit</button></a>
			<a href="forgotpassword.php"><button type="button" class="toggle-btn">Cancel</button></a>
		</form>
	</div>
</div>