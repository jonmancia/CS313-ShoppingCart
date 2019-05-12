<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="main.css">
  <title>Document</title>
</head>

<body>
  <div class="box">
    <h1>Thank you for your purchase!</h1>
  </div>
  <h4>Name: <?php echo $_SESSION["first-name"] . " " . $_SESSION["last-name"]; ?></h4>
  <h4>Address: <?php echo $_SESSION["address"]; ?></h4>
  <h4>Phone Number: <?php echo $_SESSION["phone"]; ?></h4>
  <div class="box">

    <h3>Items purchased: </h3>
    <div class="products-box">
      <?php
      foreach ($_SESSION[$array_product] as $key => $value) {
        switch ($key) {
          case 'Developer T-Shirt':
            echo "<div class=\"product\"><label><img src=\"product1.jpg\" alt =\"T-Shirt1\">$key <br> $$value</label></div>";
            break;
          case 'Programmer T-Shirt':
            echo "<div class=\"product\"><label><img src=\"product2.png\" alt =\"T-Shirt2\">$key <br> $$value</label></div>";
            break;
          case 'Eat Sleep Code T-Shirt':
            echo "<div class=\"product\"><label><img src=\"product3.jpg\" alt =\"T-Shirt3\">$key <br> $$value</label></div>";
            break;
          case 'Engineer T-Shirt':
            echo "<div class=\"product\"><label><img src=\"product4.png\" alt =\"T-Shirt4\">$key <br> $$value</label></div>";
            break;
          case 'Hacked T-Shirt':
            echo "<div class=\"product\"><label><img src=\"product5.png\" alt =\"T-Shirt5\">$key <br> $$value</label></div>";
            break;
          default:
            # code...
            break;
        }
      }
      ?>
    </div>
    <div class="box">
      <?php
      $totalAmt = 0;
      foreach ($_SESSION[$array_product] as $key => $value) {
        $totalAmt += $value;
      }
      echo "<h3>Total: $$totalAmt </h3>";
      ?>
    </div>
  </div>
</body>

</html>