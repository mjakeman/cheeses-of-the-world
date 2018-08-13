<!DOCTYPE html>

<?php
    // Standard Include
    require $_SERVER["DOCUMENT_ROOT"] . '/../resources/config.php';

    $item_id = $_GET["cheese_id"];
    
    $conn = setup_connect_to_db();
    $sql = "SELECT * FROM (((TCheeses INNER JOIN TCountries ON TCheeses.cheese_origin_id = TCountries.country_id) INNER JOIN TFlavour ON TCheeses.cheese_flavour_id = TFlavour.flavour_id) INNER JOIN TMilkType ON TCheeses.cheese_milk_type_id = TMilkType.milk_type_id) WHERE cheese_id = $item_id";
    $result = mysqli_query($conn, $sql);

    // If there is a result (there will only be one! Primary Key is unique),
    // use that, otherwise report an error.
    if (mysqli_num_rows($result) == 1) {
        
        // While statement will only run once. Needs to be used because
        // of some MySQLi Procedural quirks.
        while ($row = mysqli_fetch_assoc($result)) {
            $item_name = $row['cheese_name'];
            $item_price = $row['cheese_price'];
            $item_desc = $row['cheese_description'];
            $item_flavour = $row['flavour_name'];
            $item_origin = $row['country_name'];
            $item_milk_type = $row['milk_type_name'];
            $item_price_disp = number_format($item_price, 2);
        }

    }
?>

<html>
    <head>
        <?php generate_head("$item_name"); ?>
    </head>
    <body>
        <!-- Navigation -->
        <?php generate_navigation(); ?>

        <!-- Secondary Store Navigation -->
        <?php generate_store_nav("$item_name", "/cart.php", "shop.php", false); ?>

        <!-- Content -->
        <main>
            <section>
                <div class="item-container">
                    <article class="item-main">
                        <h2><?php echo $item_name; ?></h2>
                        <img src="<?php echo get_image($item_id); ?>">
                        <div class="item-quick-facts">
                            <p><?php echo $item_flavour . " Flavour"; ?></p>
                            <p><?php echo "From " . $item_origin; ?></p>
                            <p><?php echo "Made with " . $item_milk_type . " Milk"; ?></p>
                        </div>
                        <div class="item-desc">
                            <h3>Description</h3>
                            <p><?php echo $item_desc; ?></p>
                        </div>
                    </article>
                    <aside class="item-sidebar">
                        <h4>Purchase Item</h4>
                        <span>$<?php echo $item_price_disp; ?></span>
                        <p>per item</p>
                        <form class="php-var-button" action="cart-add.php">
                            <input name="id" value="<?php echo $item_id; ?>">
                            <input name="redirect" value="cart.php">
                            <input id="quantity" name="quantity" type="number" value="1">
                            <input class="accent" type="submit" value="Add to Cart">
                        </form>
                    </aside>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <?php generate_footer(); ?>
    </body>
</html>