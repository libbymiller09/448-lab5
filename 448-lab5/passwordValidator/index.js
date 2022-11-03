function validate() {
  var inputOne = document.getElementById('passwordOne').value;
  var inputTwo = document.getElementById('passwordTwo').value;
 
  if (inputOne.length < 8) {
    alert("Password needs to be at least 8 characters!")
    if (inputOne != inputTwo) {
      alert("Passwords don't match!");
    }
  }
  alert("Password Valid!");
}
