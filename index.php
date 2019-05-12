<?php
session_start();

$_SESSION["new"] = 0;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["product"])) {
        $_SESSION["products"] = array();
        $_SESSION["products"] = $_GET["product"];

        foreach ($_SESSION["products"] as $product) {
            echo "$product";
        }
        header('Location: checkout.php');
        $_SESSION["new"]++;
    }
} else if ($_SESSION["new"] > 0) {
    echo "<h2>Please select items before checking out</h2>";
}

?>
<!DOCTYPE html>

<html lang="en-US">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="main.css">

    <script src="index.js"></script>

    <title>My Geek Tees</title>

</head>

<body>
    <section class="form-box">

        <h1>Buncha'Nerds Clothing</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="main-form" name="main-form" onreset="displayTotal()">

            <h2 class="select-products-heading">Select Products:</h2>

            <h5>You can simply click on the pictures!</h5>

            <div class="products-box">

                <div class="product">

                    <label for="Developer">

                        <img src="product1.jpg" alt="T-Shirt1">$20</label>

                    <input type="checkbox" name="product[]" id="Developer" value="product1" onchange="displayTotal()">

                </div>

                <div class="product">

                    <label for="TwoStates">

                        <img src="product2.png" alt="T-Shirt2">$18</label>

                    <input type="checkbox" name="product[]" id="TwoStates" value="product2" onchange="displayTotal()">

                </div>

                <div class="product">

                    <label for="EatCode">

                        <img src="product3.jpg" alt="T-Shirt3">$22</label>

                    <input type="checkbox" name="product[]" id="EatCode" value="product3" onchange="displayTotal()">

                </div>

                <div class="product">

                    <label for="Engineer">

                        <img src="product4.png" alt="T-Shirt4">$18</label>

                    <input type="checkbox" name="product[]" id="Engineer" value="product4" onchange="displayTotal()">

                </div>

                <div class="product">

                    <label for="Hacked">

                        <img src="product5.png" alt="T-Shirt5">$20</label>

                    <input type="checkbox" name="product[]" id="Hacked" value="product5" onchange="displayTotal()">

                </div>

            </div>

            <h3 class="display-total">Total: $<span id="total-output">0.00</span></h3>

            <div class="form-buttons">

                <input type="submit" value="Checkout">

                <input type="reset" value="Clear">

            </div>

        </form>
    </section>

</body>

</html>