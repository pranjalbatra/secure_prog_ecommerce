<!DOCTYPE html>
<html lang="en">
<head>
    <?php $pagetitle = "Browse - Funity"; require_once "include/head.inc.php"; ?>
</head>

<body>

    <?php
    require_once "include/banner.inc.php";
    require_once "include/dbconn.inc.php";

    $sql = "SELECT commodity_id, name, price, commodity_id FROM products";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $num_rows = mysqli_num_rows($result);
        if ($num_rows > 0) {
            echo "<ul>";

            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row["name"];
                $price = $row["price"];
                $id = $row["commodity_id"];

                echo "<div class='bcontainer'>";
                echo "<a href='product.php?id=$id' class='searchResult'>$name</a> - $$price AUD<br><br>";

                $sql2 = 'SELECT file_location FROM productpicture WHERE commodity_id=?';
                $statement2 = mysqli_stmt_init($conn);

                if (mysqli_stmt_prepare($statement2, $sql2)) {
                    mysqli_stmt_bind_param($statement2, "s", $id);
                    mysqli_stmt_execute($statement2);
                    $result2 = mysqli_stmt_get_result($statement2);
                    if ($file_location = mysqli_fetch_row($result2)) {
                        echo "<a href='product.php?id=$id'><img src=\"" . $file_location[0] . "\" class=\"browsePicture\"></a>";
                    }
                    mysqli_stmt_close($statement2);
                }

                echo "<form action=\"addToCart.php\" method=\"post\">";
                echo "<input type=\"hidden\" name=\"commodity_id\" value=\"" . $id . "\">";
                echo "<input type=\"hidden\" name=\"add_amount\" value='1'>";
                echo "<input class=\"center\" type=\"submit\" value=\"Add to cart\" />";
                echo "</div></form>";
            }

            echo "</ul>";
        }
    }
    ?>
    
</body>
</html>
