<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="stylesheet" href="normalize.css">

<head>
  <link rel="stylesheet" href="rudys_home.css">
  <title>Rudy's Menu</title>
</head>
<body>
  <a href="rudys_home.html">
    <img class="logo" src="logo.jfif" width="175px" height="175px" alt="Logo image"> </a>

  <div class="topnav">
    <a href="rudys_home.html">Home</a>
    <a class="active" href="menu.php">Menu</a>
    <a href="order_food.html">Order Food</a>
    <a href="about_us.html">About Us!</a>
  </div>
  <h1>Menu</h1>
</body>
</html>

<?php

include 'config3.php';
include 'opendb3.php';

$sql = "SELECT name, ingredients, concat('$', (price)) AS price FROM menu LIMIT 10";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {
echo "Name: " . $row["name"]. "<br>";
echo "Ingredients: " . $row["ingredients"]. "<br>";
echo "Price: " . $row["price"]."<br><hr>";
}
} else { echo "0 results";
}
mysqli_close($conn);
?>
