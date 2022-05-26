function generate() {
  let num = "1234567890";
  let otp = "";

  for (let i = 0; i < 4; i++) {
    otp += num[Math.floor(Math.random() * 10)];
  }
  document.getElementById("otp")=otp;
}
