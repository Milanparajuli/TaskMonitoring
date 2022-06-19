<link rel="stylesheet" type="text/css" href="css/style.css">


	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div class="btn-text">
					<h4>Enter Otp</h4>
				</div>

			</div>

			<form class="input-group" method="POST" action="newpassword.php">

			<?php
				if (isset($_GET['invalid'])) {
					$msg = "Sucessfully sent email check your email";
					echo '<p style="color: green;">' . $msg . '</p>';
				}
				
				?>
				<!-- <form action="" class="input-group"> -->
				<input type="number" name="otp" class="input-field" placeholder="Enter OTP" required>
				<button type="sumbit" class="toggle-btn">Submit</button>
				<a href="login.php"><button type="button" class="toggle-btn">Cancel</button></a>
			</form>
		</div>
	</div>