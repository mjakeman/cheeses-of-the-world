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

    $cheese_id = $_GET['id'];
    $conn = setup_connect_to_db();
    $sql = "SELECT * FROM TCheeses WHERE cheese_id=$cheese_id";

    // Variables
    $cheese_name = "";

    // Query Result
    $result = mysqli_query($conn, $sql);

    // There should always be one result
    if (mysqli_num_rows($result) == 1) {
        
        $counter = 0;
        
        // Output Card for each record
        while($row = mysqli_fetch_assoc($result)) {
            $cheese_name = $row['cheese_name'];
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <?php generate_head("Delete Confirmation"); ?>
    </head>
    <body>
        <main>
            <section>
                <?php
                    $conn = setup_connect_to_db();
                    
                    // Start Admin Portal
                    echo "<div class='admin-portal-container'>";
                    
                    // Greeting and Actions
                    echo "<h2>Remove Item</h2>";
                    echo "<p class='admin-actions'><a href='portal.php'>Go Back</a> | <a href='logout.php'>Logout</a></p>";
                ?>
                <form class="admin-form" action="db_remove.php" enctype="multipart/form-data" method="post">
                    <h4>Are You Sure?</h4>
                    <input class="hidden" name="cheese_id" value="<?php echo $cheese_id; ?>">
                    <input class="damage" type="submit" value="Delete '<?php echo $cheese_name; ?>' Permanently">
                    <span class="image-upload-helper">Are you sure you want to delete Cheese '<?php echo $cheese_name;?>'? This action is permanent and cannot be undone.</span>
                </form>
                <?php
                    // End Admin Portal
                    echo "</div>";
                ?>
            </section>
        </main>
    </body>
</html>