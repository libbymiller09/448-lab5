let username = document.getElementsByName('username').value;
let password = document.getElementsByName('password').value;
let cookieQuantity = document.getElementsByName('cookies').value;
let cakeQuantity = document.getElementsByName('cakes').value;
let pieQuantity = document.getElementsByName('pies').value;
let shipping = document.getElementsByClassname('shipping');

function validateForm() {
  if (cookieQuantity == "" || cakeQuantity == "" || pieQuantity == "") {
    alert("Please enter a quantity for each field!");
    if (shipping.checked == false) {
      alert("Please select a shipping method!");
    }
  }
}

function resetForm() {
  username = "";
  password = "";
  cookieQuantity = "";
  cakeQuantity = "";
  pieQuantity = "";
  shipping.checked = false;
}

document.getElementById("resetButton").addEventListener("click", resetForm);
