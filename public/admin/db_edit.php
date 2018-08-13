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

    // Use HTML Special Chars to prevent XSS
    // And use str_replace to allow the insertion of single quotes into SQL.
    $cheese_id = htmlspecialchars($_POST['cheese_id']);
    $cheese_name = str_replace("'", "''", htmlspecialchars($_POST['cheese_name']));
    $cheese_price = htmlspecialchars($_POST['price']);
    $cheese_desc = str_replace("'", "''", htmlspecialchars($_POST['description']));
    $cheese_flavour_id = htmlspecialchars($_POST['flavour']);
    $cheese_milk_type_id = htmlspecialchars($_POST['milk_type']);
    $cheese_origin_id = htmlspecialchars($_POST['origin']);

    $update_image = 0;
    if (isset($_POST['update-image']) && $_POST['update-image'] == "true")
    {
        $update_image = 1;
    }

    $conn = setup_connect_to_db();

    // Get current time in seconds since 1970 and append that to
    // the cheese id. This will ensure 100% unique image names.
    if ($update_image == 1) {
        $cheese_image = $cheese_name . "-" . time() . ".png";

        $result = upload_image_to_store("cheese-image", $cheese_image);

        if ($result == 0) {
            echo 'File uploaded successfully';
        } else {
            die('Could not upload image! Please make sure that the image is under 2MB, and is in a PNG format. Click <a href="new.php">here</a> to go back.');
        }

        // Update with image
        // NOTE: MUST HAVE WHERE CLAUSE OTHERWISE DATABASE WILL GET
        // OVERWRITTEN.
        $sql = "UPDATE TCheeses SET cheese_name='$cheese_name', cheese_price=$cheese_price, cheese_description='$cheese_desc', cheese_flavour_id=$cheese_flavour_id, cheese_milk_type_id=$cheese_milk_type_id, cheese_origin_id=$cheese_origin_id, cheese_image='$cheese_image' WHERE cheese_id=$cheese_id";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            $redirect = "Location: " . $ROOT_URL . "admin.php";
            // Cause the redirect
            header($redirect);

        } else {
            echo "Could not execute query:" . $sql . "<br>" . "MySQL Error: " . mysqli_error($conn);
        }

    } else {
        // Update without image
        // NOTE: MUST HAVE WHERE CLAUSE OTHERWISE DATABASE WILL GET
        // OVERWRITTEN.
        $sql = "UPDATE TCheeses SET cheese_name='$cheese_name', cheese_price=$cheese_price, cheese_description='$cheese_desc', cheese_flavour_id=$cheese_flavour_id, cheese_milk_type_id=$cheese_milk_type_id, cheese_origin_id=$cheese_origin_id WHERE cheese_id=$cheese_id";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            $redirect = "Location: " . $ROOT_URL . "admin.php";
            // Cause the redirect
            header($redirect);

        } else {
            echo "Could not execute query:" . $sql . "<br>" . "MySQL Error: " . mysqli_error($conn);
        }
    }
?>