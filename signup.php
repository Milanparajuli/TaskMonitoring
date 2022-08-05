<!DOCTYPE html>
<html>

<head>
  <title>Regester</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <div class="hero">
    <div class="form-box">
      <div class="button-box">
        <div id="btn"></div>
        <a href="login.php"><button type="button" class="toggle-btn">Login</button></a>
        <a href="signup.php"><button type="button" class="toggle-btn register">Register</button></a>
      </div>
      <?php 
        if (isset($_GET['longname'])) {
          $msg = "Too Long name";
          echo '<p style="color: red;">' . $msg . '</p>';
        } 
        if (isset($_GET['longemail'])) {
          $msg = "Too long email";
          echo '<p style="color: red;">' . $msg . '</p>';
        } 
        if (isset($_GET['longpassword'])) {
          $msg = "Too Long password";
          echo '<p style="color: red;">' . $msg . '</p>';
        } 
        ?>
      <form class="input-group" action="db/signup.php" method="post" name="regFrom">
        <!-- <form action="" class="input-group"  onsubmit="return signup()" name="regform"> -->
        <input type="text" name="name" class="input-field" placeholder="Enter Name" required>
        <span id="rnameError" class="error-msg"></span>
        <input type="text" name="useremail" class="input-field" placeholder="Enter Email" required>
        <span id="abc" class="error-msg"></span>
        <input type="password" name="userpassword" class="input-field" placeholder="Enter password" required>
        <span id="passError" class="error-msg"></span>
        <!-- <input type="password" name="repassword" class="input-field" placeholder="Re-Enter password" required> -->
        <a href="login.php">Already have an account?</a>
        <button type="submit" class="submit-btn" name="submit" value="submit">Register</button>
      </form>
    </div>
  </div>
  <script src="js/javascript.js"></script>

</body>

</html>