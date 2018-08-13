<!DOCTYPE html>

<?php
    // Standard Include
    require $_SERVER["DOCUMENT_ROOT"] . '/../resources/config.php';

    // Local Helper Functions
    function generate_cart_list($array) {
        $conn = setup_connect_to_db();

        foreach($array as $item_id => $quantity) {
            generate_cart_item($item_id, $quantity, $conn);
        }
        
    }

    function generate_cart_item($item_id, $item_quantity, $conn) {
        
        $sql = "SELECT * FROM TCheeses WHERE cheese_id=$item_id";
        $result = mysqli_query($conn, $sql);

        // If there is a result (there will only be one! Primary Key is unique),
        // use that, otherwise report an error.
        if (mysqli_num_rows($result) == 1) {
            
            // While statement will only run once. Needs to be used because
            // of some MySQLi Procedural quirks.
            while ($row = mysqli_fetch_assoc($result)) {
                $item_name = $row['cheese_name'];
                $item_price = $row['cheese_price'];
                $item_price_disp = number_format($item_price, 2);
                $image = get_image($item_id);
                
                $output = <<<HEREDOC
                <tr>
                    <td><div class="thumb"><img src="$image"></div></td>
                    <td><a href="item.php?cheese_id=$item_id">$item_name</a></td>
                    <td>&#36;$item_price_disp</td>
                    <td><form id="quantity" class="php-var-button" action="cart-quantity.php"><input name="id" value="$item_id"><input name="redirect" value="cart.php"><input id="quantity" name="quantity" type="number" value="$item_quantity"><input type="submit" value="Update"></form></td>
                    <td><form id="remove-btn" class="php-var-button" action="cart-remove.php"><input name="id" value="$item_id"><input name="redirect" value="cart.php"><input class="damage" type="submit" value="Remove"></form></td>
                </tr>
HEREDOC;
                echo $output;
            }

        } else {
            echo "Sorry! It looks like we are experiencing technical difficulties. Please empty the cart and try again.";
        }        
    }

    // Checkout Table Creator
    // Duplicate of above functions, with changes to the output
    function generate_checkout_list($array) {
        $conn = setup_connect_to_db();

        $total_price = 0;

        foreach($array as $item_id => $quantity) {
            generate_checkout_item($total_price, $item_id, $quantity, $conn);
        }

        $total_price_disp = number_format($total_price, 2);
        
        $output = <<<HEREDOC
            <tr class="total">
                <td class="left">Total:</td>
                <td class="right">&#36;$total_price_disp</td>
            </tr>
HEREDOC;

        echo $output;
    }

    function generate_checkout_item(&$total_price, $item_id, $item_quantity, $conn) {
        
        $sql = "SELECT * FROM TCheeses WHERE cheese_id=$item_id";
        $result = mysqli_query($conn, $sql);

        // If there is a result (there will only be one! Primary Key is unique),
        // use that, otherwise report an error.
        if (mysqli_num_rows($result) == 1) {
            
            // While statement will only run once. Needs to be used because
            // of some MySQLi Procedural quirks.
            while ($row = mysqli_fetch_assoc($result)) {
                $item_name = $row['cheese_name'];
                $item_price = $row['cheese_price'];
                $item_total_price = $item_price * $item_quantity;
                $total_price += $item_total_price;
                $item_total_price_disp = number_format($item_total_price, 2);
                
                $output = <<<HEREDOC
                <tr>
                    <td class="left">$item_name</td>
                    <td class="right">&#36;$item_total_price_disp</td>
                </tr>
HEREDOC;
                echo $output;
            }

        } else {
            echo "Sorry! It looks like we are experiencing technical difficulties. Please empty the cart and try again.";
        }
       
    }
?>

<html>
    <head>
        <?php generate_head("My Cart"); ?>
    </head>
    <body>
        <!-- Navigation -->
        <?php generate_navigation(); ?>

        <!-- Secondary Store Navigation -->
        <?php generate_store_nav("Cart", "/cart.php", "shop.php", false); ?>

        <!-- Content -->
        <main>
            <section>
                <h1 class="section-header">Shopping Cart</h1>
                <div class="cart-container">
                    <article class="cart-list">
                        <table>
                            <tr>
                                <th>Photo</th>
                                <th>Product</th>
                                <th>Price (ea)</th>
                                <th>Quantity</th>
                                <th></th>
                            </tr>
                            <?php
                                // Checks if cart array exists, otherwise outputs error
                                if (@$_SESSION["cart"] != null) {
                                    generate_cart_list($_SESSION['cart']);
                                } else {
                                    echo <<<HEREDOC
                                    <tr><td colspan="5">There are no items in the cart.</td></tr>
HEREDOC;
                                }
                            ?>
                        </table>
                    </article>
                    <aside class="cart-sidebar">
                        <h4>Checkout</h4>
                        <table>
                            <tr>
                                <th class="left">Name</th>
                                <th class="right">Price (Total)</th>
                            </tr>
                            <?php
                            
                            if (@$_SESSION["cart"] != null) {
                                generate_checkout_list($_SESSION['cart']);
                            }
                            ?>
                        </table>
                        <form class="php-var-button" action="cart-reset.php">
                            <input name="redirect" value="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <input type="submit" value="Empty Cart">
                        </form>
                        <form class="php-var-button" action="checkout.php" method="post">
                            <input name="redirect" value="order-placed.php">
                            <input class="accent" type="submit" value="Checkout">
                        </form>
                    </aside>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <?php generate_footer(); ?>
    </body>
</html>