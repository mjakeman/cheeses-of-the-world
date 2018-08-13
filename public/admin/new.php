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
?>

<!DOCTYPE html>
<html>
    <head>
        <?php generate_head("New Item"); ?>
    </head>
    <body>
        <main>
            <section>
                <?php
                    $conn = setup_connect_to_db();
                    
                    // Start Admin Portal
                    echo "<div class='admin-portal-container'>";
                    
                    // Greeting and Actions
                    echo "<h2>Add New Cheese</h2>";
                    echo "<p class='admin-actions'><a href='portal.php'>Go Back</a> | <a href='logout.php'>Logout</a></p>";
                ?>
                <form class="admin-form" action="db_new.php" enctype="multipart/form-data" method="post">
                    <h4>Cheese Properties</h4>
                    <input class="hidden" name="cheese_id" value="<?php echo $cheese_id; ?>">
                    <p>Name</p>
                    <input required name="cheese_name">
                    <p>Price</p>
                    <input required step="0.01" type="number" name="price">
                    <p>Description</p>
                    <textarea required name="description"></textarea>
                    <p>Flavour</p>
                    <?php
                    // Select element source
                    $sql = "SELECT * FROM TFlavour";
                    $array = generate_array_from_sql($sql, "flavour_id", "flavour_name");

                    // Create a select element
                    generate_select_req("flavour", $array, 0);
                    ?>
                    <p>Milk Type</p>
                    <?php
                    // Select element source
                    $sql = "SELECT * FROM TMilkType";
                    $array = generate_array_from_sql($sql, "milk_type_id", "milk_type_name");

                    // Create a select element
                    generate_select_req("milk_type", $array, 0);
                    ?>
                    <p>Origin</p>
                    <?php
                    // Select element source
                    $sql = "SELECT * FROM TCountries ORDER BY country_name ASC";
                    $array = generate_array_from_sql($sql, "country_id", "country_name");

                    // Create a select element
                    generate_select_req("origin", $array, 0);
                    ?>
                    <p>Image</p>
                    <input required name="cheese-image" id="cheese-image" type="file">
                    <br>
                    <span class="image-upload-helper">Please make sure that the image is in the Portable Network Graphic (PNG) Format, and is under 2M. If this is not the case, the upload will fail.</span>
                    <br>
                    <input class="accent" type="submit" value="Create">
                </form>
                <?php
                    // End Admin Portal
                    echo "</div>";
                ?>
            </section>
        </main>
    </body>
</html>