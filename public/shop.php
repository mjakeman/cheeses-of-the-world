<!DOCTYPE html>

<?php
    // Standard Include
    require $_SERVER["DOCUMENT_ROOT"] . '/../resources/config.php';
?>

<html>
    <head>
        <?php generate_head("Shop"); ?>
    </head>
    <body>
        <!-- Navigation -->
        <?php generate_navigation(); ?>

        <!-- Secondary Store Navigation -->
        <?php generate_store_nav("Shop", "/cart.php", "shop.php", true); ?>

        <!-- Content -->
        <main>
            <section>
                <div class="hero shop-hero">
                    <div class="hero-overlay shop-hero-overlay">
                        <div class="shop-hero-img">
                            <img src="img/cheddar.png">
                        </div>
                        <div class="shop-hero-text">
                            <div class="shop-hero-text-container">
                                <span class="subtitle">Royal Addition</span>
                                <h1>Cheddar</h1>
                                <p>Because, <em>of course</em> this is a thing</p>
                                <a href="item.php?cheese_id=18" class="cheese-btn"><span>From $34.95</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <h1 class="section-header">All Products</h1>
                <div class="store-filter-container">
                    <form class="store-filter" action="">
                        <h2>Filter By:</h2>
                        <p>Region</p>
                        <?php
                            // Select element source
                            $sql = "SELECT * FROM TRegions";
                            $array = generate_array_from_sql($sql, "region_id", "region_name");
                            $array[0] = "All";
                            
                            $active = 0;
                            if(isset($_GET['cheese_origin'])) {
                                $active = $_GET["cheese_origin"];    
                            }
                            $active_safe = htmlspecialchars($active);

                            // Create a select element
                            generate_select("cheese_origin", $array, $active_safe);
                        ?>
                        <p>Flavour</p>
                        <?php
                            // Select element source
                            $sql = "SELECT * FROM TFlavour";
                            $array = generate_array_from_sql($sql, "flavour_id", "flavour_name");
                            $array[0] = "All";
                            
                            $active = 0;
                            if(isset($_GET['cheese_flavour'])) {
                                $active = $_GET["cheese_flavour"];    
                            }
                            $active_safe = htmlspecialchars($active);

                            // Create a select element
                            generate_select("cheese_flavour", $array, $active_safe);
                        ?>
                        <p>Milk Type</p>
                        <?php
                            // Select element source
                            $sql = "SELECT * FROM TMilkType";
                            $array = generate_array_from_sql($sql, "milk_type_id", "milk_type_name");
                            $array[0] = "All";
                            
                            $active = 0;
                            if(isset($_GET['cheese_milk_type'])) {
                                $active = $_GET["cheese_milk_type"];    
                            }
                            $active_safe = htmlspecialchars($active);

                            // Create a select element
                            generate_select("cheese_milk_type", $array, $active_safe);
                        ?>
                        <a href="<?php echo $_SERVER['PHP_SELF'];?>">Clear</a>
                        <input class="btn-submit" type="submit" value="Filter">
                    </form>
                </div>
                <div class="store-list-sort">
                    <form action="<?php echo $_SERVER["PHP_SELF"];?>">
                        <?php
                            // Select element source
                            $sort = [
                                0 => "Default Order",
                                1 => "Alphabetical (Ascending)",
                                2 => "Alphabetical (Descending)",
                                3 => "Price (Ascending)",
                                4 => "Price (Descending)"
                            ];
                            
                            $active = 0;
                            if(isset($_GET['sort_by'])) {
                                $active = $_GET["sort_by"];    
                            }
                            $active_safe = htmlspecialchars($active);

                            // Create a select element
                            generate_select("sort_by", $sort, $active_safe);

                        ?>
                        <input type="submit" value="Sort">
                    </form>
                </div>
                <?php
                // SQL Query
                $sql_base = "SELECT * FROM (((TCheeses INNER JOIN TCountries ON TCheeses.cheese_origin_id = TCountries.country_id) INNER JOIN TFlavour ON TCheeses.cheese_flavour_id = TFlavour.flavour_id) INNER JOIN TMilkType ON TCheeses.cheese_milk_type_id = TMilkType.milk_type_id)";
                $sql_where_origin = "";
                $sql_where_flavour = "";
                $sql_where_milktype = "";
                $sql_sort = "";

                // Automatically Generate SQL Query from url
                
                // Sort By
                $get_sort_by = 0;
                if(isset($_GET['sort_by'])) {
                    $get_sort_by = htmlspecialchars($_GET["sort_by"]);
                }

                switch ($get_sort_by) {
                    default:
                    case 0:
                        $sql_sort = "ORDER BY cheese_id ASC";
                        break;
                    case 1:
                        $sql_sort = "ORDER BY cheese_name ASC";
                        break;
                    case 2:
                        $sql_sort = "ORDER BY cheese_name DESC";
                        break;
                    case 3:
                        $sql_sort = "ORDER BY cheese_price ASC";
                        break;
                    case 4:
                        $sql_sort = "ORDER BY cheese_price DESC";
                        break;
                }

                // Filter: Origin
                $get_origin = 0;
                if(isset($_GET['cheese_origin'])) {
                    $get_origin = htmlspecialchars($_GET["cheese_origin"]);
                }
                
                // If not zero (All), sort by region_id
                if ($get_origin != 0) {
                    $sql_where_origin = "TCountries.country_region_id = $get_origin";
                }


                // Filter: Flavour
                $get_flavour = 0;
                if(isset($_GET['cheese_flavour'])) {
                    $get_flavour = htmlspecialchars($_GET["cheese_flavour"]);
                }
                
                // If not zero (All), sort by flavour_id
                if ($get_flavour != 0) {
                    $sql_where_flavour = "TFlavour.flavour_id = $get_flavour";
                }


                // Filter: Milk Type
                $get_milk_type = 0;
                if(isset($_GET['cheese_milk_type'])) {
                    $get_milk_type = htmlspecialchars($_GET["cheese_milk_type"]);
                }
                
                // If not zero (All), sort by milk_type_id
                if ($get_milk_type != 0) {
                    $sql_where_milktype = "TMilkType.milk_type_id = $get_milk_type";
                }

                // Final SQL Query
                // WHERE Statement has not yet been used
                $where = false;

                $sql = $sql_base . "\n";
                
                // Origin Filter
                if ($sql_where_origin != "") {
                    if ($where == true) {
                        $sql = $sql . "AND ";
                    } else {
                        $sql = $sql . "WHERE ";
                        $where = true;
                    }

                    $sql = $sql . $sql_where_origin . "\n";
                }

                // Flavour Filter
                if ($sql_where_flavour != "") {
                    if ($where == true) {
                        $sql = $sql . "AND ";
                    } else {
                        $sql = $sql . "WHERE ";
                        $where = true;
                    }

                    $sql = $sql . $sql_where_flavour . "\n";
                }

                // Milk Type Filter
                if ($sql_where_milktype != "") {
                    if ($where == true) {
                        $sql = $sql . "AND ";
                    } else {
                        $sql = $sql . "WHERE ";
                        $where = true;
                    }

                    $sql = $sql . $sql_where_milktype . "\n";
                }
                
                $sql = $sql . $sql_sort . "\n";
                // For Debugging:
                // echo $sql . "<br><br><br>";
                
                
                // Hardcoded maximum of 1000 cheeses
                // This exists so that the shop home page could
                // be expanded in the future, with pagination like
                // features (multiple pages, 25 cheeses per page, for
                // example).
                generate_store_grid(1000, $sql);
                ?>
            </section>
            <br>
        </main>

        <!-- Footer -->
        <?php generate_footer(); ?>
    </body>
</html>