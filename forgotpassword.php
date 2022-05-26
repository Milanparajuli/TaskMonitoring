	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/40dcf4bea1.js" crossorigin="anonymous"></script>


	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div class="btn-text">
					<h4>Find Your Account</h4>
					<p>Please enter your email to search for your account</span></p>
				</div>

			</div>

			<form class="input-group" method="POST" action="db/mailSender.php">
				<!-- <form action="" class="input-group"> -->
				<input type="email" name="useremail" class="input-field" placeholder="Enter Email" required>
				<button type="sumbit" class="toggle-btn">Submit</button>
				<a href="login.php"><button type="button" class="toggle-btn">Cancel</button></a>
			</form>
		</div>
	</div>
	<script src="./js/javascript.js"></script>