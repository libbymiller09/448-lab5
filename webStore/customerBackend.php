<?php
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cookieQuantity = $_POST["cookies"];
  $cakeQuantity = $_POST["cakes"];
  $pieQuantity = $_POST["pies"];
  $shippingType = $_POST["shipping"];

  if ($shippingType == "free") {
    $shippingPrice = 0;
  } else if ($shippingType == "overnight") {
    $shippingPrice = 50;
  } else if ($shippingType == "threeDay") {
    $shippingPrice = 5;
  }

  $pricePerCookie = $cookieQuantity * 2.5;
  $pricePerCake = $cakeQuantity * 8;
  $pricePerPie = $pieQuantity * 10;

  $totalPrice = $pricePerCookie + $pricePerCake + $pricePerPie + $shippingPrice;
if ($form.isset()) {
    echo "<h2>Welcome user: $username </h2>";
    echo "<p>You've entered password: $password </p>";
    echo "<h3>Here is your reciept: </h3>";
    echo "<table><tr><th>Item</th><th>Quantity</th><th>Price</th></tr>";
    echo "<tr><th>Cookies</th><td> .$cookieQuantity. </td><td>$2.50</td><td> .$pricePerCookie. </td></tr>";
    echo "<tr><th>Cakes</th><td> .$cakeQuantity. </td><td>$8</td><td> .$pricePerCake. </td></tr>";
    echo "<tr><th>Pies</th><td> .$pieQuantity. </td><td>$10</td><td> .$pricePerPie. </td></tr>";
    echo "<tr><th>Shipping: $</th><th> .$shippingPrice. </th></tr>";
    echo "<tr><th>Total Cost: $</th><th> .$totalPrice. </th></tr>";
  }
?>
