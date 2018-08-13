<?php
    // Standard Include
    require $_SERVER["DOCUMENT_ROOT"] . '/../resources/config.php';
    
    // Authenticate
    $config = $GLOBALS["config"];
    $user = @$_SESSION["user"];
    $pass = @$_SESSION["pass"];

    if (($config["portal"]["user"] == $user) && ($config["portal"]["pass"] == $pass)) {
        // Succeeded
    } else {
        header("Location: " . $ROOT_URL . "admin.php");
    }

    // Pull From Database
    $cheese_id = $_GET['id'];
    $conn = setup_connect_to_db();
    $sql = "SELECT * FROM (((TCheeses INNER JOIN TCountries ON TCheeses.cheese_origin_id = TCountries.country_id) INNER JOIN TFlavour ON TCheeses.cheese_flavour_id = TFlavour.flavour_id) INNER JOIN TMilkType ON TCheeses.cheese_milk_type_id = TMilkType.milk_type_id) WHERE cheese_id=$cheese_id";

    // Variables
    $cheese_name = "";
    $cheese_price = 0;
    $cheese_desc = "";
    $cheese_flavour = 0;
    $cheese_milktype = 0;
    $cheese_origin = 0;
    $cheese_image = "";

    // Query Result
    $result = mysqli_query($conn, $sql);

    // There should always be one result
    if (mysqli_num_rows($result) == 1) {
        
        $counter = 0;
        
        // Output Card for each record
        while($row = mysqli_fetch_assoc($result)) {
            $cheese_name = $row['cheese_name'];
            $cheese_price = number_format($row['cheese_price'], 2);
            $cheese_desc = $row['cheese_description'];
            $cheese_flavour = $row['cheese_flavour_id'];
            $cheese_milktype = $row['cheese_milk_type_id'];
            $cheese_origin = $row['cheese_origin_id'];
            $cheese_image = $row['cheese_image'];
        }
    } else {
        die("Could not get cheese data from database. Please click <a href='portal.php'>here</a> to go back.");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <?php generate_head("Edit Item"); ?>
    </head>
    <body>
        <main>
            <section>
                <?php
                    $conn = setup_connect_to_db();
                    
                    // Start Admin Portal
                    echo "<div class='admin-portal-container'>";
                    
                    // Greeting and Actions
                    echo "<h2>Edit Cheese</h2>";
                    echo "<p class='admin-actions'><a href='portal.php'>Go Back</a> | <a href='logout.php'>Logout</a></p>";
                ?>
                <form class="admin-form" action="db_edit.php" enctype="multipart/form-data" method="post">
                    <h4>Cheese Properties</h4>
                    <p>ID</p>
                    <input disabled name="cheese_id" value="<?php echo $cheese_id; ?>">
                    <input class="hidden" name="cheese_id" value="<?php echo $cheese_id; ?>">
                    <p>Name</p>
                    <input required name="cheese_name" value="<?php echo $cheese_name; ?>">
                    <p>Price</p>
                    <input required step="0.01" type="number" name="price" value="<?php echo $cheese_price; ?>">
                    <p>Description</p>
                    <textarea required name="description"><?php echo $cheese_desc; ?></textarea>
                    <p>Flavour</p>
                    <?php
                    // Select element source
                    $sql = "SELECT * FROM TFlavour";
                    $array = generate_array_from_sql($sql, "flavour_id", "flavour_name");

                    // Create a select element
                    generate_select_req("flavour", $array, $cheese_flavour);
                    ?>
                    <p>Milk Type</p>
                    <?php
                    // Select element source
                    $sql = "SELECT * FROM TMilkType";
                    $array = generate_array_from_sql($sql, "milk_type_id", "milk_type_name");

                    // Create a select element
                    generate_select_req("milk_type", $array, $cheese_milktype);
                    ?>
                    <p>Origin</p>
                    <?php
                    // Select element source
                    $sql = "SELECT * FROM TCountries ORDER BY country_name ASC";
                    $array = generate_array_from_sql($sql, "country_id", "country_name");

                    // Create a select element
                    generate_select_req("origin", $array, $cheese_origin);
                    ?>
                    <p>Image</p>
                    <input name="update-image" id="check" type="checkbox" value="true"><label for="check">Update Image</label>
                    <input name="cheese-image" id="cheese-image" type="file">
                    <br>
                    <span class="image-upload-helper">Please make sure that the image is in the Portable Network Graphic (PNG) Format, and is under 2M. If this is not the case, the upload will fail.</span>
                    <br>
                    <input class="accent" type="submit" value="Update">
                </form>
                <?php
                    // End Admin Portal
                    echo "</div>";
                ?>
            </section>
        </main>
    </body>
</html>