function validate() {
  var inputOne = document.getElementById('passwordOne');
  var inputTwo = document.getElementById('passwordTwo');
  if (inputOne != inputTwo) {
    alert("Passwords don't match!");
  }
  if (inputOne.length() < 8) {
    alert("Password needs to be at least 8 characters!")
  }
}
