<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["remove"])) {
  if ($_GET["remove"] == 'Developer T-Shirt') {
    unset($_SESSION["products"][0]);
    unset($_SESSION["array_product"][$_GET["remove"]]);
  } else if ($_GET["remove"] == 'Programmer T-Shirt') {
    unset($_SESSION["products"][1]);
    unset($_SESSION["array_product"][$_GET["remove"]]);
  } else if ($_GET["remove"] == 'Eat Sleep Code T-Shirt') {
    unset($_SESSION["products"][2]);
    unset($_SESSION["array_product"][$_GET["remove"]]);
  } else if ($_GET["remove"] == 'Engineer T-Shirt') {
    unset($_SESSION["products"][3]);
    unset($_SESSION["array_product"][$_GET["remove"]]);
  } else if ($_GET["remove"] == 'Hacked T-Shirt') {
    unset($_SESSION["products"][4]);
    unset($_SESSION["array_product"][$_GET["remove"]]);
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="main.css">
  <title>Buncha'Nerds Clothing: Cart</title>
</head>

<body>
  <div class="form-box">

    <h1>Shopping Cart</h1>
    <form action="checkout.php">
      <div class="box">
        <div class="products-box">
          <?php
          foreach ($_SESSION["array_product"] as $key => $value) {
            switch ($key) {
              case 'Developer T-Shirt':
                echo "<div class=\"product\"><label><img src=\"product1.jpg\" alt =\"T-Shirt1\">$key <br> $$value <br> <a href=\"shopping_cart.php?remove=$key\">Remove</a></label></div>";
                break;
              case 'Programmer T-Shirt':
                echo "<div class=\"product\"><label><img src=\"product2.png\" alt =\"T-Shirt2\">$key <br> $$value <br> <a href=\"shopping_cart.php?remove=$key\">Remove</a></label></div>";
                break;
              case 'Eat Sleep Code T-Shirt':
                echo "<div class=\"product\"><label><img src=\"product3.jpg\" alt =\"T-Shirt3\">$key <br> $$value <br> <a href=\"shopping_cart.php?remove=$key\">Remove</a></label></div>";
                break;
              case 'Engineer T-Shirt':
                echo "<div class=\"product\"><label><img src=\"product4.png\" alt =\"T-Shirt4\">$key <br> $$value <br> <a href=\"shopping_cart.php?remove=$key\">Remove</a></label></div>";
                break;
              case 'Hacked T-Shirt':
                echo "<div class=\"product\"><label><img src=\"product5.png\" alt =\"T-Shirt5\">$key <br> $$value <br> <a href=\"shopping_cart.php?remove=$key\">Remove</a></label></div>";
                break;
              default:
                # code...
                break;
            }
          }
          ?>
        </div>
      </div>

      <div class="box">
        <?php
        $totalAmt = 0;
        foreach ($_SESSION["array_product"] as $key => $value) {
          $totalAmt += $value;
        }
        echo "<h3>Your Total is: $$totalAmt </h3>";
        ?>
      </div>

      <div class="form-buttons">

        <input type="submit" value="Checkout">

      </div>

    </form>
  </div>
</body>

</html>