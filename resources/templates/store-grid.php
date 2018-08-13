<?php 
function internal_generate_grid_item($id, $name, $price) {
    $price_disp = number_format($price, 2);
    $image = get_image($id);
    echo <<<HEREDOC
<a href="item.php?cheese_id=$id" class="store-grid-item">
    <header style="background-image: url('$image')">
        
    </header>
    <div class="desc">
        <h1>$name</h1>
        <p>\$$price_disp</p>
    </div>
    
</a>
HEREDOC;
}

function internal_generate_store_grid($length, $sql) {
    $conn = setup_connect_to_db();

    echo "<div class='store-grid'>";

    // Query Result
    $result = mysqli_query($conn, $sql);

    if ($result == false) {
        die("<div style='background-color: #388E8E; padding: 20px; color: white;' class='error-div'>We are currently experiencing technical difficulties. Please email our staff and report the following error message: " . mysqli_error($conn) . " <br>Note to Admin: The MySQL Query failed. Is the database set up correctly? Please read the enclosed README.txt for more information.<br> &mdash; The Cheeses of the World Team</div>");
    }

    // If there are results, iterate over them, otherwise
    // output an error message.
    if (mysqli_num_rows($result) > 0) {
        
        $counter = 0;
        
        // Output Card for each record
        while($row = mysqli_fetch_assoc($result)) {
            if ($counter < $length) {
                internal_generate_grid_item($row["cheese_id"], $row["cheese_name"], $row["cheese_price"]);
                // echo "ID: " . $row["cheese_id"]. " - Name: " . $row["cheese_name"]. " - Price: $" . $row["cheese_price"]. "<br>";
                // echo "<em>Description: </em>" . $row["cheese_description"] . "<br><br>";
            }
            else {
                break;
            }

            $counter++;
        }
    } else {
        echo "<div class='store-grid-no-results'>Sorry! There do not appear to be any cheeses here... (No Results Found)</div>";
    }

    echo "</div>";
}
?>

<div class="store-grid">
</div>