function validateSignup() {
  let password = document.getElementById("password").value;
  let confirm = document.getElementById("confirm_password").value;
  if (password !== confirm) {
    alert("Passwords do not match!");
    return false;
  }
  return true;
}

function validateLogin() {
  let email = document.getElementById("login_email").value;
  let password = document.getElementById("login_password").value;
  if (email === "" || password === "") {
    alert("Please fill all fields!");
    return false;
  }
  return true;
}
