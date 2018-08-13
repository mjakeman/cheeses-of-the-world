<?php
function internal_get_image($root_url, $cheese_id) {
    $conn = setup_connect_to_db();
    $sql = "SELECT * FROM TCheeses WHERE cheese_id=$cheese_id";

    // Query Result
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
                
        while($row = mysqli_fetch_assoc($result)) {
            $image = $row['cheese_image'];
            return $root_url . 'img/store/' . $image;
        }
    } else {
        return $root_url . 'img/missing_image.svg';
    }
}

function internal_upload_image_to_store($image_name, $target_name) {
    
    // Standard Error Message
    $err_start = "<div style='background-color: #e31a1a; padding: 20px; color: white;' class='error-div'><h3>Image Upload Failed</h3> The file could not be uploaded. Please make sure that the file is in the Portable Network Graphic (PNG) Format, and is under 2 MB in size.<br><br><b>Reason:</b> ";
    $err_end = " Please correct these errors and try again." . "</div>";

    // Get target directory
    $target_dir = $_SERVER["DOCUMENT_ROOT"] . '/img/store/';
    
    // Get target file
    // Image name is set by the caller
    $target_file = $target_dir . $target_name;

    // Get file type extension
    $img_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check that the file was sent
    if (!(isset($_FILES[$image_name]))) {
        die("Image does not exist");
    }

    // Error Checking
    switch ($_FILES[$image_name]['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            echo "Variable Dump &amp;_FILES['$image_name']:<br>";
            var_dump($_FILES[$image_name]);
            die($err_start . "No file sent." . $err_end);
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            echo "Variable Dump &amp;_FILES['$image_name']:<br>";
            var_dump($_FILES[$image_name]);
            die($err_start . "File exceeded max upload size" . $err_end);
        default:
            echo "Variable Dump &amp;_FILES['$image_name']:<br>";
            var_dump($_FILES[$image_name]);
            die($err_start . "Miscellaneous unknown error occurred." . $err_end);
    }

    // Check if file is actually an image
    $check = getimagesize($_FILES[$image_name]["tmp_name"]);
    if ($check !== false) {
        echo "File has type of " . $check["mime"] . ".";
        $result = 1;
    } else {
        die($err_start . "File is not an image, or was not uploaded correctly." . $err_end);
    }

    // Check if file already exists
    // Should never happen
    if (file_exists($target_file)) {
        die($err_start . "File already exists in the database." . $err_end);
    }

    // Make sure the file has a sane file size
    // 500kb should be enough
    if ($_FILES["$image_name"]["size"] > 2000000) {
        die($err_start . "File is too large. Please make sure the file is less than 2MB" . $err_end);
    }

    // Make sure file is a png
    if ($img_file_type != "png") {
        die($err_start . "Image must be a Portable Network Graphic (PNG)" . $err_end);
    }

    // Upload the Image
    if (move_uploaded_file($_FILES[$image_name]["tmp_name"], $target_file)) {
        // Success
        return 0;
    } else {
        // Fail
        die($err_start . "Could not move uploaded image to target location." . $err_end);
    }

}
?>