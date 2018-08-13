<?php
// Automatically creates a list item for the footer.
function internal_footer_item($title, $href) {
    return "<li><a href='$href'>$title</a></li>";
}

function internal_footer_column($title, $array) {
    $output = "<ul class='footer-column'>";
    $output = $output . "<h3 class='footer-column-heading'>$title</h3>";
    for ($x = 0; $x < count($array); $x++) {
        $output = $output . '    ' . $array[$x];
    }
    $output = $output . "</ul>";
    return $output;
}

function internal_generate_footer() {
    // Localise the column generator function
    $col = 'internal_footer_column';
    $date = date("Y");

    $column1 = [
        0 => internal_footer_item("Home", "index.php"),
        1 => internal_footer_item("Cheese Map", "map.php"),
        2 => internal_footer_item("Recipes", "recipes.php"),
        3 => internal_footer_item("About", "about.php"),
        4 => internal_footer_item("Shop", "shop.php"),
        5 => internal_footer_item("Admin", "admin.php"),
    ];

    $column2 = [
        0 => internal_footer_item("Europe", "map.php?map=4"),
        1 => internal_footer_item("Asia", "map.php?map=7"),
        2 => internal_footer_item("North America", "map.php?map=1"),
        3 => internal_footer_item("South America", "map.php?map=3"),
        4 => internal_footer_item("Oceania", "map.php?map=8"),
        5 => internal_footer_item("Africa", "map.php?map=6"),
        6 => internal_footer_item("Central America", "map.php?map=2"),
        7 => internal_footer_item("Middle East/North Africa", "map.php?map=5"),
    ];

    $column3 = [
        0 => internal_footer_item("Facebook", "https://www.facebook.com/"),
        1 => internal_footer_item("Instagram", "https://www.instagram.com/"),
        2 => internal_footer_item("Youtube", "https://www.youtube.com/"),
        3 => internal_footer_item("Tumblr", "https://www.tumblr.com/"),
    ];

    // Output
    $output = <<<HEREDOC
<footer class="global-footer">
	<nav>
        {$col("Navigation", $column1)}
        {$col("Cheese Map", $column2)}
        {$col("Connect", $column3)}
    </nav>
    <div class="attribution">
        <p>This website was created by Matthew Jakeman. All HTML, CSS, PHP, and Graphics is original work, created by Matthew Jakeman. Images are the property of their respective owners. Attribution and licensing can be viewed <a href="attr.php">here</a>.</p>
    </div>
    <div class="copyright">
        <p>&copy; Cheeses of the World, plc. All Rights Reserved (2018&ndash;$date).</p>
    </div>
</footer>
HEREDOC;

    // Return Output
    echo $output;
}
?>