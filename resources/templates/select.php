<?php

// This function takes in an array of (int, string) pairs and iterates
// over them to create a select element. Assumes that the input will be
// safe. It is up to the caller to make sure
function internal_generate_select($name, $array, $selected, $required) {
    if ($required) {
        echo "<select name='$name' required>\n";
    } else {
        echo "<select name='$name'>\n";
    }    
    foreach($array as $i => $item) {
        if ($i == $selected) {
            echo "    <option selected value='$i'>$item</option>\n";
        } else {
            echo "    <option value='$i'>$item</option>\n";
        }
    }
    echo "</select>\n";
}

// This function takes a MySQL query and iterates over the data to produce
// an array compatible with the above function. Assumes that each element
// has a unique id.
function internal_generate_array_from_sql($sql, $id_field, $text_field) {
    $conn = setup_connect_to_db();

    // Query Result
    $result = mysqli_query($conn, $sql);

    $array = [];

    // If there are results, iterate over them, otherwise
    // return empty array.
    if (mysqli_num_rows($result) > 0) {
        // Push to array for each record
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row[$id_field];
            $text = $row[$text_field];

            $array[$id] = $text;
        }
        return $array;
    } else {
        // Return empty
        return $array;
    }
}

?>