<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://kit.fontawesome.com/40dcf4bea1.js" crossorigin="anonymous"></script>

<div class="hero">
	<div class="form-box">
		<div class="button-box">
			<div class="btn-text">
				<p>Please enter your New password.</p>
			</div>

		</div>

		<form class="input-group" method="post" action="db/changePassword.php">
		<?php
			if (isset($_GET['created'])) {
				$msg = "Password changed sucessfully";
				echo '<p style="color: green;">' . $msg . '</p>';
			}
			?>
			<input type="password" name="userpassword" class="input-field" placeholder="Enter new password" required>
			<input type="text" name="otp" class="input-field" placeholder="Enter OTP" required>
			<button type="submit" class="toggle-btn" name="submit" value="Submit">Submit</button>
			<a href="forgotpassword.php"><button type="button" class="toggle-btn">Cancel</button></a>
		</form>
	</div>
</div>