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

    $cheese_id = $_POST['cheese_id'];

    echo "Deleting Cheese id=$cheese_id";

    $conn = setup_connect_to_db();
    $sql = "DELETE FROM TCheeses WHERE cheese_id=$cheese_id";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        $redirect = "Location: " . $ROOT_URL . "admin.php";
        // Cause the redirect
        header($redirect);

    } else {
        echo "Could not execute query:" . $sql . "<br>" . "MySQL Error: " . mysqli_error($conn);
    }
?>