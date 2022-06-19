function signup() {
  var status = false;
  var name = document.regform.name.value.trim();
  var pass = document.regform.userpassword.value.trim();
  var email = document.regform.useremail.value.trim();
  var strPattern = /^[a-z\sA-Z]+$/;
  var epattern =
    /^([a-zA-Z0-9]+[_.-]?[a-zA-Z0-9]+)@{1}([a-zA-Z0-9-]+).{1}([a-zA-Z]{2,6})$/;
  if (name == "") {
    document.getElementById("rnameError").innerHTML = "Enter your Name";
    status = false;
  } else if (name.length < 6) {
    document.getElementById("rnameError").innerHTML = "Invalid Name";
    status = false;
  } else if (!strPattern.test(name)) {
    document.getElementById("rnameError").innerHTML =
      "This field should alphabets only";
    status = false;
  } else {
    console.log("Valid name");
  }
  if (email == "") {
    document.getElementById("abc").innerHTML = "Please Enter Email";
    return false;
  } else if (email.length < 9) {
    document.getElementById("abc").innerHTML = "Invalid Email";
    status = false;
  } else if (!epattern.test(email)) {
    document.getElementById("abc").innerHTML = "Invalid Email";
    status = false;
  } else {
    console.log("Valid email");
  }
  if (pass == "") {
    document.getElementById("passError").innerHTML = "Enter your Password";
    status = false;
  } else if (pass.length < 6) {
    document.getElementById("passError").innerHTML = "Enter minimun 6 character";
    status = false;
  }else{
    console.log("Valid password");
  }

  return status;
  // if(signup() ){
  //   document.write(' <?php header("Location:../db/signup.php?); ?> ');
  // }
}
