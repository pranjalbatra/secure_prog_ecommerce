<!DOCTYPE html>
<html lang="en">
<head>
    <?php $pagetitle = "Shopping Cart"; require_once "include/head.inc.php"; ?>
</head>

<body>

<?php
echo "<div class='faq'>";
require_once "include/banner.inc.php";
require_once "include/dbconn.inc.php";

$discount = 0;

if (isset($_COOKIE["cartHighest"])) {
    $highest = $_COOKIE["cartHighest"];

    if (isset($_COOKIE["couponCode"])) {
        $couponCode = $_COOKIE["couponCode"];
        $sql = "SELECT percent_off FROM coupons WHERE code = ?";
        $statement = mysqli_stmt_init($conn);

        if (mysqli_stmt_prepare($statement, $sql)) {
            mysqli_stmt_bind_param($statement, 's', $couponCode);

            if (mysqli_stmt_execute($statement)) {
                mysqli_stmt_bind_result($statement, $discount);
                mysqli_stmt_fetch($statement);

                if (isset($discount) && $discount > 0) {
                    echo "Discount applied: <b>" . ($discount * 100) . "% off</b><br>";
                    echo "<input type=\"button\" value=\"Remove coupon code\" onclick=\"removeCoupon();\"><br>";
                } else {
                    setcookie("couponCode", "nothing", time() - 3600);
                    echo "No coupon code added <br>";
                    echo "<form>";
                    echo "<input type=\"text\" name=\"couponCode\" placeholder=\"Apply a coupon code...\" id=\"couponInput\">";
                    echo "<input type=\"submit\" value=\"Find Code\" onclick=\"addCoupon(document.getElementById('couponInput').value)\">";
                    echo "</form>";
                    echo "<br>";
                    echo "<p class=\"warning\">Coupon code invalid!</p>";
                }

                mysqli_stmt_close($statement);
            }
        } else {
            echo "SQL prepare failed";
        }
    } else {
        echo "No coupon code added <br>";
        echo "<input type=\"text\" name=\"couponCode\" placeholder=\"Apply a coupon code...\" id=\"couponInput\">";
        echo "<input type=\"submit\" value=\"Find Code\" onclick=\"addCoupon(document.getElementById('couponInput').value)\">";
        echo "<br>";
    }

    echo "<form action=\"confirmOrder.php\" method=\"post\">";

    if (isset($_COOKIE["couponCode"])) {
        $coupon = $_COOKIE["couponCode"];
        echo "<input type=\"hidden\" name=\"appliedCoupon\" value=\"" . $coupon . "\">";
    }

    echo "<ul>";
    $uniqueItems = 0;
    $totalCost = 0;

    for ($i = 0; $i <= $highest; $i++) {
        $quantity = $_COOKIE["cart" . $i];

        if ($quantity > 0) {
            $uniqueItems++;
            $sql = "SELECT name, publisher, price, age_rating, description FROM products WHERE commodity_id=?";
            $statement = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($statement, $sql)) {
                mysqli_stmt_bind_param($statement, 's', htmlspecialchars($i));

                if (mysqli_stmt_execute($statement)) {
                    mysqli_stmt_bind_result($statement, $name, $publisher, $price, $age_rating, $description);
                    mysqli_stmt_fetch($statement);
                    mysqli_stmt_close($statement);

                    echo "<li>" . $quantity . "x <b> " . $name . "</b> - $" . $price . " AUD <div>Total: " . ($price * $quantity) . "</div>" . "
                        <input type=\"hidden\" name=\"product" . $i . "\" value=\"" . $quantity . "\">
                        </li>";

                    $totalCost += ($price * $quantity);
                }
            }
        }
    }
    echo "</ul>";

    if ($discount > 0 && $discount <= 1) {
        echo "<br> <h1>Total order cost: </h1> <h1 class='lightText'><strike>$" . $totalCost . " AUD</strike></h1> <h2>$" . ($totalCost - ($totalCost * $discount)) . " AUD</h2>";
    } else {
        echo "<br> <h1>Total order cost: </h1> <h2>$" . $totalCost . " AUD</h2>";
    }

    echo "<br><input class='warning' type='button' value='Remove all items from cart' onclick='clearCartRefresh()'><br>";
    echo "<h1>Enter your email address:</h1>";
    echo "<input type=\"text\" name=\"email_address\" placeholder=\"example@example.com\" pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$\" maxlength=\"40\" required><br><br>";
    echo "<h1>Credit Card Information:</h1>";
    echo "<input type=\"number\" name=\"credit_card\" placeholder=\"1234567890123456\" max=\"9999999999999999\">";
    echo "<br><input type=\"submit\" value=\"Confirm Order\">";
    echo "</form>";
} else {
    echo "Your Cart is empty!";
}

echo "</div>";

mysqli_close($conn);
?>

</body>
</html>
